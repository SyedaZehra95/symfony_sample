<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.middleware.event_dispatch.sms' shared service.

include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Middleware/EventDispatchMiddleware.php';

return $this->services['eight_points_guzzle.middleware.event_dispatch.sms'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\EventDispatchMiddleware(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'sms');
