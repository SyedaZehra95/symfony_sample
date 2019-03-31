<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\UserAdminController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Controller/AdminControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Controller/EasyAdminController.php';
include_once $this->targetDirs[3].'/src/Controller/UserAdminController.php';

$this->services['App\Controller\UserAdminController'] = $instance = new \App\Controller\UserAdminController(($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')));

$instance->setContainer(($this->privates['.service_locator.35kQ1_l'] ?? $this->load('get_ServiceLocator_35kQ1LService.php'))->withContext('App\\Controller\\UserAdminController', $this));

return $instance;
