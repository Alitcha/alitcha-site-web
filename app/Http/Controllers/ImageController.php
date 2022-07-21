<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function index()
    {
        //
        $images = Image::all();
        return view('image.index',compact("images"));
    }

    
    public function store(Request $request){
        $validated= $request->validate([
            "image" => "required|mimes:png,jpg,jpeg",  
        ]);

        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path("images"),$imageName);

        Image::create([
            "path_name" => $imageName,   
        ]);

        return redirect()->route('image.index');


    }
}
