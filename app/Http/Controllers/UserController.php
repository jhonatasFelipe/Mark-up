<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('pages.users.list-users', [
            'users' => User::all()
        ]);
    }

    public  function create(){
        return view('pages.users.register');
    }

    public function insert(Request $req){
        $user = User::create($req->all());
        $user->save();
        return redirect()->route('UsersList');
    }

    public function byId($id){
        $user = User::find($id);
        return view('pages.users.user', ['user' => $user]);
    }

    public function update(Request $req, $id){
        try{
            $Room = User::find($id);
            $Room->fill($req->all());
            $Room->save();
            return view('rooms.delete',['sucess'=>true]);
        }catch(\Exception $err){
            return view('rooms.delete',['sucess'=>false]);
        }
    }
}
