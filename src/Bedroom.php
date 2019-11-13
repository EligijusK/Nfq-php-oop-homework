<?php

namespace Nfq\Akademija;

class Bedroom extends Room
{

    public function __construct($roomNumber, $price)
    {
        $this->setBedCount(2);
        $this->setRoomType("Gold room");
        $this->setHasBalcony(true);
        $this->setHasRestroom(true);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(array("TV", "air-conditioner", "refrigerator", "mini-bar", "bathtub"));
        $this->setPrice($price);
    }

    public function addReservation($reservation)
    {
        // TODO: Implement addReservation() method.
    }

    public function removeReservation($reservation)
    {
        // TODO: Implement removeReservation() method.
    }
}