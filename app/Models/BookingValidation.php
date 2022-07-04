<?php
namespace App\Models;

use App\Models\User;
use App\Models\Room;
use App\Models\Booking;


Class BookingValidation {

    public function toValidate(User $user,Room $room, \DateTime $data):bool{
        if($this->verificationRoomReserved($room, $data) && $this->verificationUserReserved($user, $data)){
            return true;
        }
        return false;
    }

    private function verificationUserReserved(User $user, \DateTime $data): bool
    {
        $bookings = Booking::where('user', $user->id)->where('time', $data)->get(); 
        if(count($bookings) == 0){
            return true;
        }

        return false;
    }

    private function verificationRoomReserved(Room $room, \DateTime $data): bool{
        $bookings = Booking::where('room', $room->id)->where('time', $data)->get();
        if(count($bookings) == 0){
            return true;
        }
        return false;
    }


}