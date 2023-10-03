<?php

$user = $_POST["user"];
$pswd = $_POST["pswd"];

$ckuser = "admin";
$ckpswd = "1234";


if ($user == $ckuser && $pswd == $ckpswd){
	header ("location:https://www.potrerodigital.org/");
} else {
	header ("location:login.html");
}

?>