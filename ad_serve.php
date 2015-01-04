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

if(!$_GET['adno']){
    //routine for fetching one randomly
}

if($_GET['adno']){
    $ad->mysqli_query("SELECT * FROM `ads` SORT by Random");
    //$ad->mysqli_bind_result() derp
}