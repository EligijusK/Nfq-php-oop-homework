<?php

namespace Nfq\Akademija;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation){

        foreach($reservation->getAllReservations() as $res)
        {
            if($reservation->getStartDate() == $res->getStartDate() && $reservation->getEndDate() == $res->getEndDate())
                throw new ReservationException('This time is taken!');
        }
        $reservation->addReservation($reservation);
        echo 'Room <strong>'.$room->getRoomNumber().'</strong> successfully booked for <strong>'.$reservation->getGuest().'</strong> from <time>'.$reservation->getStartDate()->format('Y-m-d').'</time> to <time>'.$reservation->getEndDate()->format('Y-m-d').'</time>!';

    }

}