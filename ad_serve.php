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
*	File: ad_serve.php [serves banner ads]
*	Author: finlandia
*	Released under WTFPL
*/
include("sql.php");
$adno = $_GET['adno'];

if(!$adno){
    //routine for fetching one randomly
    $ad->mysqli_query("SELECT * FROM `ads` SORT by Random");
    
}

if($adno){
    $ad->mysqli_query("SELECT * FROM `ads` WHERE `id` = $adno");
    //$ad->mysqli_bind_result() derp
}
