<?php

namespace App\Http\Controllers;
use App\Mail\MailForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactoController extends Controller
{      
    public function store(Request $request){
        $mensaje = request()->validate([
            'email' => 'required|email',
            'name' => 'required',
            'mensaje' => 'required|min:5'
        ]);
        Mail::to('opticamunozaqp@gmail.com')->queue(new MailForm($mensaje));
        //return back()->with(compact('status'));
        return "validado";
    }
    public function show(){
        return view('contacto');
    }
}
