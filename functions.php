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
*	Author: finlandia
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
	//temporary rss return
	$rssInfo = array('1','MyAwesomeTorrentz','...');
	$rssName = $rssInfo[2];
	$rssURL = "http://nextpb.org/feed.rss";
	class TorrentEntry
	{
		var $id;
		var $date;
		var $unixdate;
 		var $magnet;
    	var $uploader;
    	var $title;
    	var $text;
    	var $site;
	}
	class TorrentFeed
	{
    	var $posts = array();
	
    	function __construct($rssURL)
    	{
        	if (!($x = simplexml_load_file($rssURL)))
            	return;

        	foreach ($x->channel->item as $item)
        	{
            	$post = new TorrentEntry();
            	$post->id = $item->torrentID;
            	$post->date  = (string) $item->uplDate;
            	$post->unixdate    = strtotime($item->uplDate);
            	$post->magnet  = (string) $item->magnetLink;
            	$post->uploader = (string) $item->uploadedBy;
            	$post->title  = (string) $item->torrentName;
            	$post->text = (string) $item->torrentDesc;
            	$post->site = $rssName;

            	// Create summary as a shortened body and remove images, 
            	// extraneous line breaks, etc.
            	$this->posts[] = $post;
        	}
  
    	}

	}
	return $post;
	
}

function checkThenPost($newPost){
	//dbmagic
	$lastEntryForSite = "123456"; //TorrentID of last scraped torrent
	while($newPost['id'] > $lastEntryforSite){
		//db magic
		//INSERT INTO ... 
		
		$lastStored = $newPost['id'];
	}
	//db magic to update $lastEntryforSite
	
}

function getNoFromCatName($name){
	/*get info from db
	if($db->error()){
		header("Location: 404.php");
		setSpecificError("Category not found!");
	}*/
	return 1;
}
