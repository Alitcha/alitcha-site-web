<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Team;


class HomeController extends Controller
{
    
    public function index()
    {
        $articles_A = Article::where('published', 1)->get()->random(3);
        $team = Team::all();

        return view('index', [
            'articles' => $articles_A,
            'team' => $team
        ]);
    }
}
