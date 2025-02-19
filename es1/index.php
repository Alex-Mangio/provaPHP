<?php
header("Content-Type: application/json");

require_once("alunno.php");


$studenti = [];
$voti = [
    ];

$indirizzi = [
    ];

    $string = array_push($studenti, 
    new Alunno("Alex","Mangione","18",[
        new Voto("5","mate","Non studia un cazz"),
        new Voto("7","info","studia tutto a memoria"),
        new Voto("10","ita","Non sa manco lui come ha fatto")],[
        new Indirizzo("via delle palme","5"),
        new Indirizzo("via di scandicci","104"),
        new Indirizzo("piazza della crezia","2")]),
    new Alunno("Amir","Rex","10",$voti,$indirizzi ),
    new Alunno("Pippo","Mino","34",$voti,$indirizzi ));

    $alunni = json_decode($stringrue);

    $studenti = [];

    foreach($alunni as $s){
        $v = new Alunno($s["nome"],$s["cognome"],$s["eta"], "", "");
        array_push($studenti, $v);
    }

    
    //foreach($studenti as $studente){
    //    $studente->stampaAlunno();
    //}

    echo json_encode($studenti);
?>