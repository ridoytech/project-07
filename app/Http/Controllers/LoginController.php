<?php

namespace App\Http\Controllers;

use App\Models\loginroom;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home(){

        $data = loginroom::all();
        return view('home');

    }
}
