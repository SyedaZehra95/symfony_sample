<?php
namespace App\Resource;

class EventResource{
    

    public function Visitors($fieldSet){
        $params=array();
        $params['name']='getDescription';
        $params['parameters']=$fieldSet;

        return $params;
    }
    public function People($fieldSet){
        $params=array();
        $params['name']='getDescription';
        $params['parameters']=$fieldSet;

        return $params;
    }

    public function Gender($fieldSet){
        $params=array();
        $params['name']='getDescription';
        $params['parameters']=$fieldSet;

        return $params;
    }

    public function AgeDistribution($fieldSet){
        $params=array();
        $params['name']='getDescription';
        $params['parameters']=$fieldSet;

        return $params;
    }
    public function Ethnicity($fieldSet){
        $params=array();
        $params['name']='getDescription';
        $params['parameters']=$fieldSet;

        return $params;
    }

}