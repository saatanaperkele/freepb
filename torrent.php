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
include("header.php");
if(!$_GET['id']){
	header("Location: ".$siteLoc."not_found");
}

//Prepared Statement
$torrentID = $_GET['id'];
$torrentFetch = $sql->prepare("SELECT * FROM `magnets` WHERE id = ?");
$torrentFetch->bind_param("i", $torrentID);
$torrentFetch->execute();
$torrentFetch->bind_result($torrentID, $torrentTitle, $torrentLink, $torrentUploader, $torrentDate, $torrentCat, $torrentSource, $torrentVerified, $torrentSeeds, $torrentLeach, $torrentSize);
$torrentFetch->fetch();
setTitle($torrentTitle ." - ".$siteName);
headerize("Viewing torrent: $torrentTitle");
/*
P
A
G
E

C
O
N
T
E
N
T
*/
include("footer.php");

createFooter();
