<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function envioMail(Request $request)
    {
        return $request->name . $request->email;
        // $details = [
        //     'title' => 'Este es el titulo del correo',
        //     'body' => 'Este es el correo enviado a '.$request->name
        // ];
        // Mail::to($request->email )->send(new TestMail($details));
        // return "Correo electrónico ENVIADO";
    }
}
