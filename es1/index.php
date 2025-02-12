<?php
header("Content-Type: application/json");

require_once("alunno.php");
$studenti = [];
    array_push($studenti, 
    new Alunno("Alex","Mangione","18"),
            new Alunno("Amir","Rex","10"),
            new Alunno("Pippo","Mino","34"));
    
    //foreach($studenti as $studente){
    //    $studente->stampaAlunno();
    //}

    echo json_encode($studenti);
?>