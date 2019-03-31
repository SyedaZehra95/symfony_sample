<?php

namespace App\Request\ParamConverter;

use App\Dto\RequestDto;
use App\Dto\ViewData;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RequestBagConverter implements ParamConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function apply(Request $request,  ParamConverter $configuration)
    {
        $json = json_decode($request->getContent(), true);

        $requestdto =  new RequestDto();
        $requestdto->populateFromArray($json);

        // Get RAW JSON data from request object
        $request->attributes->set("requestdto", $requestdto);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ParamConverter $configuration)
    {
        if (null === $configuration->getConverter()) {
            return false;
        }

        return 'requestdto.paramconverter' == $configuration->getConverter();
    }
}
