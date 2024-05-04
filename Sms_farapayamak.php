<?php
/*
 * 	Perfex Farapayamak SMS Mudule
 * 	
 * 	Author 	: Aryan Nasrolahbeygi
 * 	
 * 	Github-Link 	: https://github.com/aryannasrolahbeygi/farapayamak-perfex-module
 *
 * 	E-mail 	: info@araanco.com
 *
 * 	Website : https://araanco.com
*/

defined('BASEPATH') or exit('No direct script access allowed');

class Sms_farapayamak extends App_sms
{
    private $username;
    private $password;
    private $from;

    public function __construct()
    {
        parent::__construct();

        $this->username 	= $this->get_option('farapayamak', 'username');
        $this->password 	= $this->get_option('farapayamak', 'password');
        $this->from 	= $this->get_option('farapayamak', 'from');

        $this->add_gateway('farapayamak', [
            'name'    => 'فراپیامک',
            'info'    => "<p>ارسال پیامک‌های پرفکس با سامانه پیامکی <a href='https://farapayamak.ir/login/' target='_blank'>فراپیامک </a> - طراحی و توسعه توسط <a href='https://araanco.com' target='_blank'>آرین نصراله بیگی</a></p><hr class='hr-10'>",
            'options' => [
                [
                    'name'  => 'username',
                    'label' => 'نام کاربری',
                ],
                [
                    'name'  => 'password',
                    'label' => 'رمز سامانه',
                ],
				[
                    'name'  => 'from',
                    'label' => 'شماره فرستنده',
                ],
            ],
        ]);
    }

    public function send($number, $message)
    {
        ini_set("soap.wsdl_cache_enabled", "0");
        $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));

        $parameters['username'] = $this->username;
        $parameters['password'] = $this->password;
        $parameters['to'] = $number;
        $parameters['from'] = $this->from;
        $parameters['text'] = $message." :لغو11";
        $parameters['isflash'] =false;

        echo $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
    }
}
