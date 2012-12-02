<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="google-site-verification" content="EmMJmOJjjm5G7ZiHZwxOrv1yj0lSMrbdIaespOj3PHY" />
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, Walt Disney Research.</title>

<link rel="stylesheet" href="css/csl_ilab_f.css" type="text/css">

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="./code/fadeslideshow.js">
/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>

<script type="text/javascript">
/*
var mygallery=new fadeSlideShow({
	wrapperid: "frontpageslideshow", //ID of blank DIV on page to house Slideshow
	dimensions: [450, 668], //width/height of gallery in pixels.
	imagearray: [
		["images/frontpage/ipoupyrevweb.jpg", "", "", ""],
		["images/frontpage/megummicarsten.jpg", "", "", "Photo by Junko Kimura for Financial Times."],
		["images/frontpage/mealihaptics.jpg", "", "", "Photo by Rebecca Droke for Pittsburgh Post-Gazette."],
		["images/frontpage/everyonePittsburgh.jpg", "", "", "Photo by Aaron Wojack for Monocle."],
		],
	displaymode: {type:'auto', pause:5000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 700, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
}) */
</script>

</head>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-618087-7");
pageTracker._trackPageview();
} catch(err) {}
</script>

<body>
<div id="everything">
<div id="red_line"></div>
<div id="content_f">

<!--
<div id="frontpageslideshow"></div>
//-->

<img src="images/frontpage/newyorkme.jpg" width="450" height="668"><br>
<br>
</div>

<?php
include "aboutme.html";
?>

<?php
include "menu.html";
?>

<!--
<div id="tile_gray">
    <p>Bloomberg Business Week <br>
profiled me in their <a href="http://www.businessweek.com/articles/2012-09-06/ivan-poupyrevs-virtual-reality-at-disney"">Innovator Column</a>.</p>
    <p>Bloomberg Business Week <br>
profiled me in their <a href="http://www.businessweek.com/articles/2012-09-06/ivan-poupyrevs-virtual-reality-at-disney"">Innovator Column</a>.</p>
</div>
//-->

<div id="tile_yellow">
  <div align="center">
    <p><a href="http://www.businessweek.com/articles/2012-09-06/ivan-poupyrevs-virtual-reality-at-disney"><img src="media/businessweek/BloombergThumb.png"></a></p>
    <p>Bloomberg Business Week <br>
profiled me in their <a href="http://www.businessweek.com/articles/2012-09-06/ivan-poupyrevs-virtual-reality-at-disney"">Innovator Column</a>.</p>
  </div>
</div>




<div id="sidebar_news2">
<div id="sidebar_news_in">
	<p>News / <u><a href="http://ipoupyrev.wordpress.com/">blog</a></u>:</p>
<?php
   include("./code/rssreader.php");
   $url="https://ipoupyrev.wordpress.com/feed";
   $rss=new rssFeed($url);
   if($rss->error){
      // Show the error
      print "<h1>Error:</h1>\n<p><strong>$rss->error</strong></p>";
   }else{

      $rss->parse();
	  $rss->maxstories=3;
      $rss->showStories();
   }
?>
<p align="right"><a href="http://ipoupyrev.wordpress.com/">more ...</a></p>

</div>
</div>

<?php
include "copyright.html";
?>
</div>
</body>
</html>
