<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'KevinPapst\AdminLTEBundle\Controller\EmitterController' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Controller/EmitterController.php';

return $this->services['KevinPapst\AdminLTEBundle\Controller\EmitterController'] = new \KevinPapst\AdminLTEBundle\Controller\EmitterController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
