<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function todo() {
        return view('todo');
    }

    public function media(){
        return view('media');
    }
}
