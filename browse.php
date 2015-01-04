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
*	File: browse.php [ browse a category ]
*	Author:
*	Released under WTFPL
*/
echo("<html><head>");
include("header.php");
$categoryName = $_GET['cat'];
if($categoryName == "list"){
    //blah blah, get stuff from DB
    //List categories with links
}
if(!$categoryName == "list"){
    
    $categoryNo = getNoFromCatName($categoryName);
    setTitle("Browse $categoryName Torrents");
    headerize("Browse $categoryName Torrents");
    //db magic
    $itemsInCategory = db_stuff($categoryNo);
}