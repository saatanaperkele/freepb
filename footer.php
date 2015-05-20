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
*	File: footer.php [contains footer stuff, links, etc]
*	Author: finlandia
*	Released under WTFPL
*/

function createFooter(){
include("sql.php"); //todo find better solution
echo "<footer>";
echo '<small><center> [<a href="http://github.com/saatanaperkele/freepb">freepb</a>, <a href="http://kopimi.com/kopimi"><img src="'.$siteLoc.'/img/c_mini_7.gif" border="0"></a> + <a href="http://wtfpl.net">wtfpl</a>, 2014, <a href="mailto:finlandia@riseup.net">finlandia</a>]</center></small>';
}
