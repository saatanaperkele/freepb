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
*	File: 
*	Author:
*	Released under WTFPL
*/
echo("<html><head>");
include("../header.php");
setTitle("Staff Login");
if(checkAdmin()){
	header("Location: /staff/dashboard");
}
else(!checkAdmin()){
	headerize("Staff Login");
	echo "Please Login";
	
}	
include("footer.php");

createFooter();
