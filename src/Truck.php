<?php

namespace App\src;

use App\src\BaseCar;

class Truck extends BaseCar
{
    private float $bodyWidth;
    private float $bodyHeight;
    private float $bodyLength;

    public function __construct(string $type,string $brand,string $file,float $carry,string $body_whl)
    {
        $this->carType = $type;
        $this->brand = $brand;
        $this->photoFileName = $file;
        $this->carrying = $carry;
        $this->setBodyWhl($body_whl);
    }

    public function getbodyHeight(): ?float
    {
        return $this->bodyHeight;
    }

    public function getBodyWidth(): ?float
    {
        return $this->bodyWidth;
    }

    public function getbodyLength(): ?float
    {
        return $this->bodyLength;
    }

    public function getBodyWhl(): ?string
    {
        return $this->bodyLength.'x'.$this->bodyWidth.'x'.$this->bodyHeight;
    }

    public function setBodyWhl(string $body_whl): ?string
    {
        if(!empty($body_whl)){
            $whl = explode('x',$body_whl);
            
            $this->bodyLength = floatval($whl[0]);
            $this->bodyWidth = floatval($whl[1]);
            $this->bodyHeight = floatval($whl[2]);

            return $this->bodyLength.'x'.$this->bodyWidth.'x'.$this->bodyHeight;
        }else{
            $this->bodyLength = $this->bodyWidth = $this->bodyHeight = 0;

            return $this->bodyLength.'x'.$this->bodyWidth.'x'.$this->bodyHeight;
        }
    }

    public function getBodyVolume(): ?float
    {
        return $this->bodyLength*$this->bodyWidth*$this->bodyHeight;
    }
}