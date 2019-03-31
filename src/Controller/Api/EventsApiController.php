<?php
namespace App\Controller\Api;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Component\HttpFoundation\Response;
use App\Dto\RequestDto;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Validator\ViewDataValidator;
use App\Helper\ExceptionHelper;
use App\Helper\ExceptionCode;
use App\Helper\EventHelper;
use App\Traverse\EventTraverser;
use App\Helper\DatabaseHelper;
use App\Services\DataService;
use App\Helper\ConsoleHelper;
use Doctrine\ORM\EntityManagerInterface;


/**
 * Gallery Controller
 *
 */
class EventsApiController extends AbstractFOSRestController{
   

    /**
     * @FOSRest\Post("/events")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function eventRequest(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService )
    {
        try {
            
            $manager= new EventHelper($requestdto);
            $res=$manager->getEventResponse();
            $doctrineManager=$this->getDoctrine()->getEntityManager();
            $function=$requestdto->getCommand();
            $traverse= new EventTraverser($res,$function,$dataService);
            
             $res=$traverse->$function($doctrineManager);
            
             
            
            return View::create($res, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }


    /**
     * @FOSRest\Post("/charts")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function dataRequest(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService)
    {
       
        try {
            $function=$requestdto->getCommand();     
             $dbHelper= new DatabaseHelper($dataService);
             $res= $dbHelper->$function();
             
            
            return View::create($res, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }

    /**
     * @FOSRest\Post("/consoleEvent")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function consoleRequest(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,EntityManagerInterface $manager)
    {
       
        try {

            $function=$requestdto->getCommand();     
             $csHelper= new ConsoleHelper($requestdto,$manager);
             $res= $csHelper->getConsoleResponse();
             
            
            return View::create($res, Response::HTTP_OK );
        }catch(\Exception $exception){
            return View::create($exception, Response::HTTP_BAD_REQUEST);
        }


    }

    

}