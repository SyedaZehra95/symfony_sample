<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'messenger.bus.default.middleware.traceable' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/messenger/Middleware/TraceableMiddleware.php';

return $this->privates['messenger.bus.default.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), 'messenger.bus.default');
