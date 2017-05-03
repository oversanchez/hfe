<?php

namespace App\Http\Controllers;

use App\library\SmsGateway;

class Sms_Controller extends Controller
{

    public function enviar()
    {
        $smsGateway = new SmsGateway('oliver.sanchez.a@gmail.com', 'familia');

        $deviceID = '47628';
        $number = '968644416';
        $message = 'hola';

        $smsGateway->
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
    }

}
