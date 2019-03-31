<?php 
namespace App\Traverse;

use App\Entity\Visitors;
use Doctrine\ORM\EntityManager;
use App\Entity\People;

use App\Entity\EthnicGroup;
use App\Services\DataService;
use App\Entity\Gender;
use App\Entity\AgeRange;
use App\Entity\AgeDistribution;
use App\Entity\Ethnicity;


class EventTraverser{
    private $branch;
    private $entity;
    private $service;
    public function __construct($tree,$event,DataService $service){
        
        $this->service=$service;
        
        $test=json_encode($tree);
        $tree=json_decode($test,true);
        $root=array_map(null,$tree);
        
       
        switch($event){
            case "Visitors":
                $this->branch=$root['ged']['namedEventMembers']['eventMember']['keyValueTable'];
                break;
            case "People":
                $this->branch=$root['ged']['namedEventMembers']['eventMember']['keyValueTable'];
                break;
            case "Gender":
                $this->branch=$root['ged']['namedEventMembers']['eventMember']['eventMembers'];
                break;
            case "AgeDistribution":
                $this->branch=$root['ged']['namedEventMembers']['eventMember']['eventMembers'];
                break;
            case "Ethnicity":
                $this->branch=$root['ged']['namedEventMembers']['eventMember']['eventMembers'];
                break;
            default:
                echo "Cannot process required event";
        }

        
    }

    public function Visitors(EntityManager $manager){
        
        foreach($this->branch as $index){
            $visitor=new Visitors();
            $count=0;
           foreach($index as $key=>$value){
            if($key=='key'){
                $visitor->setDate(date('d-m-y',strtotime($value)));
                $visitor->setTime(date('H:i',strtotime($value)));
                $repo=$this->service->fetchBy('Visitors',array('date'=>$visitor->getDate(),'time'=>$visitor->getTime()));
                $count=count($repo);
              
                if(count($repo)>0){
                    break;
                }
                
               
                
            }else{
                $visitor->setCount($value);
            }
            
           }
           
           if($count==0){
               
            $manager->persist($visitor);
            $manager->flush();
           }
           
           
        }
        return $this->branch;
    }

    public function People(EntityManager $manager){
        foreach($this->branch as $index){
            $people=new People();
           foreach($index as $key=>$value){
            if($key=='key'){
                $people->setPeopleDate(date('d-m-y',strtotime($value)));
                $people->setPeopleTime(date('H:i',strtotime($value)));
                
            }else{
                $people->setPeopleCount($value);
            }
            
           }
           $manager->persist($people);
            $manager->flush();
           
           
        }
        return $this->branch;

    }


    public function Gender(EntityManager $manager){
       
        $str='';
        foreach($this->branch as $index){
          
           foreach($index['namedEventMembers'] as $subIndex){
               
                foreach($subIndex['eventMember'] as $key=>$value){
                    if($key=='str' ){
                        $str=$value;
                        
                    }elseif($key=='keyValueTable'){
                        foreach($value as $val){
                            $this->entity=new Gender();
                            $count=0;
                            foreach($val as $k=>$v){
                                if($k=='key'){
                                    $this->entity->setDate(date('d-m-y',strtotime($v)));
                                    $this->entity->setTime(date('H:i',strtotime($v)));
                                    $repo=$this->service->fetchBy('Gender',array('date'=>$this->entity->getDate(),'time'=>$this->entity->getTime()));
                                    $count=count($repo);
                                    
                                    if(count($repo)>0){
                                        break;
                                    }
                                    
                                }else{
                                    if($str=='male'){
                                        $this->entity->setMale($v);
                                        $this->entity->setFemale(0);
                                    }else{
                                        $this->entity->setMale(0);
                                        $this->entity->setFemale($v);
                                    }
                                }
                            }
                            if($count==0){
                                $manager->persist($this->entity);
                                $manager->flush();
                            }
                        }
                      
                        
                    }
                }
           }
            
        }
       
        
        return $this->branch;

    }
    public function AgeDistribution(EntityManager $manager){
        
        foreach($this->branch as $index){
            
           foreach($index['namedEventMembers'] as $subIndex){
               
                foreach($subIndex['eventMember'] as $key=>$value){
                    if($key=='str' ){
                       $range = new AgeRange();
                       $range->setDistribution($value);
                       $range_exist=$this->service->fetchBy('AgeRange',array('distribution'=>$range->getDistribution()));
                       $range_id=0;
                       if(!empty($range_exist)){
                        $range_id=$range_exist[0]->getId(); 
                       }
                                            
                    }elseif($key=='keyValueTable'){
                        foreach($value as $val){
                            $this->entity=new AgeDistribution();
                            $count=0;
                            foreach($val as $k=>$v){
                                if($k=='key'){
                                    $this->entity->setDate(date('d-m-y',strtotime($v)));
                                    $this->entity->setTime(date('H:i',strtotime($v)));
                                    $repo=$this->service->fetchBy('AgeDistribution',array('date'=>$this->entity->getDate(),'time'=>$this->entity->getTime(),'AgeRange'=>$range_id));

                                    $count=count($repo);
                                    echo $count;
                                    
                                    if(count($repo)>0){
                                        break;
                                    }
                                    $this->entity->setAgeRange($range);
                                }else{
                                    $this->entity->setCount($v);
                                }
                            }
                            if($count==0){
                                if( count($range_exist)==0){
                                    $manager->persist($range);
                                }
                                 //$manager->merge($range);
                                 $manager->persist($this->entity);
                                 $manager->flush();
                                 $manager->clear();
                             }
                            
                        }
                      
                        
                    }
                }
           }
            
        }
        return $this->branch;
    }

    public function Ethnicity(EntityManager $manager){
        
        foreach($this->branch as $index){
            
            
           foreach($index['namedEventMembers'] as $subIndex){
               
                foreach($subIndex['eventMember'] as $key=>$value){
                    if($key=='str' ){
                        
                       $group = new EthnicGroup();
                       $group->setDistribution($value);
                       $group_exist=$this->service->fetchBy('EthnicGroup',array('distribution'=>$group->getDistribution()));
                       $group_id=0;
                       if(!empty($group_exist)){
                        $group_id=$group_exist[0]->getId(); 
                       }
                      
                    }elseif($key=='keyValueTable'){
                        foreach($value as $val){
                            $this->entity=new Ethnicity();
                            
                            $count=0;
                            foreach($val as $k=>$v){
                                if($k=='key'){
                                    $this->entity->setDate(date('d-m-y',strtotime($v)));
                                    $this->entity->setTime(date('H:i',strtotime($v)));
                                    $repo=$this->service->fetchBy('Ethnicity',array('date'=>$this->entity->getDate(),'time'=>$this->entity->getTime(),'ethnicGroup'=>$group_id));

                                    $count=count($repo);
                                    echo $count;
                                    
                                    if(count($repo)>0){
                                        break;
                                    }
                                    $this->entity->setEthnicGroup($group);
                                }else{
                                    $this->entity->setCount($v);
                                }
                            }
                            

                            if($count==0){
                               if( count($group_exist)==0){
                                   $manager->persist($group);
                               }
                                $manager->merge($group);
                                $manager->persist($this->entity);
                                $manager->flush();
                                $manager->clear();
                            }
                            
                        }
                      
                        
                    }
                }
           }
            
        }
        return $this->branch;
    }
    
    
}