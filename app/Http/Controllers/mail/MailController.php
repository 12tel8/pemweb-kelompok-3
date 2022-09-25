<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){

        $details = [
        'title' => 'Mail from websitepercobaan.com',
        'body' => 'This is for testing email using smtp'
        ];
       
        Mail::to('fcmirfan122@gmail.com')->send(new MyTestEmail($details));
       
        dd("Email sudah terkirim.");
    
        }
}
