<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function show(){
        return view('labs');
    }
}
