<?php

namespace App\Helper;

use NetSuite\Classes\GetAllRecord;
use NetSuite\Classes\GetAllRecordType;
use NetSuite\NetSuiteService;
use NetSuite\Classes\Customer;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\AddRequest;
use NetSuite\Classes\GetRequest;
use NetSuite\Classes\GetAllRequest;
use NetSuite\Classes\BooleanCustomFieldRef;
use NetSuite\Classes\CustomFieldList;

class NetsuiteApiHelper
{
    private $config = [];

    public function __construct()
    {
        $this->config = array(
            // required -------------------------------------
            "endpoint" => "2017_1",
            "host" => "https://webservices.eu1.netsuite.com",
            "account" => "5016639_SB1",
            "consumerKey" => "ce04fb13529ecdfc353aaaf1b5eb82139a8f08686f77f01b78c08cd44f975fb9",
            "consumerSecret" => "981e4e70a847e1570cf30176927e3f2a6135ced10fcf9183731038a22ff75ae4",
            "token" => "b099f57c6269d31c510c4e323cf16cab97a1dd4f26e6af0740ac1f453af6faa1",
            "tokenSecret" => "b809439b0dbd26b081d10f63a8ecf744a2107728e83a2c072cee76769f049a44",
            // optional -------------------------------------
            "signatureAlgorithm" => 'sha256', // Defaults to 'sha256'
        );
    }

    /**
     * @return NetSuiteService
     */
    private function initNetsuiteService()
    {

        return $netSuiteService = new NetSuiteService($this->config);

    }

    /**
     * @param $customer
     * @param $netSuiteService
     * @return bool
     */
    public function createCustomer($customerData)
    {

        $netSuiteService = $this->initNetsuiteService();
        $customer = new Customer();
        $customer->lastName = $customerData->lastName;
        $customer->firstName = $customerData->firstName;
        $customer->isPerson = true;
        $customer->phone = $customerData->mobile;
        $customer->email = $customerData->email;

        $customFieldList = new customFieldList();

        $orderUpdateOpt = new BooleanCustomFieldRef();
        $orderUpdateOpt->scriptId = 'custentity_orderupdate_opt';
        $orderUpdateOpt->value = ($customerData->orderupdate_opt == 1) ? true : false;

        $promotionOpt = new BooleanCustomFieldRef();
        $promotionOpt->scriptId = 'custentity_promotion_opt';
        $promotionOpt->value = ($customerData->promotion_opt == 1) ? true : false;;

        $newsletterOpt = new BooleanCustomFieldRef();
        $newsletterOpt->scriptId = 'custentity_newsletter_opt';
        $newsletterOpt->value = ($customerData->newsletter_opt == 1) ? true : false;;

        $customer->customFieldList = array($orderUpdateOpt, $promotionOpt, $newsletterOpt);

        $request = new AddRequest();
        $request->record = $customer;

        $addResponse = $netSuiteService->add($request);

        if (!$addResponse->writeResponse->status->isSuccess) {
            return false;
        } else {
            return $addResponse->writeResponse->baseRef;
        }
    }

    /**
     * @param $custId
     * @return bool
     */
    public function getCustomer($custId)
    {
        $service = new NetSuiteService($this->config);
        $request = new GetRequest();
        $request->baseRef = new RecordRef();
        $request->baseRef->internalId = $custId;
        $request->baseRef->type = "customer";

        $getResponse = $service->get($request);

        if (!$getResponse->readResponse->status->isSuccess) {
            return false;
        } else {
            return $getResponse->readResponse->record;
        }
    }


    public function getAllCustomer()
    {
        $service = new NetSuiteService($this->config);
        $request = new GetAllRequest();
        $request->record = "customer";
        $getResponse = $service->getAll($request);

        if (!$getResponse->readResponse->status->isSuccess) {
            return false;
        } else {
            return $getResponse->readResponse->record;
        }
    }

}