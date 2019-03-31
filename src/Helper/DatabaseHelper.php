<?php
namespace App\Helper;

use App\Services\DataService;
use Symfony\Component\Validator\Constraints\DateTime;

class DatabaseHelper {
    private $service;

    public function __construct(DataService $dataService){
        $this->service=$dataService;
    }

    public function EthnicityChart(){
      $response=$this->service->fetchEthnicCharts();
      $data=array();
      $count=array();
      
      $group=array();
      $i=0;$j=0; $id=1;
      $c=0;
      foreach($response as $branch){
        foreach($branch as $key=>$value){
          $k=$value->getEthnicGroup();
          if($id != $k->getId()){
            $i++;
            $id=$k->getId();
            $c=0;
          }
          $group[$i]=$k->getDistribution();
          
          $c+=$value->getCount();
          $count[$i]=$c;
        }
      }
      
      $data=array('group'=>array_values($group),'count'=>array_values($count) );
      return $data;
    }

    public function EthnicGenderChart(){
      $response=$this->service->fetchEthnicGenderCharts();
      $date=array();
      $cauc=array();
      $black=array();
      $asian= array();
      $maleCount=array();
      $femaleCount=array();
      $time=array();
      
      foreach($response as $index=>$branch){
        foreach($branch as $stem => $leaf){
          
          if($index==0){
            $ethic= $leaf->getEthnicGroup()->getDistribution();
            $time[$leaf->getTime()]=$leaf->getTime();
            $femaleCount[$leaf->getTime()]=0;
            $maleCount[$leaf->getTime()]=0;
            $cauc[$leaf->getTime()]=0;
            $black[$leaf->getTime()]=0;
            $asian[$leaf->getTime()]=0;
            //var_dump($stem.' '.$leaf->getId().' '.$leaf->getDate().' '.$ethic.' '.$leaf->getCount());

            if($ethic=='Caucasian'){
              $cauc[$leaf->getTime()]=$leaf->getCount();
           
            }elseif($ethic=='Black'){
              $black[$leaf->getTime()]=$leaf->getCount();
            }else{
              $asian[$leaf->getTime()]=$leaf->getCount();
            }

          }else{
            if(\array_key_exists($leaf->getTime(),$time) ){
              $femaleCount[$leaf->getTime()]=$leaf->getFemale();
              $maleCount[$leaf->getTime()]=$leaf->getMale();
            }  
          }
        }
        

      }
       
     return $data=array('time'=>array_values($time),'caucasian'=> array_values($cauc),'black'=>array_values($black),'asian'=>array_values($asian),'female'=>array_values($femaleCount),'male'=>array_values($maleCount));

    }

    public function AgeGenderChart(){
      $response=$this->service->fetchAgeGenderCharts();
      $date=array();
      $t20=array();
      $t40=array();
      $t60= array();
      $t80= array();
      $t100= array();
      $maleCount=array();
      $femaleCount=array();
      $time=array();
      
      foreach($response as $index=>$branch){
        foreach($branch as $stem => $leaf){
          if($index==0){
            $age= $leaf->getAgeRange()->getDistribution();
            $time[$leaf->getTime()]=$leaf->getTime();
            $femaleCount[$leaf->getTime()]=0;
            $maleCount[$leaf->getTime()]=0;
            $t20[$leaf->getTime()]=0;
            $t40[$leaf->getTime()]=0;
            $t60[$leaf->getTime()]=0;
            $t80[$leaf->getTime()]=0;
            $t100[$leaf->getTime()]=0;
            //var_dump($stem.' '.$leaf->getId().' '.$leaf->getDate().' '.$age.' '.$leaf->getCount());
            if($age=='0 - 20'){
              $t20[$leaf->getTime()]=$leaf->getCount();
           
            }elseif($age=='21 - 40'){
              $t40[$leaf->getTime()]=$leaf->getCount();
            }elseif($age=='41 - 60'){
              $t60[$leaf->getTime()]=$leaf->getCount();
            }elseif($age=='61 - 80'){
              $t80[$leaf->getTime()]=$leaf->getCount();
            }else{
              $t100[$leaf->getTime()]=$leaf->getCount();
            }

          }else{
            if(\array_key_exists($leaf->getTime(),$time) ){
              $femaleCount[$leaf->getTime()]=$leaf->getFemale();
              $maleCount[$leaf->getTime()]=$leaf->getMale();
            }  
          }
        }
        

      }
       
     return $data=array('time'=>array_values($time),'0.0 - 20'=> array_values($t20),'21 - 40'=>array_values($t40),'41 - 60'=>array_values($t60),'61 - 80'=>array_values($t80),'41 - 60'=>array_values($t60),'81 - 100'=>array_values($t100),'female'=>array_values($femaleCount),'male'=>array_values($maleCount));

    }

    public function AgeChartHist(){
      $response=$this->service->fetchAgeCharts();
      $data=array();
      $count=array();
      
      $range=array();
      $i=0;$j=0; $id=1;
      $c=0;
      foreach($response as $branch){
        foreach($branch as $key=>$value){
          $k=$value->getAgeRange();
          if($id != $k->getId()){
            $i++;
            $id=$k->getId();
            $c=0;
            
            
          }
          $range[$i]=$k->getDistribution();
         
          $c+=$value->getCount();
          $count[$i]=$c;
          
          
          
          
        }
      }
      $data=array('range'=>array_values($range),'count'=>array_values($count) );
      return $data;
    }

    public function AgeChart(){
      $response=$this->service->fetchAgeCharts();
      $data=array();
      $date=array();
      $time=array();
      $range=array();
      $i=0;$j=0; $id=0;$newId=0;
      $ages=$this->service->fetchAll('AgeRange');
      foreach($ages as $object){
        $key=$object->getDistribution();
        $range[$key]=array();
      }
      foreach($response as $branch){
        foreach($branch as $key=>$value){
          $k=$value->getAgeRange();

          if($id != $k->getId()){
            $j++;
            $id=$k->getId();
          }
          
          if($k->getId()==1){
            $date[$i]=$value->getDate();
            $time[$i]=$value->getTime();
            $i++;

          }
          $range[$k->getDistribution()][$j]=$value->getCount();
          $j++;
          
        }
      }
      $data=array('date'=>array_values($date),'time'=>array_values($time),'range'=>$range );
      return $data;
    }
    public function ChartTwo(){
      $response=$this->service->fetchGenderCharts();
      $data=array();
      $date=array();
      $time=array();
      $male=array();
      $female=array();
        foreach($response as $index=>$branch){
          foreach($branch as $subIndex => $object){
           
              $date[$subIndex]=$object->getDate();
              $time[$subIndex]=$object->getTime();
              $male[$subIndex]=(int)$object->getMale();
              $female[$subIndex]=(int)$object->getFemale();
           
               

                }
                
            
            }
      
      
      $data=array('date'=>array_values($date),'time'=>array_values($time),'male'=>array_values($male),'female'=>array_values($female));
      
    
      
    return $data;

    }
    
    public function ChartOne(){
        $response=$this->service->fetchVisitorCharts();
        $data=array();
        $date=array();
        $time=array();
        $visitor=array();
        $male=array();
        $female=array();
        $timestamp=array();
       
        foreach($response as $index=>$branch){
            foreach($branch as $subIndex => $object){
              if($index==0){
                $d=$object->getDate();
                $t=$object->getTime();
                
                
                $d=\DateTime::createFromFormat('d-m-Y H:i',"$d $t");
                $d=$d->format('d-m-Y H:i');
                $date[$subIndex]=$d;
                $timestamp[$subIndex]=$d;
                $time[$subIndex]=$object->getTime();
                $visitor[$subIndex]=(int)$object->getCount();
                $male[$subIndex]=0;
                $female[$subIndex]=0;
              }elseif($index==1){
                  foreach($date as $key=>$value){
                    
                    if($value==$object->getDate() && $time[$key]==$object->getTime()){
                        
                        $male[$key]=(int)$object->getMale();
                        $female[$key]=(int)$object->getFemale();
                      }

                  }
                  
               
              }
            }
        }
        $data=array('timestamp'=>array_values($timestamp),'date'=>array_values($date),'time'=>array_values($time),'visitor'=>array_values($visitor),'male'=>array_values($male),'female'=>array_values($female));
        
      
        
       return $data;
    }
    
}

   
   
   