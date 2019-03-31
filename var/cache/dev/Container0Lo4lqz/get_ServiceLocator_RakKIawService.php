<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.rakKIaw' shared service.

return $this->privates['.service_locator.rakKIaw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'exceptionCode' => ['privates', 'App\\Helper\\ExceptionCode', 'getExceptionCodeService.php', true],
    'exceptionHelper' => ['privates', 'App\\Helper\\ExceptionHelper', 'getExceptionHelperService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'requestdto' => ['privates', 'App\\Dto\\RequestDto', 'getRequestDtoService.php', true],
    'validator' => ['services', 'validator', 'getValidatorService', false],
    'viewDataValidator' => ['privates', 'App\\Validator\\ViewDataValidator', 'getViewDataValidatorService.php', true],
]);
