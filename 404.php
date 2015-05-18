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
echo("<html><head>");
include("header.php");
setTitle("404");
headerize("File not found.");
?>
<center><img src="<?php echo $siteLoc;?>/img/logo.png"><br>The file you were looking for could not be found.</center>
<br><br><?php
include("footer.php");

createFooter();
