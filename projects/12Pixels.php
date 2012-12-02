<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, 12Pixels</title>

<link rel="stylesheet" href="../css/csl_ilab_f.css" type="text/css">

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

<style type="text/css">
img, div { behavior: url(iepngfix.htc) }
</style>

</head>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-618087-7");
pageTracker._trackPageview();
} catch(err) {}</script>

<body>
<div id="everything">

<div id="red_line">
</div>

<div id="content_f">

<img src="12pixels/12pixels-top.gif" width="450" height="338"><br>
<div id="pjimagecap">
  <div align="right">
  12Pixels allows to draw and share drawings using only a standard mobile phone.</div>
</div>
      
<h2>12 Pixels:  Exploring Mobile Creativity.</h2>
<p class="indented">
<a href="#what">What is 12Pixels?</a><br>
<a href="#mot">Motivation.</a><br>
<a href="#draw">Drawing with 12Pixels.</a><br>
<a href="#culture">Pixel culture.</a><br>
<a href="#social">Social drawing.</a><br>
<a href="#appl">Uses and experiences.</a><br>
<a href="#product">Product.</a><br>
 <a href="#publ">Publications.</a><br>
</p>
<div id="green_line"></div>

<h2 align="left"><a name="what" id="what"></a>What is 12Pixels?</h2>
<p> 12Pixels is an innovative interface, mobile phone application, and a mobile phone web service that allows people to draw and share pixel-based imagery using only the regular 12 keys of the mobile phone. </p>
<p>Expensive touch screen or pen based interfaces are not required to express ones creativity. Anyone with a regular mobile phone and internet connection, anywhere from London to Tokyo, Mumbai to Nairobi, can use 12Pixels to create pixel-based drawings and share them with the world.</p>
<p>12Pixels  was done in collaboration with <a href="http://www.darcy.co.nz/">Karl D.D. Willis</a>.</p>
<p><object width="450" height="289"><param name="movie" value="http://www.youtube.com/v/X5nReVSEFpY&hl=en&fs=1&rel=0&ap=%2526fmt%3D18"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/X5nReVSEFpY&hl=en&fs=1&rel=0&ap=%2526fmt%3D18" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="445" height="284"></embed></object>

</p>
<div id="green_line"></div>

<h2 align="left"><a name="mot" id="mot"></a>Motivation.</h2>
<p>The motivation behind 12Pixels was to  


explore the use of a mobile phone as an emerging platform for everyday, spur-of-the-moment creativity. We has chosen drawing as a context for user creative expression and designed a set of interaction techniques to create simple pixel-style drawings using just twelve keys of any standard mobile phone. </p>
<p> Another motivation of 12Pixels was to develop and explore social web services that allow users to share their  creations as well as browse, download and re-mix drawings made by other users using <em>only</em> mobile phones. Indeed, today's creative tools can not be complete without providing means for sharing one's creations over the internet and building a community of like-minded creators. This phenomena has been often referred to as &quot;social web&quot; or &quot;participatory culture&quot;.   was another important motivation behind 12Pixels project. </p>
<div id="green_line"></div>  
 
<h2><a name="draw" id="over"></a>Drawing with 12Pixels. </h2>
<p>  The 12Pixels interface is based on the fundamental idea that each of the 12 keys on the conventional mobile phone can be mapped on to one of 12 'pixels' onscreen. The 'pixel' in our interface however, is not a screen pixel but a cell of the drawing area that mirrors the 3 by 4 grid of the keypad, i.e. each cell corresponds to a button on the mobile phone keypad. When the user presses the '7' key on the top of the keypad, the cell in the top-left of the drawing area is triggered on or off.</p>
<p>When the  user presses a dedicated key, for example a joystick key, the drawing area shrinks down a level and can be repositioned onscreen with the directional keys. Using the keypad the user can then mark out smaller-sized cells onscreen to create imagery at a finer scale. Currently up to three levels have been implemented. Lines can be also drawn by holding down one of the keypad keys and using joystick to steer it around. </p>

<div id="pjimage">
<img src="12pixels/12pixels_draw.gif" width="450" height="167">
<div id="pjimagecap">
Buttons on keypad are mapped on the corresponding "pixels" on screen.</div>  
</div>

<div id="pjimage">
<p align="center"><img src="12pixels/12Pixels-LevelSystem.gif" width="420" height="300"></p>
<div id="pjimagecap">
  The drawing area can scales down to allow drawing finer details of an image.
</div>
</div>

<p>The initial design of the 12Pixels interface allowed for only black and white drawings: the users could change only the shade of pixels by pressing the same key repeatedly. Our motivation was to make the drawing process as simple as possible. However, during extensive evaluation with users, <em>color</em> was indicated as the single most important missing functionality. </p>
<p>To address this issue we added a color menu, which allows users to select a drawing color from a 6-colour palette. After selecting the color, the user could choose shades of drawing color with multiple presses on the keypad keys.</p>
<p>Although the 12Pixles drawing interface is overtly simple, the resulted drawings can be extensive and complex. Below, we provide several examples of  drawings created by the end users of 12Pixels application.</p>

<div id="pjimage">
<img src="12pixels/userdrawings.gif" width="450" height="408">
Examples of drawings created by 12Pixels users.
</div>

<div id="green_line">
</div>

<h2><a name="culture" id="implem"></a>Pixel culture.</h2>
<p>The design of 12Pixels and its interaction approach is deeply rooted in modern digital culture and was particularly inspired by ASCII and pixel art. With computers integrated into the very fabric of everyday life, ASCII symbol and pixel-based imagery has become a prevalent part of contemporary culture., which can be seen on the streets, in advertising, as well as in work of modern artists and designers such as <a href="http://www.delaware.gr.jp">Delaware</a>, <a href="http://www.ymck.net">YMCK</a>, <a href="http://www.flipflopflyin.com">Craig Robison</a> and many others.</p>
<p>&nbsp;</p>

<img src="12pixels/asciistreet.gif" width="450" height="170">
<div id="pjimagecap"> ASCII art style graffiti in Tokyo. </div>


<img src="12pixels/pixelart.gif">
<div id="pjimagecap_last">
<em>Left</em>: pixel-art style advertismenet in Tokyo subway; <em>Right</em>: Craig Robinson's mininpops, i.e. &quot;famouse people drawn very very small.&quot;</div>

<div id="green_line"></div>

<h2><a name="social" id="social"></a>Social drawing.</h2>

<p>An important motivation in 12Pixels development was to encourage users to share their  drawings on the communal web site directly from their mobile phones. Indeed, 


despite popularity of social and user-generated web services on traditional desktop computers, such as YouTube and Flickr, very few such services on mobile phones have emerged.

In 12Pixels we created a mobile phone platform that allows people not only creating drawings for their personal use, but also share them with others, as well as download and re-mix other people drawings. </p>

<p>The initial research prototype of 12Pixels featured a  limited version of  social drawing service. Drawings created with 12Pixels could be uploaded to a communal server from the user mobile
  phone with appropriate tags. Anyone with the 12Pixels application can then browse drawings
  online, search them using tag words, download them to their mobile phone, modify and upload
  them on the web again. Shown below is an example demonstrating the 're-mixing' taking place between 12Pixels users.</p>
<p>A number of additional services and features for social drawings have been implemented when 12Pixels was released as a <a href="#product">product</a>.</p>
<p>&nbsp; </p>
<img src="12pixels/sharing.jpg">
<div id="pjimagecap">The user can upload to and browse drawings on the communal web site<br>
  directly from thier mobie phone.</div>

<img src="12pixels/re-mix.jpg">  
<div id="pjimagecap_last">An example of re-mixing of drawings uploaded on the communal<br>
  12Pixels web site.
</div>

<div id="green_line"></div>

<h2><a name="appl" id="appl"></a>Uses and experiences.</h2>

<p>Developing drawing techniques for mobile phones leads to a range of new creative uses of mobile phones, such as customizing user interface, using images in address book  or sending drawings to friends. Integrating 12Pixels with mobile phone applications allows for further uses, such as annotating digital photographs taken with mobile phone, creating personalized emoticons, creating characters for mobile games and many others. </p>
<p>The design and development of 12Pixels has been driven by iterative design process: to understand if everyday mobile phone users  would be able to draw attractive images we conducted a two-month  public experiment where the application was provided to public visiting the <a href="http://www.sonyexplorascience.jp/">Sony ExploraScience </a> in Tokyo. </p>

<p>Our observations suggested that the simplicity of pixel art made it easy for everyone to participate in the creative process, as it did not require extensive skills, training, or reference material. At the same time, this simplicity belies the surprisingly complex pixel artwork that can be created, allowing for a very wide range of personal expression. Indeed, although the drawing interface is very simple and the resolution of images is low, there was almost no repetitions in resulted drawings. </p>

<div id="pjimage">
  <img src="12pixels/12Pixels-SES.jpg"></p>
  <div id="pjimagecap">
Visitor are drawing with 12Pixels at the Sony ExploraScience exhibition.
</div>
</div>

<img src="12pixels/odaiba.jpg" width="450" height="198"></p>
  <div id="pjimagecap_last">
Examples of drawing created with 12Pixels at Sony ExploraScience exhibition.</div>

<div id="green_line">
</div>

<h2><a name="product" id="product"></a>Products.</h2>
<p> 12Pixels was released at <a href="http://www.jp.sonystyle.com/">Sony Style</a> Japan website  as a free web service in March 2009. 


The initial release was not available in full color but rather as five separate applications: Black, Red, Blue, Green, and Pink. Users could select their favorite color to download and draw images using its five shades.</p>

<div id="pjimage">
 <img src="12pixels/sonystyletop.gif" width="450" height="338"><br>
 <div id="pjimagecap"> 12Pixels project was released by Sony Marketing on SonyStyle web site.
</div>
</div>


<p>In addition to uploading and sharing drawings additional services have been implemented. Firstly, the <em>emoticon </em>service allows users to create 'emoji' icons to be included into rich text emails commonly used in Japan. Secondly, the <em>crystal accessories</em> service allows users submit their 12Pixels drawings to Ginza-based jeweler<a href="http://www.lights-style.com/"> Lights Style</a> to to turn their drawings into fashion accessories such as dog tags, mobile phone stickers, and key holders.<br>
</p>

<div id="pjimage">
  <img src="12pixels/crystal.jpg" alt="Creating accessories with 12 Pixels."><br>
  <div id="pjimagecap">
 Custom crystal accessories can be created with 12Pixels. 
 </div>
 </div>
 <p> <br>
  In 2010 Sony Ericsson included 12Pixels as <a href="http://ipoupyrev.wordpress.com/2010/11/12/12-pixels-sony-ericsson/">one of the standard features</a> of its new mobile phone that went on sales in Asia, Africa, Middle East, Europe and Americas. With this 12Pixels has reached truly world-wide audience.</p>
<p><a href="http://ipoupyrev.wordpress.com/2010/11/12/12-pixels-sony-ericsson/"><img src="../products/cedar/cedar.jpg" width="450" height="338"></a></p>
<div id="green_line"></div>
</p>

<h2><a name="publ" id="publ"></a>Publications.</h2>
<p class="reference">Poupyrev, I., Willis, K. <strong>TwelvePixels: Drawing &amp; Creativity on a Mobile Phone. </strong> Proceedings of CHI'08. 2008: ACM: pp. 2361-2366 [<a href="../e-library/2008/chi2008_12pixels.pdf">PDF</a>].</p>
<p class="reference">Willis, K., Poupyrev, I. <strong>12Pixels: Exploring Social Drawing on Mobile Phones. </strong>Proceedings of Pervasive 2010, LNCS 6030, 2010: Springer-Verlag: pp. 391-408 [<a href="../e-library/2010/12PixelsPervasive.pdf">PDF</a>].</p>
<p align="right" class="reference">[see  <a href="../exhibits/index.php">exhibitions</a> and <a href="../media/index.php">media</a> for more information.] </p>
<div id="green_line">
</div>

<?php
include "../copyright.html";
?>
</div>

<?php
include "../aboutme.html";
?>

<?php
include "../menu.html";
?>

<div id="highlights">

<p><a href="http://www.sonyericsson.com/"><img src="../images/assets/se.jpg"></a></p>
<p class="highl"><a href="http://www.sonyericsson.com/">Sony Ericsson</a>  pre-installed 12Pixels on Cedar model and released it world-wide in 2010.</p>
<p><a href="http://www.sony.jp/hitokoto/weblabo/12pixels/index.html"><br>
  <img src="../images/assets/sonystyle.jpg"></a></p>
<p class="highl">12Pixels is released by <a href="http://www.sony.jp/hitokoto/weblabo/12pixels/index.html">Sony Style</a> Japan as free service, where users can draw on bar-type mobile phones and share drawings <a href="http://xsb1.jp.sonystyle.com/cgi-bin/12p/TwelvePixelsGallery/index.php">on-line</a>.</p>

<p><br>
  <a href="http://www.newscientist.com/"><img src="../images/assets/newscientist.jpg"></a></p>
<p class="highl">New Scientist, ASCII, DIME  and other <a href="../media/index.php">media</a> report on 12 Pixles.</p>

<p><span class="highl"><br>
    <a href="http://www.axisgallery.org/Axis/Home.html"><img src="../images/assets/axis-hl.jpg" alt=""></a></span></p>
<p class="highl">12Pixels was exhibited at AXIS gallery at kansei <strong>x</strong> tsukuba <strong>x</strong> design <a href="http://ipoupyrev.wordpress.com/2009/03/18/axis-gallery/">show</a>.</p>

<p><br>
  <img src="../images/assets/sigchi.jpg"></p>
<p class="highl">A <a href="../e-library/2008/chi2008_12pixels.pdf" class="highl">short paper</a> on 12Pixels was presented at CHI 2008  and a <a href="../e-library/2010/12PixelsPervasive.pdf">full paper</a> at Pervasive 2010 conferences.</p>



</div>
</div>
</div>

</body>
</html>
