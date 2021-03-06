<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'messenger.middleware.logging' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/messenger/Middleware/LoggingMiddleware.php';

$a = new \Symfony\Bridge\Monolog\Logger('messenger');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $this->privates['messenger.middleware.logging'] = new \Symfony\Component\Messenger\Middleware\LoggingMiddleware($a);
