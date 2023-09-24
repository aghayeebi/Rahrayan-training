<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function showPanel()
    {
        return view('panel.panel');
    }

    public function sendSingleSms(Request $request)
    {
       $method = 'send_sms.php';

       $params = [
            'receiver_number' => $request->receiver_number,
            'note' => $request->message . 'لغو 11'
       ];
        $send_single  = new ApiService();
        $response = $send_single->action($method,$params);

        dd($response);
    }
}
