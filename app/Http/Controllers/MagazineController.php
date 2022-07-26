<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;
use App\Models\Image;

class MagazineController extends Controller
{
    //
    public function index()
    {
        //
        $magazines = Magazine::all();
        $images = Image::all();
        return view('magazine.index',compact("magazines","images"));
    }
    public function adminshow($id)
    {
        //
        $magazine = Magazine::find($id);
        $images = Image::all();
        return view('magazine.adminshow',compact("magazine","images"));
    }

    
    public function store(Request $request){
        $validated= $request->validate([
            "title" => "required",
            "magazine" => "required|mimes:pdf",  
            "image" =>"required"
        ]);

        $magazineName = time().".pdf";
        $request->magazine->move(public_path("magazines"),$magazineName);

        Magazine::create([
            "title" => $request->title,
            "path_name" => $magazineName,   
            "image" => $request->image
        ]);

        return redirect()->route('magazine.index');


    }
}
