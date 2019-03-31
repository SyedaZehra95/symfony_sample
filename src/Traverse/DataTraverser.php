<?php

namespace App\Traverse;

class DataTraverser{
    private $tree;

    public function __construct($tree)
    {
        $this->tree=$tree;
    }

    public function Visitors(){
        $date=array();
        $time=array();
        $male=array();
        $female=array();
        $labels=array('Visitors'=>0,'Female'=>1,'Male'=>2);
        foreach($this->tree as $branch){
           
            foreach($branch as $fruit){
                foreach($fruit as $key=>$value ){
                    echo $key.'--<br/>';
                }
            }
        }
    }
}