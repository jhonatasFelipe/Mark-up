<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingValidation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\TimesGenerator;

class BookingController extends Controller
{
    private BookingValidation $bookingValidation;

    public function __construct(BookingValidation $bookingValidation)
    {
        $this->bookingValidation = $bookingValidation;
    }
    public function insert(Request $req){


        $user = User::find($req->user);
        $room =  Room::find($req->room);
        $data = new \DateTime($req->date);
        

        $isValid = $this->bookingValidation->toValidate($user, $room,$data);

        if($isValid){
            $book = new Booking();
            $book->user = $user->id;
            $book->room = $room->id;
            $book->time = $data;
            $book->save();
        }
        return redirect()->route('ListTimes',['room'=>$room->id, 'date' => $data->format('Y-M-d')]);
    }

    public function delete(Request $req){

    }

    public function ListTimes(Request $req, $room){
        $timeZone = new \DateTimeZone('America/Sao_Paulo');
        
        if($req->has('date') && !empty($req->date)){
            $data = new \DateTime($req->date,$timeZone);
        }else{
            $data = new \DateTime('now', $timeZone);
        }
        
        $room = Room::find($room);
        $times = TimesGenerator::getTimes($room, $data);
        return view('pages.booking.list-times', [
            'times' => $times,
            'room' => $room,
            'user' => 1,
            'date' => $data
        ]);
    }

}
