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
</head>
<body>
<?php

//fetching the newest mysql row for `url` in table `logos`
$logo = getCurrent("logos", "url");

//formatting the logo
echo('<center><img src="$logo">');
echo('<br>');

//setting up the searchbox
echo('<form action="search.php">');
echo('<input type="text" name="piracy"><br>');
echo('<input type="button" text="Pirate Search"> <input type="button" text="I\'m Feeling Lucky">');


