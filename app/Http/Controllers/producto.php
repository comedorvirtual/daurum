<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class producto extends Controller
{
    public function show(){
        return view ('productos');
    }
}
