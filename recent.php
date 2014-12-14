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
*	File: 
*	Author:
*	Released under WTFPL
*/
include("header.php");
headerize("Recent Torrents");
//<!-- Building header -->

echo '<div id="content">';
//echo '<div id="sky-right">';
//echo '</div>';
echo '<div id="main-content">';
echo '<table id="searchResult">';
echo '<thead id="tableHead">';
echo '<tr class="header">';
echo '<th>Type</th>';
echo '<th><div class="sortby">Name</div>';
echo '<!-- div class=""> </div></th -->';
echo '<th><abbr title="seeders">SE</abbr></th>';
echo '<th><abbr title="Leechers">LE</abbr></th>';
echo '</table>';

include("footer.php");
echo "h";
createFooter();
?>
