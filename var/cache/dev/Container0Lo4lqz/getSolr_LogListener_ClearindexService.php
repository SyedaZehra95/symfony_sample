<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'solr.log_listener.clearindex' shared service.

include_once $this->targetDirs[3].'/vendor/floriansemm/solr-bundle/FS/SolrBundle/Event/Listener/AbstractLogListener.php';
include_once $this->targetDirs[3].'/vendor/floriansemm/solr-bundle/FS/SolrBundle/Event/Listener/ClearIndexLogListener.php';

return $this->privates['solr.log_listener.clearindex'] = new \FS\SolrBundle\Event\Listener\ClearIndexLogListener(($this->privates['monolog.logger.solr'] ?? $this->getMonolog_Logger_SolrService()));