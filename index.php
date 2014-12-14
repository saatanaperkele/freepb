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
*	File: index.php		[Site landing page, searchbox, logo]
*	Author: finlandia
*	Released under WTFPL
*/

//Setting up page formatting
echo("<html><head>");

//including special functions
include("functions.php");

//setting page title with website name
setTitle("Spreading Freedom Across Your Tubes Since 2003");
?>
<link type="text/css" rel="stylesheet" href="/css/first.css">
</head>
<body>
<?php

//fetching the newest mysql row for `url` in table `logos`
$logo = getCurrent("logos", "url");
//formatting the logo
echo('<center><img src="'.$logo.'" height="420" width="420">');
echo('<br>');
echo('Search Torrents | <a href="/browse/">Browse Torrents </a> | <a href="/recent/">Recent Torrents </a> | <a href="/browse/TV/"> TV Shows </a> | <a href="/browse/Music">Music </a> | <a href="/toplist/100"> Top 100 </a>');
echo('<br>');
//setting up the searchbox
echo('<form action="search.php">');
echo('<input type="text" name="piracy" size=70><br>');
echo('<input type="button" value="Pirate Search"> <input type="button" value="I\'m Feeling Lucky">');
echo('</form>');

echo('<br><br><br>');
include("footer.php");
createFooter();
