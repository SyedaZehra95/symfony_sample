<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.middleware.symfony_log' shared service.

include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Middleware/SymfonyLogMiddleware.php';
include_once $this->targetDirs[3].'/vendor/guzzlehttp/guzzle/src/MessageFormatter.php';

$a = new \Symfony\Bridge\Monolog\Logger('eight_points_guzzle');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $this->services['eight_points_guzzle.middleware.symfony_log'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\SymfonyLogMiddleware($a, ($this->services['eight_points_guzzle.symfony_log_formatter'] ?? ($this->services['eight_points_guzzle.symfony_log_formatter'] = new \GuzzleHttp\MessageFormatter('{method} {uri} {code}'))));
