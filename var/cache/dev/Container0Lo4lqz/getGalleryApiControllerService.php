<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Api\GalleryApiController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
include_once $this->targetDirs[3].'/src/Controller/Api/GalleryApiController.php';

$this->services['App\Controller\Api\GalleryApiController'] = $instance = new \App\Controller\Api\GalleryApiController();

$instance->setContainer(($this->privates['.service_locator.9MhUVNh'] ?? $this->load('get_ServiceLocator_9MhUVNhService.php'))->withContext('App\\Controller\\Api\\GalleryApiController', $this));

return $instance;
