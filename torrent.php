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
if(!$_GET['id']){
	header("Location: ".$siteLoc."not_found");
}

//Fetching torrent information
$torrentID = $_GET['id'];
$torrentFetch = $sql->prepare("SELECT * FROM `magnets` WHERE id = ?");
$torrentFetch->bind_param("i", $torrentID);
$torrentFetch->execute();
$torrentFetch->bind_result($torrentID, $torrentTitle, $torrentLink, $torrentUploader, $torrentDate, $torrentCat, $torrentSource, $torrentVerified, $torrentSeeds, $torrentLeech, $torrentSize, $torrentDesc);
$torrentFetch->fetch();
setTitle($torrentTitle ." - ".$siteName);
headerize("Details for this torrent (ID: $torrentID)");
$torrentFetch->close();

//Fetching uploader information
$uploaderSt = $sql->prepare("SELECT * FROM `users` WHERE userid = ?");
$uploaderSt->bind_param("i", $torrentUploader);
$uploaderSt->execute();
$uploaderSt->bind_result($uploaderID, $uploaderName, $uploaderVerif, $uploaderEmail);
$uploaderSt->fetch();
$uploaderSt->close();
?>

<div id="content">
<!-- div id="sky-right">
<iframe src="//thepiratebay.mn/static/ads/exo/sky2.html" width="160" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<div id="main-content"> WITHOUT AN AD, THIS FUCKS UP CENTERING, TODO: FIX LATER
<iframe src="//thepiratebay.mn/static/ads/exo/center.html" id="sky-center" width="728" height="90" frameborder="0" scrolling="no"></iframe -->
<div>
<div id="detailsouterframe">
<div id="response"></div>
<div id="message"></div>
<div id="detailsframe">
<div id="title">
        <?php echo $torrentTitle; ?></div>

    <div id='details'>
        <dl class='col1'>
            <dt>Type:</dt>
            <dd><a href="/browse/<?php echo $torrentCat; ?>" title="More from this category">TODO:CATIDFROMDB</a></dd>

        <dt>Files:</dt>
            <dd><a href="javascript:void(0);" title="Files" onclick="if( filelist &lt; 1 ) { new Ajax.Updater('filelistContainer', '/ajax_details_filelist.php', { method: 'get', parameters: 'id=11947322' } ); filelist=1; }; toggleFilelist(); return false;">1</a></dd>

            <dt>Size:</dt>
            <dd><?php echo $torrentSize/1024; ?>&nbsp;MiB&nbsp;(<?php echo $torrentSize;?>&nbsp;kBytes)</dd>

            
                
                
        </dl>
        <dl class='col2'>
            <dt>Uploaded:</dt>
            <dd>2015-05-20 06:47:48 GMT</dd>
            <dt>By:</dt>
            <dd><a href="/user/<?php echo $uploaderName;?>/" title="Browse <?php echo $uploaderName;?>"><?php echo $uploaderName;?></a>&nbsp;<img src="<?php getTrustedIcon($uploaderSt);?>" alt="Status" title="Status" style="width:11px;" border='0' /></dd>
            <dt>Seeders:</dt>
            <dd><?php echo $torrentSeeds;?></dd>

            <dt>Leechers:</dt>
            <dd><?php echo $torrentLeech;?></dd>

            <dt>Comments</dt>
            <dd><span id='NumComments'>TODO</span>
                &nbsp;            </dd>

            <br />
            <dt>Info Hash:</dt><dd></dd>
            md5        </dl>
            <div id="CommentDiv" style="display:none;">
        <form method="post" id="commentsform" name="commentsform" onsubmit="new Ajax.Updater('NumComments', '/ajax_post_comment.php', {evalScripts:true, asynchronous:true, parameters:Form.serialize(this)}); return false;" action="/ajax_post_comment.php">
            <p class="info">
                <textarea name="add_comment" id="add_comment" rows="8" cols="50"></textarea><br/>
                <input type="hidden" name="id" value="11947322"/>
                <input type="submit" value="Submit" /><input type="button" value="Hide" onclick="document.getElementById('CommentDiv').style.display = 'none'" />
            </p>
        </form>
    </div>
    <br/>
    <br/>
    <div id="social">
    </div>
    
	<br /><br />    <div>
        <div class="download">
  		          <a style="background-image: url('<?php echo $siteLoc;?>img/icon-magnet.gif');" href="magnet:?<?php echo $torrentLink;?>" title="Get this torrent">&nbsp;Get this torrent</a>
        
        <div style="clear:both;">(Problems with magnets links are fixed by upgrading your <a href="http://www.utorrent.com" target="_blank">torrent client</a>!)</div>
        </div><div class="nfo">
            <pre><?php echo $torrentDesc;?></pre>
        </div>
        <br/>
        <div class="download">
            <a style="background-image: url('<?php echo $siteLoc;?>img/icon-magnet.gif');" href="magnet:?<?php echo $torrentLink;?>" title="Get this torrent">&nbsp;Get this torrent</a>
              </div>

		 <!-- iframe src="//cdn.adbrau.com/cdn3/index.php?r=58&b=bar&n=%5B-LetsTryAnal-%5D_Apolonia_%5B-Yoga_Latina_Post-Shower_Anal-%5D_--NEW-&m=magnet%3A%3Fxt%3Durn%3Abtih%3A5208a1713cfb0c844320b64b5df3255340627133%26dn%3D%255B-LetsTryAnal-%255D%2BApolonia%2B%255B-Yoga%2BLatina%2BPost-Shower%2BAnal-%255D%2B--NEW-%26tr%3Dudp%253A%252F%252Ftracker.openbittorrent.com%253A80%26tr%3Dudp%253A%252F%252Fopen.demonii.com%253A1337%26tr%3Dudp%253A%252F%252Ftracker.coppersurfer.tk%253A6969%26tr%3Dudp%253A%252F%252Fexodus.desync.com%253A6969" width="622" height="51" frameborder="0" scrolling="no"></iframe -->
	            <div id="filelistContainer" style="display:none;">
                <a id="show"></a>
            </div>
            <div id="comments"></div>            </div>
        </div>
    </div>
    
			<div class="ads" id="sky-banner">
			</div>

			<script type="text/javascript" src="//thepiratebay.mn/static/ads/ad-scroll.js"></script>
	</div>
</div><!-- //div:content -->
	            <!-- div id="filelistContainer" style="display:none;" -->
                <a id="show"></a>
<div id="commentsheader" class="comments">
<?php

$commentSt = $sql->prepare("SELECT * FROM `comments` WHERE torrentid = ?");
$commentSt->bind_param("i", $torrentID);
$commentSt->execute();
$commentSt->bind_result($commentID, $commentText, $commentPoster, $commentIsOn, $commentTime);
echo '<h4>Comments</h4></div><div id="comments">';
while($commentSt->fetch()){
	echo '<div id="comment-1"><p class="byline">';
	echo '<a href="/user/'.getUserNameFromID($sql,$commentPoster).'" title="Browse '.getUserNameFromID($sql,$commentPoster).'">'.getUserNameFromID($sql,$commentPoster).'</a> at '.$commentTime.':';
	echo '</p><div class="comment">'.$commentText.'</div>';
}
$commentSt->close();
?>

 
</div></div>

<?php
include("footer.php");

createFooter();
