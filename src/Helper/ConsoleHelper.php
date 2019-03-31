<?php
namespace App\Helper;

use App\Dto\RequestDto;
use Doctrine\ORM\EntityManagerInterface;
use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;
use App\Entity\SpottedCases;
use App\Entity\Unattended;

class ConsoleHelper{
    private $requestDto;
    private $manager;
    /**
     * 
     *
     * @param RequestDto $requestDto
     */
    public function __construct(RequestDto $requestDto,EntityManagerInterface $manager){
        $this->requestDto=$requestDto;
        $this->manager=$manager;
    }

    public function getConsoleResponse(){
        $soap=new \SoapClient(dirname(__FILE__).DIRECTORY_SEPARATOR.'FVVideoScan_EventData.wsdl',array('encoding'=>'ISO-8859-1'));
        ini_set("soap.wsdl_cache_enabled", "0");
        $functions=array('getNotifications','getDescription','getImage','getVideo');
        $notification=$soap->__soapCall($functions[0],array('parameters'=>array('knowsEvents'=>array('eventId'=>'','generationId'=>''))));
        $data=json_decode(json_encode($notification),true);
       $response=array();$i=0;
        foreach($data['notifications'] as $tree=>$branch){
            $res=array();
            if($branch['state']=='EventEnded' || $branch['detectorId']!=$this->requestDto->getCommand()){
                
                continue;
            }
            $id=$branch['eventId'];
            if($this->requestDto->getCommand()=='WatchDetector'){
                $result=$this->getDescription($soap,$id);
                $response[$i]=$result;
                $i++;
            }elseif($this->requestDto->getCommand()=='attend'){
                
                $result=$this->getAttended($soap,$id);
                
                $response[$i]=$result;
                
                $i++;
                
                
            }
            
        }
       
        var_dump($response);
      
       // return $response;
    }

    public function getDescription($soap,$id){
        $detected=array();$i=0;
        $imgId='';$ethnicity='';$age='';$caseId='';$date='';$zone='';$gender='';$galleryCase='';$gallery='';$name='';
            $description=$soap->__soapCall('getDescription',array('parameters'=> array('id'=>$id)));
            
            $desc=json_decode(json_encode($description),true);
            
            
           // echo count($desc['ged']['namedEventMembers']);
            $galleryCase=$desc['ged']['namedEventMembers'][4]['eventMember']['eventMembers']['namedEventMembers'][0]['eventMember']['str'];
            $gallery=$desc['ged']['namedEventMembers'][4]['eventMember']['eventMembers']['namedEventMembers'][3]['eventMember']['str'];
            $name=$desc['ged']['namedEventMembers'][4]['eventMember']['eventMembers']['namedEventMembers'][5]['eventMember']['str'];
            
            foreach($desc['ged']['namedEventMembers'] as $stem=>$leaf){
            
                foreach($leaf as $key=>$value){
                    //echo $leaf['name'];
                    
                    if($leaf['name']=='visit'){
                        //var_dump($leaf['eventMember']);
                        foreach($leaf['eventMember']['namedEventMembers'] as $node){
                            
                            if($node['name']=='zoneId'){
                                $zone=$node['eventMember']['str'];
                            }
                        }

                    }elseif($leaf['name']=='mostRecentAppearance'){
                        $caseId= $leaf['eventMember']['namedEventMembers'][0]['eventMember']['str'];
                        $imgId=$this->getImage($soap, $leaf['eventMember']['namedEventMembers'][2]['eventMember']['id']);
                        $emotion=$this->getEmotion($imgId);
                        
                        echo $emotion;
                        $date=$leaf['eventMember']['namedEventMembers'][3]['eventMember']['timeStamp'];
                        $age=$leaf['eventMember']['namedEventMembers'][6]['eventMember']['num'];
                        $index=(int)$leaf['eventMember']['namedEventMembers'][8]['eventMember']['index'];
                        $gender=$leaf['eventMember']['namedEventMembers'][8]['eventMember']['values'][$index];
                        $index=(int)$leaf['eventMember']['namedEventMembers'][9]['eventMember']['index'];
                        $ethnicity=$leaf['eventMember']['namedEventMembers'][9]['eventMember']['values'][$index];
                        $detected[$i]=array('case_id'=>$caseId,'gallery_case'=>$galleryCase,'zone'=>$zone,'gallery'=>$gallery,'name'=>$name,'gender'=>$gender,'age'=>$age,'ethnicity'=>$ethnicity,'image_base'=>$imgId,'spotted_at'=>$date);
                        $i++;
                        $spotted=new SpottedCases();
                            $spotted->setCaseId($caseId);
                            $spotted->setGalleryCase($galleryCase);
                            $spotted->setGallery($gallery);
                            $spotted->setName($name);
                            $spotted->setZone($zone);
                            $spotted->setImageBase($imgId);
                            $spotted->setSpottedAt($date);
                            $spotted->setAge($age);
                            $spotted->setGender($gender);
                            $spotted->setEthnicity($ethnicity);
                            $spotted->setEmotion($emotion);
                            
                            $this->manager->persist($spotted);
                            $this->manager->flush();
                               
                  

                    }elseif($leaf['name']=='appearances'){
                        continue;
                        
                        foreach($leaf['eventMember']['eventMembers'] as $nodes){
                            
                            $caseId= $nodes['namedEventMembers'][0]['eventMember']['str'];
                            $imgId=$this->getImage($soap, $nodes['namedEventMembers'][2]['eventMember']['id']);
                            $date=$nodes['namedEventMembers'][3]['eventMember']['timeStamp'];
                            $age=$nodes['namedEventMembers'][6]['eventMember']['num'];
                            $index=(int)$nodes['namedEventMembers'][8]['eventMember']['index'];
                            $gender=$nodes['namedEventMembers'][8]['eventMember']['values'][$index];
                            $index=(int)$nodes['namedEventMembers'][9]['eventMember']['index'];
                            $ethnicity=$nodes['namedEventMembers'][9]['eventMember']['values'][$index];
                            $detected[$i]=array('case_id'=>$caseId,'gallery_case'=>$galleryCase,'zone'=>$zone,'gallery'=>$gallery,'name'=>$name,'gender'=>$gender,'age'=>$age,'ethnicity'=>$ethnicity,'image_base'=>$imgId,'spotted_at'=>$date);
                            $i++;
                            $spotted=new SpottedCases();
                                $spotted->setCaseId($caseId);
                                $spotted->setGalleryCase($galleryCase);
                                $spotted->setGallery($gallery);
                                $spotted->setName($name);
                                $spotted->setZone($zone);
                                $spotted->setImageBase($imgId);
                                $spotted->setSpottedAt($date);
                                $spotted->setAge($age);
                                $spotted->setGender($gender);
                                $spotted->setEthnicity($ethnicity);
                                
                                
                             //   $this->manager->persist($spotted);
                             //   $this->manager->flush();
                           
                        
                        }
                    }
                }
            }
            return $detected;
    }

    public function getImage($soap,$id){
        $img=$soap->__soapCall('getImage',array('parameters'=>array('imageId'=>$id)));
        //$img=json_decode(json_encode($img),true);
        $base64 = base64_encode($img->imageAndMetaData->image->binaryImg);
        
        return $base64;
    }

    public function getAttended($soap,$id){
        
        $attended=$soap->__soapCall('getDescription',array('parameters'=> array('id'=>$id)));
            
        $desc=json_decode(json_encode($attended),true);
        //var_dump($desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][1]['eventMember']['num']);
        $zone=$desc['ged']['namedEventMembers'][1]['eventMember']['namedEventMembers'][4]['eventMember']['str'];
   
        $imgId=$desc['ged']['namedEventMembers'][0]['eventMember']['namedEventMembers'][0]['eventMember']['id'];
        $imgId=$this->getImage($soap,$imgId);
        $emotion=$this->getEmotion($imgId);
        
        $yob=$desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][1]['eventMember']['num'];
        $index=$desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][2]['eventMember']['index'];
        $gender=$desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][2]['eventMember']['values'][$index];
        $index=$desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][3]['eventMember']['index'];
        $ethnicity=$desc['ged']['namedEventMembers'][2]['eventMember']['namedEventMembers'][3]['eventMember']['values'][$index];
        $unattended=new Unattended();
        $unattended->setZone($zone);
        $unattended->setImageBase($imgId);
        $unattended->setYob($yob);
        $unattended->setGender($gender);
        $unattended->setEthnicity($ethnicity);
        $unattended->setEmotion($emotion);
        $this->manager->persist($unattended);
        $this->manager->flush();
        
        return array('zone'=>$zone,'yob'=>$yob,'gender'=>$gender,'ethnicity'=>$ethnicity);
        
    }

    public function getEmotion($img){
        $json=json_encode(array('image'=>$img));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://40.122.37.245:5000/facerec');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $response = json_decode(curl_exec($ch),true);

        // If using JSON...
        //$data = json_decode($response);
        var_dump($response['emotion'][0]);
        
        if(empty($response['emotion'])){
            return 'none';
        }else{
            return $response['emotion'][0];
        }
        
}

}