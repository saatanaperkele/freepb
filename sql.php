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

//Site-wide variables.
$siteName = "FreePirateBay";
$siteLoc = "http://localhost/freepb/";

//SQL-specific variables
$sqlConfig = array(
'user' => 'root', 
'pass' => '', 
'host' => 'localhost', 
'db' => 'freepb');

//Setting up a class for prepared statements
$sql = new mysqli($sqlConfig['host'], $sqlConfig['user'], $sqlConfig['pass'], $sqlConfig['db']);
global $sql;

//Database connection error handler
if($sql->connect_errno){
	header("Location: ".$siteLoc."install.php?err=1");
}
