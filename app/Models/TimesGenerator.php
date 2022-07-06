<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Times;
use App\Models\Room;

Class TimesGenerator {
    static public function  getTimes(Room $room,\DateTime $date): Array{
        $timeZone = new \DateTimeZone('America/Sao_Paulo');
        $date->setTimezone($timeZone);
        $bookings = Booking::where('time','>=', $date)->where('room',$room->id)->get();
        $times = [];
        $startTime =  new \DateTime($date->format('Y-m-d').' '.$room->start_time,$timeZone);
        $endTime =  new \DateTime($date->format('Y-m-d').' '.$room->end_time, $timeZone);

        for($i = $startTime; $i < $endTime; $i->modify('+1 hour'))
        {
            $time = new Times(
                new \DateTime($i->format('H:i'),$timeZone),
                new \DateTime($i->format('H:i'),$timeZone),
                true
            );
            foreach($bookings as $booking){
                if(new \DateTime($booking->time,$timeZone) == $i){
                    $time->setAvaible(false);
                }
            }

            $now = new \DateTime('now');
            if($now > $i){
                $time->setAvaible(false);
            }
            array_push($times,$time);
        }
        return $times;
    }

    private function hasBookingForDate(){

    }

}