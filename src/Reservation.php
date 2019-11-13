<?php

namespace Nfq\Akademija;

class Reservation implements ReservableInterface
{
    private $startDate;
    private $endDate;
    private $guest;

    private static $reservations = array();

    public function __construct($startDate, $endDate, $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function getAllReservations()
    {
        return self::$reservations;
    }

    public function addReservation($reservation)
    {
        array_push(self::$reservations, $reservation);
    }

    public function removeReservation($reservation)
    {
        $deleted = false;
        $count = 0;
        foreach (self::$reservations as $a)
        {
            if($a === $reservation)
            {
                self::$reservations = array_slice(self::$reservations, $count, 1);
                echo "Reservation canceled \n";
                $deleted = true;
                break;
            }
            $count++;
        }
        if(!$deleted)
        {
            echo "Reservation not found \n";
        }

    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }


    public function __toString()
    {
        $string = $this->getGuest()->toString() . " " . $this->getStartDate()->format('Y-m-d') . " " . $this->getEndDate()->format('Y-m-d')();
        return $string;
    }
}