<?php
namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use App\Dto\RequestDto;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Validator\ViewDataValidator;
use App\Helper\ExceptionHelper;
use App\Helper\ExceptionCode;
use App\Helper\ApiHelper;
use App\Entity\Gallery;
use App\Repository\GalleryRepository;



/**
 * Gallery Controller
 *
 */
class GalleryApiController extends AbstractFOSRestController{
    /**
     * @FOSRest\Post("/gallery")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param GalleryRepository $profileRepository
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function galleryRequest(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper)
    {
        try {
            $arr=array();
            $i=0;
            $manager= new ApiHelper($requestdto);
            $res=$manager->getApiResponse();
           
            if($requestdto->getCommand()==='Insert' || $requestdto->getCommand()==='addCase'){
                $fields=$requestdto->getviewData()->getWhereFieldset();
               if($requestdto->getCommand()==='addCase'){
                $fields=array('caseId'=>$res->caseId,'imgSet'=>array('images'=>array('binaryImg'=>$fields['imgSet']['images']['binaryImg'])));
                
              
               }
                
                $fields['imgSet']['images']['binaryImg']=file_get_contents($fields['imgSet']['images']['binaryImg']);
                $set=array('command'=>'addImageCase','viewData'=>array('fieldSet'=>$fields));
                
                $requestdto->populateFromArray($set);
               $res=$manager->getApiResponse();
            }
            $count=count(json_decode(json_encode($res),true));
            
          
            if($requestdto->getCommand()==='alive'){
                $res=json_decode(json_encode($res),true);
                if(empty($res)){
                    $arr['alive']=true;
                }else{
                    $arr['alive']=false;
                }
                
            }elseif($requestdto->getCommand()==='existingCases' && $count!=0){
             $root=json_decode(json_encode($res->values),true);
             
                if(array_key_exists('values',$res) && !array_key_exists('caseId',$res->values)){
                    
                    
                    foreach($res->values as $valuess){
                        $arr=$this->parsecases($valuess,$arr,$i,$requestdto);
                        $i++;
                    }
                }else{
                    $arr=$this->parsecases($res->values,$arr,$i,$requestdto);
                }

            }else{
               
                $arr=json_decode(json_encode($res),true);
            }

           
          

          if($requestdto->getCommand()=='existingCases'){
            $res = $this->getDoctrine()->getRepository(Gallery::class)->findAll();
           }elseif($requestdto->getCommand()=='Insert'){
            $gallery=new Gallery();
            $f=$requestdto->getViewData()->getFieldset();
            $w=$requestdto->getViewData()->getWhereFieldset();
            if($f['caseID']=='' || empty($f['caseIID'])){
                $rnd=rand(1000,1000000);
                $gallery->setCaseID($rnd);
            }else{
                $gallery->setCaseID($f['caseID']);
            }
            
            $gallery->setConfidence(0.0);
            $gallery->setEyeConfidence(0.0);
         
            $gallery->setImage($w['image']);
            
            $gallery->setGallery($w['gallery']);
            $gallery->setName($w['name']);
            $gallery->setRejected(false);
            $gallery->setXLeft(111.010);
            $gallery->setYLeft(82.010);
            $gallery->setXRight(92.010);
            $gallery->setYRight(11.010);
            $gallery->setEyes(true);
            $gallery->setTransactionID('123453-vdfvd-234234');

            $manager=$this->getDoctrine()->getManager();
            $manager->persist($gallery);

            $manager->flush();
            $res=array('this','true');
               
           }
           
           
          
          
            return View::create($arr, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }

    public function parsecases($valuess,$arr,$i,$requestdto){
       
        foreach($valuess as $key=>$value){
                          
            if($key=='caseId'){
                $arr[$i]['caseID']=$value;
                $set=array('command'=>'getImage','viewData'=>array('fieldSet'=>array('caseID'=>$value,'thumbnailHeight'=>'100')));
                $requestdto->populateFromArray($set);
               
                
                $am=new ApiHelper($requestdto);
                $img=$am->getApiResponse();
               //var_dump($img);
              
                foreach($img as $k=>$v){
                    
                    foreach($v as $imgkey=>$value){
                       
                        if($imgkey=='img'){
                            $arr[$i]['image']=base64_encode($value->binaryImg);
                           
                            
                        }

                       
                        
                    }
                    
                }
                
                
            }elseif($key=='name'){
                $arr[$i]['name']=$value;
            }elseif($key=='property'){
                $arr[$i]['property']=$value;
            }
            
        }
        
        return $arr;
    }


}
