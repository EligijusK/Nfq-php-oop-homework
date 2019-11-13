<?php

namespace Nfq\Akademija;

class Room implements ReservableInterface
{
    private $roomType;
    private $bedCount;
    private $hasRestroom;
    private $hasBalcony;
    private $roomNumber;
    private $extras;
    private $price;

    public function __construct($roomType, $bedCount, $hasRestroom, $hasBalcony, $roomNumber, $extras, $price)
    {
        $this->roomType = $roomType;
        $this->bedCount = $bedCount;
        $this->hasRestroom = $hasRestroom;
        $this->hasBalcony = $hasBalcony;
        $this->roomNumber = $roomNumber;
        $this->extras = $extras;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getHasRestroom()
    {
        return $this->hasRestroom;
    }

    /**
     * @param mixed $hasRestroom
     */
    public function setHasRestroom($hasRestroom)
    {
        $this->hasRestroom = $hasRestroom;
    }

    /**
     * @return mixed
     */
    public function getHasBalcony()
    {
        return $this->hasBalcony;
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony)
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->price;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->extras = $price;
    }


    public function addReservation($reservation)
    {
        // TODO: Implement addReservation() method.
    }

    public function removeReservation($reservation)
    {
        // TODO: Implement removeReservation() method.
    }

    public function __toString()
    {
        $returnValue = "Room has ".$this->getBedCount()." beds it is a ".$this->getRoomType(). " room type. ";
        if($this->getHasRestroom())
        {
            $returnValue = $returnValue."It has restroom. ";
        }
        else
        {
            $returnValue = $returnValue."It doesn't have restroom. ";
        }
        if($this->getHasBalcony())
        {
            $returnValue = $returnValue."It has balcony. ";
        }
        else
        {
            $returnValue = $returnValue."It doesn't have balcony. ";
        }
        foreach ($this->getExtras() as $extra)
        {
            $returnValue = $returnValue."Room has ".$extra.". ";
        }
        $returnValue = $returnValue."Room price is ".$this->getPrice().".";
        return $returnValue;
    }

}