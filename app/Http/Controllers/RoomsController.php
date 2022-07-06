<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Room;

class RoomsController extends Controller
{
    public function Index(){
        return view('pages.rooms.index', [
            'nome' => 'jhonatas Felipe',
            'salas' => Room::all()
        ]);
    }

    public  function create(){
        return view('pages.rooms.nova-sala');
    }

    public function insert(Request $req){

        $room = new Room();
        $room->name = $req->name;
        $room->start_time = $req->start_time.":00";
        $room->end_time = $req->end_time.":00";
        $room->obs = $req->obs;
        $room->save();
        return redirect()->route('RoomsList');
    }

    public function delete ($id){
        Room::destroy($id);
        return redirect()->route('RoomsList');
    }

    public function update(Request $req, $id){
        try{
            $Room = Room::find($id);
            $Room->fill($req->all());
            $Room->save();
            return view('pages.rooms.delete',['sucess'=>true]);
        }catch(\Exception $err){
            return view('pages.rooms.delete',['sucess'=>false]);
        }
    }
}
