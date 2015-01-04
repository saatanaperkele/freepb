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
*	File: search.php [searches the site for something]
*	Author: finlandia
*	Released under WTFPL
*/
include('header.php');
$term = $_GET['piracy'];
setTitle("Search Results for $term");
headerize("Search Results for $term");




include('footer.php');
createFooter();
