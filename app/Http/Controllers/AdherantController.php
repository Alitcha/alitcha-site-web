<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdhesionMail;
use App\Models\Adherant;

class AdherantController extends Controller
{
    public function adhesion(Request $request){
        try {
            $this -> validate($request, [
                'nom_prenom' => 'bail|required|between:6,35',
                'email' => 'bail|required|email',
                'numeroTel' => 'bail|required|numeric|regex:/(229)[0-9]{8}/',
                'competences' => 'bail|required|max:500',
                'motivations' => 'bail|required|max:500'
            ]);

            //Envoi dans la base de données
            Adherant::create([
                'nom_prenom' => $request -> json('nom_prenom'),
                'email' => $request -> json('email'),
                'numeroTel' => $request -> json('numeroTel'),
                'competences' => $request -> json('competences'),
                'motivations' => $request -> json('motivations'),
            ]);

            //Envoi de l'e-mail à l'admin
            Mail::to('alitcha.admin@gmail.com')
                ->queue(new AdhesionMail([
                    'nom_prenom' => $request->nom_prenom,
                    'email' => $request->email,
                    'numeroTel' => $request->numeroTel,
                    'link' => url('http://127.0.0.1:8000/')
                ]));

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
