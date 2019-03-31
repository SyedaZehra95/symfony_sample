<?php

namespace App\Controller\Api;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Validator\ViewDataValidator;
use App\Helper\ExceptionCode;
use App\Helper\ExceptionHelper;
use App\Services\DataService;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use App\Dto\RequestDto;

class DatabaseController extends AbstractFOSRestController
{
    /**
     * @FOSRest\get("/galleryList")
     * @return View
     */
    public function getGalleries(){
        try {
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("SELECT * FROM galleries");
            $statement->execute();
            $result=$statement->fetchAll();
            
            
             
            
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }

    }
        /**
     * @FOSRest\Post("/createGallery")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function newGallery(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService )
    {
        try {
           
            $fields=$requestdto->getViewData()->getFieldSet();
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("INSERT INTO galleries (galleryid,displayname,matchthreshold,active) VALUES (:id,:name,:threshold,:bool)");
            $statement->bindValue('id',str_replace(' ','',$fields['name']));
            $statement->bindValue('name',$fields['name']);
            $statement->bindValue('threshold',0.6);
            $statement->bindValue('bool',1);
            $result=$statement->execute();
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }
    public function existingCases($whereFieldSet){
        $res = $this->getDoctrine()->getRepository(Gallery::class)->findAll();
        return $res;
    }

    public function Insert($whereFieldSet){
        $gallery=new Gallery();
        $w=$whereFieldSet;
        $gallery->setCaseID($w['caseID']);
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
    return array('this','true');
    }

    /**
     * @FOSRest\get("/detected")
     * @return View
     */
    public function emotionsDetected(){
        try {
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("SELECT * FROM common_emo_tbl");
            $statement->execute();
            $result=$statement->fetchAll();
            
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * @FOSRest\get("/captured")
     * @return View
     */
    public function emotionsCaptured(){
        try {
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("SELECT * FROM person_emo_tbl");
            $statement->execute();
            $result=$statement->fetchAll();
            
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * @FOSRest\get("/unattended")
     * @return View
     */
    public function visitorUnattended(){
        try {
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("SELECT * FROM unattended LIMIT 10");
            $statement->execute();
            $result=$statement->fetchAll();
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * @FOSRest\get("/galleryvisit")
     * @return View
     */
    public function visitorGallery(){
        try {
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("SELECT * FROM spotted_cases LIMIT 5");
            $statement->execute();
            $result=$statement->fetchAll();
            return View::create($result, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }

    }


            /**
     * @FOSRest\Post("/deleteUnattended")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function deleteUnattended(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService )
    {
        try {
           
            $fields=$requestdto->getViewData()->getFieldSet();
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("DELETE FROM unattended WHERE id= :id");
            $statement->bindValue('id',$fields['id']);
            $result=$statement->execute();
            return View::create(true, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }

     /**
     * @FOSRest\Post("/deleteVisits")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function deleteVisits(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService )
    {
        try {
           
            $fields=$requestdto->getViewData()->getFieldSet();
            $manager=$this->getDoctrine()->getManager();
            $connection=$manager->getConnection();
            $statement=$connection->prepare("DELETE FROM spotted_cases WHERE id= :id");
            $statement->bindValue('id',$fields['id']);
            $result=$statement->execute();
            return View::create(true, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }

    public function Delete($whereFieldSet){
        $manager=$this->getDoctrine()->getManager();
        $w=$requestdto->getViewData()->getWhereFieldset();
        $rec = $manager->getRepository(Gallery::class)->find($w['caseID']);
        $manager->remove($rec);
        $manager->flush();
        return array('this','true');
        
    }
}
