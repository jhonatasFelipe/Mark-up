<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

class RoomsController extends Controller
{
    public function Index(){
        return view('rooms.index', [
            'nome' => 'jhonatas Felipe',
            'salas' => Room::all()
        ]);
    }

    public  function create(){
        return view('rooms.nova-sala');
    }

    public function insert(Request $req){
        $Room = Room::create($req->all());
        $Room->save();
        return redirect()->route('RoomsList');
    }

    public function delete (Request $req, $id){
        Room::destroy($id);
        return redirect()->route('RoomsList');
    }

    public function update(Request $req, $id){
        try{
            $Room = Room::find($id);
            $Room->fill($req->all());
            $Room->save();
            return view('rooms.delete',['sucess'=>true]);
        }catch(Excepition $err){
            return view('rooms.delete',['sucess'=>false]);
        }
    }
}
