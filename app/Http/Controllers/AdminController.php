<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdhesionMail;

class AdminController extends Controller
{
    //
    public function dashboard() 
    {
        $nbusers = count(User::all());
        $nbpub = Article::all()->where('published', true)->count();
        $nbunpub = Article::all()->where('published', false)->count();
        return view('admin.dashboard',compact('nbusers','nbpub','nbunpub'));
    }

    public function showAdmin() 
    {
        $users = User::all();
        $admins = array();

        foreach($users as $u){
            if($u->isAdmin() || $u->isRoot())
            $admins[] = $u;
        }
        return view('admin.index',compact('admins'));
    }
    public function addAdmin()
    {
        //
        return view("admin.addadmin");
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'email' => 'required',
        ]);

        $user=User::where("email",$request->email)->first();
        $roleadmin = Role::where("name" ,'admin')->first();

        if($user)
        {
            if($user->isAdmin())
                return back()->with("message","L'utilisateur  est délà admin");

        	DB::insert('insert into role_user (role_id, user_id ) values (?, ?)', [ $roleadmin->id, $user->id ] );
        	
        	return redirect()->route("showadmin")->with("message","Admin bien ajouté.");
        }
        else
        	return back()->with("message","Aucun utilisateur n'a cet émail : ".$request->email);
    }

    public function removeAdmin($id)
    {
        //
        

        $user=User::findOrFail($id);
        $roleadmin = Role::where("name" ,'admin')->first();

        if($user)
        {
            if($user->isAdmin()){
                DB::delete('delete from role_user where role_id = ? and user_id = ?',  [ $roleadmin->id, $user->id ] );
            }
                

        	return redirect()->route("showadmin")->with("message","Admin bien démis.");
        }
        else
        	return back()->with("message","Utilisateur non trouvé ");
    }

    public function users() 
    {
        $users = User::all();
        
        return view('admin.user',compact('users'));
    }


    public function mail(Request $request){
         //Envoi de l'e-mail à l'admin
         Mail::to('dinyad456@gmail.com')
         ->queue(new AdhesionMail([
             'nom_prenom' => "kjkjjkjk",
             'email' => "kjkjkjkj",
             'numeroTel' => "jkjkjk",
             'link' => url('http://127.0.0.1:8000/')
         ]));
    }



}
