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
use App\Helper\ApiHelper;
use App\Entity\Gallery;
use App\Repository\GalleryRepository;
use App\Services\DataService;

class EmotionsApiController extends AbstractFOSRestController{
    /**
     * @FOSRest\Post("/emotions")
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @param ViewDataValidator $viewDataValidator
     * @param ExceptionHelper $exceptionHelper
     * @return View
     * @ParamConverter(converter="requestdto.paramconverter")
     */
    public function emotions(RequestDto $requestdto, ValidatorInterface $validator, ViewDataValidator $viewDataValidator, ExceptionCode $exceptionCode, ExceptionHelper $exceptionHelper,DataService $dataService)
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


}