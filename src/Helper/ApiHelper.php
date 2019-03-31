<?php
namespace App\Helper;

use App\Resource\ApiResource;
use App\Dto\RequestDto;

class ApiHelper{
    private $requestDto;

    public function __construct(RequestDto $requestDto){
        $this->requestDto=$requestDto;
    }

    public function getApiResponse(){
        $soap=new \SoapClient(dirname(__FILE__).DIRECTORY_SEPARATOR.'FVVideoScan_Integration.wsdl',array('encoding'=>'ISO-8859-1'));
        ini_set("soap.wsdl_cache_enabled", "0");
        $apiFunction=new ApiResource();
        $function=$this->requestDto->getCommand();
        $functionDets=$apiFunction->$function($this->requestDto->getViewData()->getFieldSet());
       
        
        
        $apiResponse=$soap->__soapCall($functionDets['name'],array('parameters'=>$functionDets['parameters']));
       if(array_key_exists('name2',$functionDets)){
          $apiResponses=$soap->__soapCall($functionDets['name2'],array('parameters'=>$functionDets['parameters']));
          
       }
      
       
       
        return $apiResponse;
    }

}