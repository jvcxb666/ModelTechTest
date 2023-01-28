<?php

namespace App\src;

use Exception;

class BaseCar
{
    protected string $carType;
    protected string $photoFileName;
    protected string $brand;
    protected float $carrying;

    public function getCarType(): ?string
    {
        return $this->carType;
    }

    public function getPhotoFileName(): ?string
    {
        return $this->photoFileName;
    }

    public function setPhotoFileName(string $filename): ?string
    {
        $this->photoFileName = $filename;

        return $this->photoFileName;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): ?string
    {
        $this->brand = $brand;

        return $this->brand;
    }

    public function getCarrying(): ?float
    {
        return $this->carrying;
    }

    public function setCarrying(float $carrying): ?float
    {
        $this->carrying = $carrying;

        return $this->carrying;
    }

    public function getPhotoFileExt(): ?string
    {
        if(!empty($this->photoFileName)){
            $filename = explode('.',$this->photoFileName);
            return '.'.end($filename);
        }else{
            throw new Exception('Файл отсутствует');
        }
        
    }
}