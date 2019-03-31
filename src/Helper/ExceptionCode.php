<?php

namespace App\Helper;

class ExceptionCode

{
    const DEVICE_EXISTS = 1001;
    const OTP_NOT_FOUND = 1002;
    /**
     * Unless otherwise noted, the status code is defined in RFC2616.
     *
     * @var array
     */
    private $statusTexts = [1001 => array(
        'errorMessage' => 'Your device with mobile number is already registered',
        'actionMessageForUser' => 'Your device with mobile number is already registered'
    ), 1002 => array(
        'errorMessage' => 'OTP not found/expired',
        'actionMessageForUser' => 'OTP not found/expired'
    )];

    /**
     * @param $exceptionCode
     */
    public function GenerateExceptionData($exceptionCode)
    {
        return array(
            'errorCode' => $exceptionCode,
            'errorMessage' => $this->statusTexts[$exceptionCode]['errorMessage'],
            'actionMessageForUser' => $this->statusTexts[$exceptionCode]['actionMessageForUser']
        );
    }
}
