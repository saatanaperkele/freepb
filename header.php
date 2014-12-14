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
*	File: header.php [goes atop seach pages, browse pages, etc]
*	Author: finlandia
*	Released under WTFPL
*/

include("functions.php");

global $logo;
?>

<link type="text/css" rel="stylesheet" href="/css/first.css">
<link type="text/css" rel="stylesheet" href="/css/second.css">
<body>
<div id="header">
<div class="ad">
<img src="/img/examplebanner.gif">
</div>
<!-- script type="text/javascript" src="http://srvpub.com/adServe/banners?tid=SP1PIRATE_23860_0&size=468x60"></script>	</div -->
</div>
<form id="piracy" action="/search_sanitize.php">
<a href="/" class="img"><img src="<?php echo getCurrent("x", "y"); ?>" height=82 width=87 id="TPBlogo" alt="The Pirate Bay"/></a>
<b><a href="/" title="Search Torrents">Search Torrents</a></b>&nbsp;&nbsp;|&nbsp;
<a href="/browse/" title="Browse Torrents">Browse Torrents</a>&nbsp;&nbsp;|&nbsp;
<a href="/recent/" title="Recent Torrent">Recent Torrents</a>&nbsp;&nbsp;|&nbsp;
<a href="/tv/" title="TV shows">TV shows</a>&nbsp;&nbsp;|&nbsp;
<a href="/music/" title="Music">Music</a>&nbsp;&nbsp;|&nbsp;
<a href="/top/" title="Top 100">Top 100</a>
<br><br/><input type="search" title="Pirate Search" name="piracy" required placeholder="Search here..." value="" style="background-color:#ffffe0;" class="searchBox"/><input
value="Pirate Search" type="submit" class="submitbutton"/>

