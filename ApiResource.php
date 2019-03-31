<?php
namespace App\Resource;

class ApiResource{
    public $addCase='fvdb-addCase';
    public $caseExist='fvdb-caseExists';
    public $existingCases='fvdb-getAllExistingCases';

    public function Insert($fieldSet){
        $params=array();
        $params['name']='fvdb-addCase';
        $params['parameters']=$fieldSet;

        return $params;
    }
    public function addCase($fieldSet){
        $params=array();
        $params['name']='fvdb-createAndAddCase';
        $params['parameters']=$fieldSet;

       return $params;
    }
    public function caseExist($fieldSet){
        $params=array();
        $params['name']='fvdb-caseExists';
        $params['parameters']=$fieldSet;

        return $params;
    }

    public function existingCases($fieldSet){
        $params=array();
        $params['name']='fvdb-getAllExistingCases';
        
        $params['parameters']=$fieldSet;

        return $params;
    }

    public function Delete($fieldSet){
        $params=array();
        $params['name']='fvdb-deleteCase';
        $params['name2']='fvdb-deleteFIR';
        $params['parameters']=$fieldSet;

        return $params;
    }

    public function updateCase($fieldSet){
        $params=array();
        $params['name']='fvdb-changeCaseProperties';
        $params['parameters']=$fieldSet;
        
        return $params; 
    }
    public function addImageCase($fieldSet){
        $params=array();
        $params['name']='enrollment-set';
        $params['parameters']=$fieldSet;
        
        return $params;

    }
    public function getImage($fieldSet){
        $params=array();
        $params['name']='fvdb-getCaseImages';
        $params['parameters']=$fieldSet;
        
        
        return $params;
    }
}