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
    		//$rSSURL = $this->resolveFile($rssURL);
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
            	$post->summary = $this->summarizeText($post->text);

            	$this->posts[] = $post;
        	}
    	}
		/*
    	private function resolveFile($file_or_url) {
        	if (!preg_match('|^https?:|', $file_or_url))
            	$feed_uri = $_SERVER['DOCUMENT_ROOT'] .'/shared/xml/'. $file_or_url;
        	else
            	$feed_uri = $file_or_url;

        	return $feed_uri;
    	}*/

    	private function summarizeText($summary) {
        //	$summary = strip_tags($summary);

        // Truncate summary line to 100 characters
        //	$max_len = 100;
     	//	if (strlen($summary) > $max_len)
         //   	$summary = substr($summary, 0, $max_len) . '...';
			// How about no.
        	return $summary;
    	}
	}
	
}