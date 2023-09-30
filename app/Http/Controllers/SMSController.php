<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendSingleSMSForm;
use App\Services\ApiService;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    protected const USER_NAME =  'developer';
    protected const PASSWORD = 8000;
    protected const SENDER_NUMBER = 982100066381362;


    public function showPanel()
    {
        return view('panel.panel');
    }

    public function sendSingleSms(SendSingleSMSForm $request)
    {

       $method = 'send_sms.php';

       $params = [
           'username' => self::USER_NAME,
           'password' => self::PASSWORD,
           'sender_number' => self::SENDER_NUMBER,
           'receiver_number' => $request->input('receiver_number'),
           'note' => $request->input('message')
       ];

        $send_single  = new ApiService();
        $response = $send_single->action($method,$params);

        dd($response);
    }
}
