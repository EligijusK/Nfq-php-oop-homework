<?php

namespace Nfq\Akademija;

class Apartment extends Room
{
    public function __construct($roomNumber, $price)
    {
        $this->setBedCount(4);
        $this->setRoomType("Diamond room");
        $this->setHasBalcony(true);
        $this->setHasRestroom(true);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(array("TV", "air-conditioner", "refrigerator", "kitchen box", "mini-bar", "bathtub", "free Wi-fi"));
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