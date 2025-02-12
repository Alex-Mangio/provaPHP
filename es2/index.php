<?php
header("Content-Type: application/json");

require_once("automobile.php");

$macchine = [];

array_push($macchine, 
    new Automobile("Toyota",2003,"GT"),
            new Automobile("Nissan",1998,"GTR"),
            new Automobile("Mazda",2000,"tepee"));
    
    //foreach($macchine as $car){
    //    $car->stampaAuto();
    //}

    echo json_encode($macchine);
?>