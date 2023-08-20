<?php
$car1=new car();
$car1->brand="Ford"; 
$car1->model="Mustang";
$car1->year="2023";
print_r($car1);

$car1->start();
$car1->driver();
$car1->stop();

$car2=new car();

$car2->brand ="Toyota"; 
$car2->model ="CHR";
$car2->year="1999";

print_r($car2);
$car2->start();
$car2->driver();
$car2->stop();

class car{
    public $brand, $model, $year;

    function start(){
        echo("The car is starting"."<br>") ;
    }
    function driver(){
        echo("The car is beign"."<br>") ;
    }

    function stop(){
        echo("The car is stop"."<br>") ;
    }


}