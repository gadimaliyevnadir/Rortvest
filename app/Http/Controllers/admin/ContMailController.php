<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Models\ContactMail;

class ContMailController extends Controller
{
    public function email(MailRequest $request)
    {
        $data = $request->validated();
        $create = ContactMail::create($data);
        if ($create) {
            EmailController::sendEmail($data['name'],$data['email'], $data['subject'], $data['phone'], $data['message']);
            return redirect()->route('front.contact');
        }
        else{
            return redirect()->route('front.contact');
        }
    }
}
