<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adhesion(Request $request){
        try {
            $this -> validate($request, [
                'nom_prenom' => 'bail|required|between:6,35',
                'email' => 'bail|required|email',
                'numeroTel' => 'bail|required|regex:/(229)[0-9]{8}/',
                'competences' => 'bail|required|max:500',
                'motivations' => 'bail|required|max:500'
            ]);
            \App\Models\User::create([
                'nom_prenom' => $request -> json('nom_prenom'),
                'email' => $request -> json('email'),
                'numeroTel' => $request -> json('numeroTel'),
                'competences' => $request -> json('competences'),
                'motivations' => $request -> json('motivations'),
            ]);
            return response() -> json([
                'success' => true
            ]);
        } catch(Exception $e) {
            return response() -> json([
                'success' => false,
                'message' => $e -> getMessage(),
            ], 400);
        }
    }
}
