<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected const USER_NAME =  'developer';
    protected const PASSWORD = 8000;
    protected const SENDER_NUMBER = 982100066381362;
    protected const ADDRESS_URL = 'http://sms20.ir/send_via_get';
//    public string $method;
//    public string $params;

    public function __construct()
    {

    }

    public function action($method, $params)
    {

        $params [] = [
            'user_name' => self::USER_NAME,
            'password' => self::PASSWORD,
            'sender_number' => self::SENDER_NUMBER
        ];

        $response = Http::get(self::ADDRESS_URL . '/' .$method .'?',$params);
        return $response;
    }

}
