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

/*
TODO: Block for handling second++ page of results
*/

//Find out how many results to display, this should be 
//functionized in the future and applied to all table pages
//and $defNumResults set in a central locations
$defNumResults = "100";
if(isset($_COOKIE['number_results'])){
    $numResults = $_COOKIE['number_results'];
}
if(!isset($_COOKIE['number_results'])){
    $numResults = $defNumResults;
}
//Now let's build the query
$sql_query = "SELECT * FROM ... LIKE ... LIMIT $numResults";

//table head here

/*while($db->list()){
    //table entry
}
*/

//table end
// Next links
include('footer.php');
createFooter();
