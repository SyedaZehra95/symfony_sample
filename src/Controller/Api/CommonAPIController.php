<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use App\Entity\Items;
use FS\SolrBundle\Solr;
use FS\SolrBundle\Tests\Fixtures\ValidTestEntity;
use FS\SolrBundle\Tests\Fixtures\ValidTestEntityAllCores;
use FS\SolrBundle\Tests\DocumentStub;
use FS\SolrBundle\Tests\Util\CommandFactoryStub;
use FS\SolrBundle\Tests\Util\MetaTestInformationFactory;
use Solarium\QueryType\Update\Query\Query;

class CommonAPIController extends AbstractController
{

}
