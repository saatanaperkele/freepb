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
*	File: report.php [Report a torrent for something illegal lol]
*	Author: finlandia
*	Released under WTFPL
*/
include("header.php");
$id = $_GET['id'];
setTitle("Reporting torrent: #$id");

if(!$_POST['send']){
	$torrentName = getTitlefromTorrentID($id);
	headerize("Reporting torrent: $torrentName (#$id)");
	//draw up the page
}
if($_POST['send']){
	headerize("Torrent reported!");
	echo "Thank you for your report. It has been submitted to the $siteName staff<br>";
	echo "If the torrent is verified to be illegal, it will be dealt with";
	echo "accordingly. ";
}

