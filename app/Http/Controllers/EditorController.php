<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class editorController extends Controller
{
    //
   

    public function index() 
    {
        $users = User::all();
        $editors = array();

        foreach($users as $u){
            if($u->isEditor() )
            $editors[] = $u;
        }
        return view('editor.index',compact('editors'));
    }
    public function add()
    {
        //
        return view("editor.add");
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'email' => 'required',
        ]);

        $user=User::where("email",$request->email)->first();
        $roleeditor = Role::where("name" ,'editor')->first();

        if($user)
        {
            if($user->isEditor())
                return back()->with("message","L'utilisateur  est délà éditeur");

        	DB::insert('insert into role_user (role_id, user_id ) values (?, ?)', [ $roleeditor->id, $user->id ] );
        	
        	return redirect()->route("editor.index")->with("message","Editeur bien ajouté.");
        }
        else
        	return back()->with("message","Aucun utilisateur n'a cet émail : ".$request->email);
    }

    public function remove($id)
    {
        //
        

        $user=User::findOrFail($id);
        $roleeditor = Role::where("name" ,'editor')->first();

        if($user)
        {
            if($user->isEditor()){
                DB::delete('delete from role_user where role_id = ? and user_id = ?',  [ $roleeditor->id, $user->id ] );
            }
                

        	return redirect()->route("editor.index")->with("message","Editeur bien démis.");
        }
        else
        	return back()->with("message","Utilisateur non trouvé ");
    }


}
