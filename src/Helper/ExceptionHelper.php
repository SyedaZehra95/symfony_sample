<?php

namespace App\Helper;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ExceptionHelper extends ExceptionCode
{


    /**
     * @param $validationErrors
     * @return array
     */
    public function GenerateException($errorCode)
    {
        return $this->GenerateExceptionData($errorCode);
    }

}