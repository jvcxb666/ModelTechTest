<?php

namespace App\src;

use App\src\BaseCar;

class Car extends BaseCar
{
    private int $passengerSeatsCount;

    public function __construct(string $type,string $brand,string $file,float $carry,int $seats)
    {
        $this->carType = $type;
        $this->brand = $brand;
        $this->photoFileName = $file;
        $this->carrying = $carry;
        $this->passengerSeatsCount = $seats;
    }

    public function getPassengersSeatsCount(): ?int
    {
        return $this->passengerSeatsCount;
    }

    public function setPassengersSeatsCount(int $seats): ?int
    {
        $this->passengerSeatsCount = $seats;

        return $this->passengerSeatsCount;
    }
}

