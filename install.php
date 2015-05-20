<?php
/*
*	freePB
*	A Simple, Modular, and Quick
*	clone of ThePirateBay
*	written on this day of great
*	jimmy-rustling as even brokep
*	knows what a sad state of afairs
*	plagues our once great movement
*	
*
*	File: sql.php
*	Author: Finlandia
*	Released under WTFPL
*/
$errorCode = $_GET['error'];
if($errorCode){
	$errors = array (
	"",
	"MySQL Connection Failed, check settings in sql.php",
	"Second Error",
	"Third Error",
	"Fourth Error");
	echo "Error: ".$errors[$errorCode];
}
else{
	echo "Unknown Error! Something is broken badly :(";
}
