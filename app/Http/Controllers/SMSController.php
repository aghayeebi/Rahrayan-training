<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function showPanel()
    {
        return view('panel.panel');
    }
}
