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
	return "/img/logo.png";
}

function headerize($text){
//	echo("<h1>$text</h1>");
	echo "<h2><span>$text</span>&nbsp;</h2>";

}

function parseFeed($dbID){
	//$dbID is the key of the 
	//entry in the DB for each one
	//blah blah database
	$dbRSS = "http://nextpb.org/feed.rss";
	class TorrentEntry
	{
		var $date;
 		var $magnet;
    	var $uploader;
    	var $title;
    	var $text;
	}
	
}