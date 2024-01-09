<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public static function sendEmail($name,$email,$subject,$phone,$message)
    {
        $data = [
            'name' => $name,
            'email'=>$email,
            'subject'=>$subject,
            'phone'=>$phone,
            'message'=>$message
        ];
        Mail::to('qadimaliyevnadir@gmail.com')->send(new ContactMail($data));
    }
}
