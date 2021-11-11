<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        if($request->file()) {
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->move('storage/public/uploads',$fileName);
            $profile_picture = "public/uploads/" . $fileName;
            $user->profile_picture = $profile_picture;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $request->session()->reflash();
            return redirect()->route('profile.show');
        } else {
            $user->update(['name'=>$request->name,'email'=>$request->email]);
            $user->save();
            $request->session()->reflash();
            return redirect()->route('profile.show');
        }
    }
}
