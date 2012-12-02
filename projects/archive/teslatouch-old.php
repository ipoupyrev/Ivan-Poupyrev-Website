<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, TeslaTouch</title>

<link rel="stylesheet" href="../../css/csl_ilab_f.css" type="text/css">

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
img, div { behavior: url(../iepngfix.htc) }
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

<img src="../teslatouch/teslatouch-top-small.jpg" width="450" height="338"><br>
<div id="pjimagecap">
  TeslaTouch technology creates  feeling of tactile textures on screen.
</div>
      
<h2>TeslaTouch: Electrovibration for touchscreens.</h2>
<p class="indented">
<a href="#moti">What is TeslaTouch?</a><br>
<a href="#principles">Principles of operation.</a><br>
<a href="#prop">TeslaTouch properties.</a><br>
 <a href="#impl">Implementation of technology..</a><br>
  <a href="#appl">Applications.</a><br>
 <a href="#publ">Publications.</a><br>
</p>
<div id="green_line"></div>

<h2 align="left"><a name="moti" id="moti"></a>What is TeslaTouch?</h2>
<p>TeslaTouch is a novel tactile technology that enhances  touch screen interaction with tactile feedback. It is based on the electrovibration principle, which does not require use of any moving parts and provides a very wide range of tactile  sensations to fingers sliding across a touch surface. </p>
<p>When combined with  touch input and visual display, TeslaTouch enables the design of effective and enjoyable touch interfaces that allow the user to <em>feel</em> virtual objects, thier texture, and dynamic motion under thier fingers.</p>
<p><br>
  <embed type="application/x-shockwave-flash" src="http://s0.videopress.com/player.swf?v=1.02" width="450" height="268" wmode="transparent" seamlesstabbing="true" allowfullscreen="true" allowscriptaccess="always" overstretch="true" flashvars="guid=2zLwSQXs"></embed>
</p>
<div id="green_line"></div>
<h2 align="left"><a name="principles" id="principles"></a>Principles of operation.</h2>
<p>TeslaTouch is based on a principle of <em>electrovibration</em>,  discovered in 1950s. </p>
<p>We used a glass panel covered with a transparent electrode sheet  coated with a thin insulator layer. We  excited the  electrode with a periodic electrical signal  of sufficient amplitude generating an electrically induced attractive force  between  sliding finger and the  panel. This in turn increases  the <em>dynamic friction</em> between the finger and the surface of the panel.<br>
  <br>
</p>
<img src="../teslatouch/tt-basic.png" width="450" height="256"><br>
<div id="pjimagecap"> <div align="right">
  Basic principles of electrovibration and TeslaTouch operation.<br>
  </div></div>

<p align="left">Because the amplitude of attractive force varies with the signal amplitude, changes in friction  will also be periodic and generating the feeling of dynamic tactile textures on a static, unmovable glass surface. Depending on amplitude and frequency of applied signal, these textures are be percieved as either vibrations or friction betwee the finger and a panel. Note that only digits in motion perceive this effect.</p>
<p align="left"><img src="../teslatouch/tt-finger.png" width="450" height="153"><br>
</p>
<div id="pjimagecap"> <div align="right">
The sliding finger sticks and slips on the touch panel surface.<br>
</div></div>
<div id="green_line"></div>
<h2 align="left"><a name="prop" id="prop"></a>TeslaTouch properties.</h2>
<p align="left">TeslaTouch tactile feedback provides a friction-like  sensation to a finger sliding on  touch surface. It has a number of interesting properties:</p>

<ul>
  <li>Tactile feedback can be provided on almost any touch surface; <strong>no moving parts </strong> and <strong>no mechanical actuators</strong> are requried.</li>
  <li>The tactile sensation is <strong>uniform</strong> across the tactile surface, which would not be the case when touch panel is vibrated mechanically.</li>
  <li>TeslaTouch can produce a very broad range of tactile sensations and both  frequency and amplitude of tactile signal can be controlled independently of each other.</li>
  <li>The tactile feedback requires <strong>low power</strong>,   less then 0.5 mA are required to create very prominent tactile sensation.</li>
  <li>The tactile sensation can be created on touch panels of <strong>any size</strong> and the same implementation can used both for small hand-held devices and for large wall-size touch surfaces. </li>
  <li>The tactile apparatus is compact, <strong>inexpensive</strong> and can be easily added to existing mobile devices and touch platforms.</li>
  </ul>
<div id="green_line"></div>
<img src="../teslatouch/tt-table.png" width="450" height="338"><br>
<div id="pjimagecap"> <div align="right">
  Implementing TeslaTouch for tabletop touch surfaces with optical multitouch.<br>
  </div></div>
  
<h2><a name="impl" id="impl"></a>Implementation of technology.</h2>
<p>TeslaTouch can be implemented in multiple configurations, depending on required form factor and technology that is used to sense user input. </p>
<p>One possible configuration is <strong>tabletop multitouch</strong> surface. Here,  a multilayer glass panel, such as described above is used as a projection surface. User touch is captured and recognized using camera installed underneath. The user input is then correlated with images projected on the surface, allowing to add a broad variety of tactile sensation to virtual objects.</p>
<p>We also implemented TeslaTouch in <strong>singletouch handheld</strong> configuration on the mobile device. Here single touch surface capacitive touch panel  was used to capture user touch input and provide tactile feedback.<br>
  <br>
</p>

<p><img src="../teslatouch/t-table-setup.png" width="450" height="298"> </p>
<div align="center"></div>
<div id="pjimagecap">
  <div align="right">Implementing TeslaTouch in multitouch tabletop configuration.     
</div></div>
<div id="green_line"></div>

<h2><a name="appl" id="book2"></a>Applications.</h2>
<p>There is a broad variety of applications of TeslaTouch tactile feedback. Below is a brief overview of some of them.</p>
<h3>Direct manipulation and GUI.</h3>
<p>There are many  venues for infusing traditional user interface elements with TeslaTouch tactile feedback, for example: 
<ul>
<li>Sliders can report their drag extent by changing the frequency of tactile feedback as the user moves them.
<li>Buttons could be felt when  user slides thier finger over them. 
<li>Icons such as files and folders could be enhanced with variable levels of tactile friction to convey thier properties such as file size or interaction with other icons in drag-and-drop operations.
<li>Drawing and graphics manipulation tasks, such as objects positioning and rotation could be enhanced with tactile feedback, e.g.   users for example could feel underlying alignment grid with thier fingers. 
</ul>
<p>These and many other forms of tactile augmentation can make touch screen interaction easier, more intuitive, and perhaps even eyesfree  with sufficient practice.<br>
  <br>
</p>

<img src="../teslatouch/tt-guiinteractions.jpg"><br>
<div id="pjimagecap">The user  feels constraint grids  and icon properties when manipulating them.</div>

<h3>Simulating textures.</h3>
<p>Tactile feedback provided by TeslaTouch can be used to simulate a feeling of textures and materials of virtual objects, such as glass-smooth, or rough like corderoy or irregular like sand. The feeling of textures could be experienced  implicetely by sliding fingers over thier images. Alternatively, it can be experienced explicitely by simulating friction between objects manipulated by the user.  For example, a user could feel a virtual pavement  while dragging a car along it. </p>
<p>Textures could also provide an additional information layer in data visualization applications. For example, an image of a star field could be supplemented with a &quot;tactile image&quot; of radiation intensity that the user could feel by sliding fingers on the image of stars.</p>
  <br>
  <img src="../teslatouch/tt-textures.jpg"><br>
<div id="pjimagecap">The user  can feel textures directly or through a virtual object.</div>

<h3>Drawing and image editing.</h3>
<p>Repeated cursor motion over a region, i.e. rubbing, has been extensively used in image editing applications for erasing, smoothing, desaturating and other procedures that incrementally increase or decrease some attribute of the image.  Tactile feedback can be very effective in all these applications by providing feedback on the degree of image modifications that has been done by the user. For example, in erasing task the tactile sensation would decreases as pixels are being progressively removed from the image.</p>
<p>Alternatively in painting task, tactile feedback can be used to simulate a variety of sensations such as  feelings of canvas, density of the paint and thickness of the brush.</p>
  
 <img src="../teslatouch/tt-paint.jpg"><br>
<div id="pjimagecap">Erasing parts of the image and painting can be enhanced with tactile feedback.</div>

<h3>Multitouch</h3>
<p>The current design of TeslaTouch does not support multi-touch tactile feedback: all fingers would feel the same tactile sensations. However, for gestures based on <em>asymmetric separation</em> of labor between the hands or fingers, multitouch interaction can be effectively enhanced with tactile feedback.</p>
<p>An example of such gestures is when non-dominant hand performs gross manipulation, such as orienting a sheet of paper, while the dominant hand performs a fine-grained interaction, such as writing or drawing.</p>
<p> In another example the user selects from the pie menue by achoring an entire menu with the thumb and selecting items with the pointing finger. In all these gestures there is a hand or a finger that remains static while performing the gesture and therefore can not percieve tactile feedback. Another hand or other fingers are engaged in hand movement and therefore could be provided with tactile feedback using TeslaTouch technology.</p>
<br>
<img src="../teslatouch/tt-mtouch.jpg"><br>
<div id="pjimagecap"> <div align="right">Asynchrounous multitich gestures can be enhanced with tactile feedback.<br>
</div></div>
<div id="green_line"></div>
<h1><a name="concl" id="book3"></a>Conclusions.</h1>
 <p>TeslaTouch is a new  tactile display technology based on electrovibration that can be adapted to a wide range of input tracking strategies and  applications. One of the most important characteristics of TeslaTouch is that it does not require any mechanical motion. This allows to provide tactile feedback for touch interfaces where tactile feedback is impossible to provide otherwise, such as very large disiplays.</p>
<p>More details on the technology, including implementation and hardware design  can be found in the <a href="../../e-library/2010/teslatouchUIST2010.pdf">paper</a> presented at the UIST 2010 conference. </p>
<br>
 <p><img src="../teslatouch/tt-ar.jpg" width="450" height="270"></p>
 
 <div id="green_line"></div>

<h2><a name="publ" id="publ"></a>Publications.</h2>
<p class="reference">Bau, O., Poupyrev, I., Israr, A, Harrison, C. <strong> TeslaTouch: Electrovibration for Touch Surfaces.</strong> Proceedings of UIST 2010: ACM: pp. 283-292 [<a href="../../e-library/2010/teslatouchUIST2010.pdf">PDF</a>]</p>
<p class="reference">[ see also <a href="../../media/index.php">media</a> for more information. ] </p>
<div id="green_line">
</div>

<?php
include "../../copyright.html";
?>
</div>

<?php
include "../../aboutme.html";
?>

<?php
include "../../menu.html";
?>

<div id="highlights">

  <p class="highl"><img src="../../images/assets/axis-hl.jpg"></p>
  <p class="highl">TeslatTouch is reported about in MSNBC and PBS.</p>
  <p><img src="../../images/assets/sigchi.jpg"></p>
<p class="highl">TeslaTouch is featured by CNN, BBC, etc.</p>
<p><img src="../../images/assets/sigchi.jpg"></p>
<p class="highl">A <u><a href="../../e-library/2008/chi2008_specialmoments.pdf" class="highl">paper</a></u> on TeslaTouch project <br>
  was presented at UIST 2010 conference.<br>
    <br>
</p>
</div>


</div>

</div>
</body>
</html>
