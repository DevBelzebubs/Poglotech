<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactoController extends Controller{
    public function enviar(Request $request){
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string'
    ]);
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'messageBody' => $request->message
    ];
    Mail::to('juandgari25@gmail.com')->send(new ContactMessage(
        $data['name'],
        $data['email'],
        $data['messageBody']
    ));
    return back()->with('success', '¡Mensaje enviado con éxito!');
    }
}