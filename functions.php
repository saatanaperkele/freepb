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
*	File: functions.php [basic functions]
*	Author:
*	Released under WTFPL
*/
include("sql.php");
function setTitle($goeswith){
	global $siteName;
	echo "<title>$goeswith - $siteName</title>";
}

//dummy functions
function getCurrent($x, $y){
	return "img/logo.png";
}

function headerize($text){
//	echo("<h1>$text</h1>");
	echo "<h2><span>$text</span>&nbsp;</h2>";

}
