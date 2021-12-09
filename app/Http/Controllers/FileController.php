<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function create(){
        return view('upload');
    }

    public function store(Request $request){
        $name = time().'_'.$request->file->getClientOriginalName();
        $path = $request->file('file')->move('storage/public/uploads',$name);

        $media = new Media();


        $media->media_name = $request->file->getClientOriginalName();
        $media->path = "public/uploads/" . $name;
        $media->user_id = Auth::user()->id;
        $media->save();

        return redirect()->route('media');
    }
}
