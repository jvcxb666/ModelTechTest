<?php

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use App\src\Car;
use App\src\Truck;
use App\src\SpecMachine;

function getCarList($file)
{
    $csv = file($file);
    $cars = [];

    foreach($csv as $index=>$row){

        if($index !== 0){
            $data = explode(';',$row);

            if( count($data) == 7 ){
                $type = strtolower($data[0]);
                
                if($type == 'car'){
                    try{
                        $cars[] = new Car($type,$data[1],$data[3],$data[5],$data[2]);
                    }catch(\Exception $e){
                        echo $e->getMessage();
                    }
                }elseif($type == 'truck'){
                    try{
                        $cars[] = new Truck($type,$data[1],$data[3],$data[5],$data[4]);
                    }catch(\Exception $e){
                        echo $e->getMessage();
                    }
                }elseif($type == 'spec_machine'){
                    try{
                        $cars[] = new SpecMachine($type,$data[1],$data[3],$data[5],$data[6]);
                    }catch(\Exception $e){
                        echo $e->getMessage();
                    }
                }
            }
        }
    }

    return $cars;
}

$cars = getCarList($_SERVER['DOCUMENT_ROOT'].'/data.csv');