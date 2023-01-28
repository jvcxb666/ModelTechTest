<?php

namespace App\src;

use App\src\BaseCar;

class SpecMachine extends BaseCar
{
    private string $extra;

    public function __construct(string $type,string $brand,string $file,float $carry,string $extra)
    {
        $this->carType = $type;
        $this->brand = $brand;
        $this->photoFileName = $file;
        $this->carrying = $carry;
        $this->extra = $extra;
    }

    public function getExtra(): ?string
    {
        return $this->extra;
    }

    public function setExtra(string $extra): ?string
    {
        $this->extra = $extra;

        return $this->extra;
    }
}