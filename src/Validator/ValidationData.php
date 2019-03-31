<?php

namespace App\Validator;


class ValidationData
{
    const API_KEY = '445dcfa295847ebbb77011ab264b4aa9';

    protected $validations = array('CustomerRegister' =>
        array('firstName' => array('required' => true, 'regex' => '/^([a-zA-Z\' ]+)$/'),
            'lastName' => array('required' => true, 'regex' => '/^([a-zA-Z\' ]+)$/'),
            'mobile' => array('required' => true, 'regex' => '/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/'),
            'email' => array('required' => false, 'regex' => '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'),
            'orderupdate_opt' => array('required' => false, 'regex' => ''),
            'promotion_opt' => array('required' => false, 'regex' => ''),
            'newsletter_opt' => array('required' => false, 'regex' => '')),
        'requestOTP' =>
            array(
                'mobile' => array('required' => true, 'regex' => '/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/')
            ),
        'validateOTP' =>
            array(
                'mobile' => array('required' => true, 'regex' => '/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/'),
                'OTPNumber' => array('required' => true, 'regex' => '/^[0-9]+$/')
            )
    );

}