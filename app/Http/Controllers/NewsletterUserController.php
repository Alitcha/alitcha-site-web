<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class NewsletterUserController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate(
                ['email' => 'bail|email|required']
            );
            \App\Models\NewsletterUser::firstOrCreate(['email' => $request->email]);
            return response()->json([
                'success' => true,
                'data' => [["email" => $request->email]],
                'message' => 'DONE'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
