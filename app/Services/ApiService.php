<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use function Laravel\Prompts\select;

class ApiService
{
    protected const ADDRESS_URL = 'http://sms20.ir/send_via_get';

    public function __construct()
    {

    }

    public function action($method, $params): string
    {
        return Http::get(self::ADDRESS_URL.'/'.$method, $params)->body();
    }

}
