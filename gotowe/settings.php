<?php
error_reporting(0);
session_start();

// lista dostepmnych szafek
$szafka=$_POST['szafki'];


if($tab[3] != '') {echo 'zajeta'; } 



$szafka = array();
$szafka = $_SESSION['szafki'];   // 'szafki' to cos takiego jak name formularza - musimy je nadac bo to nazwa zmiennej sesji - wiec bedziemy musieli ja odczytac czyli po nazwie 
$szafka[$_POST['szafki']] = $_POST['zawartosc'];


$_SESSION['szafki']=$szafka;


$iloscSzafek = 15;






?>