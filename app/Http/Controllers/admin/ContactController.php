<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::orderByDesc('id')->paginate(10);
        return view('admin.contact',compact('contacts'));
    }
}
