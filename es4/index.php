<?php
require_once("studente.php");

$alunno = new Studente("Alex","Mangione","334P");
echo $alunno->presentati();
?>