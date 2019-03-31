<?php
namespace App\Helper;

use App\Resource\EventResource;
use App\Dto\RequestDto;

class EventHelper{
    private $requestDto;

    public function __construct(RequestDto $requestDto){
        $this->requestDto=$requestDto;
    }

    public function getEventResponse(){
        $soap=new \SoapClient(dirname(__FILE__).DIRECTORY_SEPARATOR.'FVVideoScan_EventData.wsdl',array('encoding'=>'ISO-8859-1'));
        ini_set("soap.wsdl_cache_enabled", "0");
        
       /* $path='/Users/say_era/Downloads/zehra.jpeg';
        $data=file_get_contents($path);
        $type=pathinfo($path, PATHINFO_EXTENSION);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);*/
        //$fcs=$soap->__GetFunctions();
       // $params=array('caseId'=>'14','imgSet'=>array('images'=>array('binaryImg'=>$data)),'authName'=>'factics');
        $apiFunction=new EventResource();
        
        $function=$this->requestDto->getCommand();
        $functionDets=$apiFunction->$function($this->requestDto->getViewData()->getFieldSet());
      
        $eventResponse=$soap->__soapCall($functionDets['name'],array('parameters'=>$functionDets['parameters']));
        ;
      
        return $eventResponse;
    }

}