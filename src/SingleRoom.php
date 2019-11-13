<?php

namespace Nfq\Akademija;

class SingleRoom extends Room
{

    public function __construct($roomNumber, $price)
    {
        $this->setBedCount(1);
        $this->setRoomType("Standard room");
        $this->setHasBalcony(false);
        $this->setHasRestroom(true);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(array("TV", "air-conditioner"));
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