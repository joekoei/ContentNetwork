<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $files = DB::table('media')->where('user_id','=',Auth::user()->id)->get();
        return view('media')->with(compact('files'));
    }

    public function admin(){
        if(Auth::user()->admin === 1) {
            return view('admin.landing');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function adminUsers(){
        $users = User::all();

        if(Auth::user()->admin === 1) {
            return view('admin.users')->with(compact('users'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function stats() {
        if(Auth::user()->admin === 1) {
            return view('admin.stats');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
