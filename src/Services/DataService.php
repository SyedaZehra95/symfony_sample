<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Visitors;
use App\Entity\Gender;
use App\Entity\AgeDistribution;
use App\Entity\AgeRange;
use App\Entity\Ethnicity;
use App\Entity\EthnicGroup;

class DataService{
    private $manager;

    public function __construct(EntityManagerInterface $manager )
    {
        $this->manager=$manager;
        
    }
    
    public function fetchAll($className){
        switch($className){
            case 'AgeRange':
                return $this->manager->getRepository(AgeRange::class)->findAll();
                break;
            case 'EthnicGroup':
                return $this->manager->getRepository(EthnicGroup::class)->findAll();
                break;
            default:
                echo 'Cannot find the dependencies';
        }
       
        
    }

    public function fetchVisitorCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(Visitors::class)->findAll();
       $data[1]=$this->manager->getRepository(Gender::class)->findAll();

       return $data;
    }
    public function fetchGenderCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(Gender::class)->findAll();

       return $data;
    }
    public function fetchAgeCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(AgeDistribution::class)->findAll();

       return $data;
    }
    public function fetchEthnicCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(Ethnicity::class)->findAll();

       return $data;
    }
    public function fetchEthnicGenderCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(Ethnicity::class)->findAll();
       $data[1]=$this->manager->getRepository(Gender::class)->findAll();

       return $data;
    }
    public function fetchAgeGenderCharts() {
        $data=array();

       $data[0]=$this->manager->getRepository(AgeDistribution::class)->findAll();
       $data[1]=$this->manager->getRepository(Gender::class)->findAll();

       return $data;
    }



    public function fetchBy($className,$args){
        switch($className){
            case 'Visitors':
                return $this->manager->getRepository(Visitors::class)->findBy($args);
                break;
            case 'Gender':
                return $this->manager->getRepository(Gender::class)->findBy($args);
                break;
            case 'AgeDistribution':
                return $this->manager->getRepository(AgeDistribution::class)->findBy($args);
                break;
            case 'AgeRange':
                return $this->manager->getRepository(AgeRange::class)->findBy($args);
                break;
            case 'Ethnicity':
                return $this->manager->getRepository(Ethnicity::class)->findBy($args);
                break;
            case 'EthnicGroup':
                return $this->manager->getRepository(EthnicGroup::class)->findBy($args);
                break;
            default:
                echo 'The entity in request does not exist';

        }

    }
}
