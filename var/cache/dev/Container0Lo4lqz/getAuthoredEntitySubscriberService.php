<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventSubscriber\AuthoredEntitySubscriber' shared autowired service.

include_once $this->targetDirs[3].'/src/EventSubscriber/AuthoredEntitySubscriber.php';

return $this->privates['App\EventSubscriber\AuthoredEntitySubscriber'] = new \App\EventSubscriber\AuthoredEntitySubscriber(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
