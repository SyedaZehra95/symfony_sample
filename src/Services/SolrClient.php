<?php


namespace  App\Services;

use FS\SolrBundle\Solr;

class SolrClient{

    private $solr;

    public function __construct(Solr $solr)
    {
        $this->solr = $solr;
    }

    public function get() {
        return $this->solr;
    }

}