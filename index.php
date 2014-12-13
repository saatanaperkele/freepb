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
echo("<html><head>");
include("functions.php");
setTitle("Spreading Freedom Across Your Tubes Since 2003");
?>
</head>
<body>
<?php
$logo = getCurrent("logos", "url");

echo('<center><img src="$logo">');

