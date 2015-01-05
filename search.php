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
echo '<div id="content">';
echo '<div id="sky-right">';
echo '</div>';
echo '<div id="main-content">';
echo '<table id="searchResult">';
echo '<thead id="tableHead">';
echo '<tr class="header">';
echo '<th>Type</th>';
echo '<th><div class="sortby">Name</div>';
echo '<div class="viewswitch"> RSS: <a href="/recentfeed.rss">feed here.</a></div></th>';
echo '<!-- div class=""> </div></th -->';
echo '<th><abbr title="seeders">SE</abbr></th>';
echo '<th><abbr title="Leechers">LE</abbr></th>';
echo '</thread>';
/*while($db->list()){
    //block
$category = "TV";
$torrentid = "134";
$torrentTitle = "TPB AFK: The Story of The Pirate Bay";
$magnetlink = "asDF34tgfqaG46626";
$uploader = "John33";
$timeformatted = "Today, at 15:51";
$size = "150";
$seeders = 12;
$leechers = 156;
$time = $size;

//The loop will repeat these values
echo '<tr><td class="vertTh"><center><a href="#" title="More from this category">'.$category.'</a><br/></center></td>';
echo '<td><div class="detName"><a href="/torrent/'.$torrentid.'"class="detLink" title="'.$torrentTitle.'">'.$torrentTitle.'</a></div>';
echo '<a href="magnet:?'.$magnetlink.'" title="Download this!"><img 
src="/img/icon-magnet.gif"></a><a href="/user/'.$uploader.'"><img src="/img/11x11p.png"></a><font class="detDesc">Uploaded '.$timeformatted.'  '.$size.'<span>MB</span>, ULed by <a class="detDesc" href="/user/'.$uploader.'/" title="Browse '.$uploader.'">'.$uploader.'</a></font></td><td align="right">'.$seeders.'</td><td align="right">'.$leechers.'</td></tr>';

}
*/

//table end
echo '</table>';
// Next links
include('footer.php');
createFooter();
