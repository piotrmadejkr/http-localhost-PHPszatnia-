<?php
error_reporting(0);
session_start();



$wartosc='';
$zawartosc='';

$zawartosc=$_POST['zawartosc'];
$szafki= array();
$szafki=$_SESSION['dowolnaNazwa'];
$wartosc=$_POST['wartosc'];
$szafki[$wartosc]=$zawartosc;   //tutaj jest nawjazniejsze powiazanie zawartosci do value


$_SESSION['dowolnaNazwa']=$szafki;



?>