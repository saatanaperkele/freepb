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
*	File: user.php
*	Author: finlandia
*	Released under WTFPL
*/

//Page setup
include("header.php");

if(!$_GET['user']){
	header("Location: ".$siteLoc);
}
$userName = $_GET['user'];
$tit = "User information for ".$userName;
setTitle($tit);
headerize($tit);

//Fetching user information via statement
$userFetch = $sql->prepare("SELECT * FROM `users` WHERE username = ?");
$userFetch->bind_param("s", $userName);
$userFetch->execute();
$userFetch->bind_result($userID, $userName, $userVerif, $userEmail);
$userFetch->fetch();

echo $userID." ".$userName." ".$userVerif. " ". $userEmail;
