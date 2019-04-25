<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class StatusMessageController extends Controller
{
    protected function messageInfo()
    {
        return [];
    }

    protected function statusInfo()
    {
        return [];
    }

    public function message($code)
    {
        $message  = $this->messageInfo();
         return isset($message[$code]) ? $message[$code] : '';
    }

    public function status($code)
    {
        $status = $this->statusInfo();
         return isset($status[$code]) ? $status[$code] : '';
    }


    
}
