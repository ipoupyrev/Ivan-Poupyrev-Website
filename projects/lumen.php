<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, Lumen</title>

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

<img src="lumen/l5w.jpg"><br>
<div id="pjimagecap">
  <div align="right">
  Lumen (photograph by Makoto Fujii, courtesy of AXIS Magazine)
  </div>
</div>
      

<h2>Lumen: a Shape Changing Display</h2>
<p class="indented">
<a href="#mot">Motivation.</a><br>
<a href="#over">Lumen overview.</a><br>
<a href="#inter">Interaction.</a><br>
<a href="#implem">Construction.</a><br>
<a href="#future">Future.</a><br>
<a href="#publ">Publications.</a><br>
</p>

<div id="green_line"></div>

<h2 align="left"><a name="mot" id="mot"></a>Motivation.</h2>
<p> What would happen if physical objects around us are enabled to transform their shapes? What kind of interactions and applications would become possible for the devices that  dynamically deform and change their physical appearance in response to the user actions? </p>
<p>In Lumen project, we are   creating and investigating an interactive device that can dynamically change its shape to communicate information to the users.</p>
<p align="center"><br>
<object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/RwrNAtVmztw&hl=en&fs=1&rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/RwrNAtVmztw&hl=en&fs=1&rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
</p>
<div id="green_line"></div>

<h2><a name="over" id="over"></a>Lumen overview. </h2>
<p>  Conceptually we are investigating interfaces that can be generalized as an extension of traditional 2D bit-mapped RGB displays. Here each pixel has an additional attribute: <em>height. </em>We call this interaction design approach an <em>RGBH display</em>, where RGB is a color components and <em>H</em> is a height of a pixel. It can be viewed as the next step in the evolution of a pixel. </p>
<p align="center">&nbsp;</p>
<p align="center"><img src="lumen/pixel.png" width="347" height="135"></p>
<p align="center">&nbsp;</p>
<p>The Lumen, is an implementation of such RGBH display: it’s a low-resolution (13 by 13 pixel) bitmap display where each pixel can also physically move up and down. Therefore, the device can display both two-dimensional graphical images and moving, dynamic 3D physical shapes. These shapes can be viewed  or touched and felt with the hands. Invisible to the user is a two-dimensional position sensor (<a href="http://www.csl.sony.co.jp/person/rekimoto/smartskin/">SmartSkin</a>) that is built into the Lumen surface adding interactivity to the device. It allows users to directly manipulate and modify shapes with their hands. Furthermore, by connecting several devices over the network we can establish a remote haptic communication link between several users. </p>
<div id="pjimage"><img src="lumen/l22.png">
  <strong>left:</strong> swimming fish with its fins &quot;sticking up&quot; from the water<br>
  <strong>right:</strong>  users can create simple 3D traces with thier hands
</div>

<div id="green_line"></div>

<h2><a name="inter" id="inter"></a>Interaction.</h2>
<p>Dynamic physical shapes add another interactive dimension to flat 2D images. Shapes can be used to <strong>increase visual realism </strong>of 2D images by adding shape and real-time physical animation. For example, an animation of floating water can be displated by creating a physical 3D wave sweeping across the display surface. Similarly the movement of a virtual character can be made more realistic by displaying parts of a character though the shape: for example an image of a fish swimming across the display can be combined with a physical shape of its fins &quot;sticking up&quot; from the water. Alternatively, shape can be used to present fine irregularities in surface and create physical textures and patterns. </p>
<p>Lumen is also an inherently <strong>haptic display device</strong>, it allowes users to <strong>feel shapes</strong> of virtual images through touch. Indeed, an image can have a &quot;real&quot; 3D physical shape that can be felt by the user similarly to real objects. Furthermore, the users can <strong>physically create and manipulate</strong> virtual images using sensor installed in the Lumen surface: for example a physical wave can be drawn by moving a finger across the surface of Lumen. In another example, a <strong>physical interface elements</strong>, such as buttons, can be dynamically created and &quot;pressed&quot; by the users. By connecting two devices over the network we can allow several people to feel and touch each others remotely, establishing remote <strong>haptic link </strong>between people. </p>
<p> Finally, shape displays create new and beautiful <strong>aesthetics</strong> through 3D physical motion and images.</p>

<div id="pjimage">
<img src="lumen/l11w.png">
<strong>left:</strong> an animation of floating water is created with physical shape<br>
<strong>right:</strong> users can both feel images with hands and see them visually</p>
</div>
<div id="pjimage"><br>
<img src="lumen/l23.png">
<strong>left:</strong> dynamic 3D buttons can be created and &quot;pressed&quot; <br>
<strong>right:</strong> haptic communication link between remote users can be established</p>
</div>

<div id="green_line">
</div>

<h2><a name="implem" id="implem"></a>Construction.</h2>
<p> To create an image we are using  arrays of light guides that direct light from the LEDs mounted on the bottom of Lumen. The tops of light guides are covered with matte cups that diffuse light and produce even illumination of each pixel. </p>
<p>Each pixel is actuated using thin shape-memory alloy (SMA) wires that are attached both to the light guides and the frame of the device. When electrical current is applied to the SMA wires, they heat up and shrink pushing light guides up. They return back to their initial length when cooled. To provide interaction, a custom two-dimentional capacitive sensor (<a href="http://www.csl.sony.co.jp/person/rekimoto/smartskin/">SmartSkin</a>) is integrated into the Lumen surface. The sensor computes the shape of the touch area and a distance from the hand to the device surface. This data is used to update the state of the Lumen device. </p>

<div id="pjimage">
  <img src="lumen/l24.png"><br>
  <strong>left:</strong> light guides and shape memory alloys are used in construction of Lumen<br>
  <strong>right:</strong> Lumen is built  of building blocks where each block is an array of pixels </div>
 
<div id="green_line">
</div>

<a name="pen" id="pen"></a> 

<h2><a name="future" id="future"></a>Future.</h2>
<p>Lumen is an early and conceptual interactive prototype that allows us to imagine and propose  future interfaces. With the development of new, light-weight, energy-efficient and inexpensive actuator technologies we anticipate development of thin, fast and effective shape displays that can be used everyday in public displays, electronic appliances, living environments and mobile devices. Perhaps, the most prevailing robots in the future will not look like a human or animal, but will rather a dynamically reconfigures surfaces that would present information though images and dynamic physical shapes. Lumen is one of the first attempts to probe this future. </p>
<div align="center"></div>

<div id="pjimage">
  <img src="lumen/l25.jpg"><br>
  The first Lumen prototype; the main operation principles
  are the same <br>
  as in the final version of the device (Photograph by Makoto Fujii, <br>
  courtesy of AXIS Magazine).
</div>

<div id="green_line">
</div>

<h2><a name="publ" id="publ"></a>Publications.</h2>
<p class="reference">Parkes, A., Poupyrev, I., Ishii, H. <strong>Designing Kinetic Interactions for Organic User Interfaces</strong>. Communications of the ACM 51(6). 2008: pp. 58-65 [<a href="../e-library/2008/CACM-kinetic.pdf">PDF</a>].</p>
<p class="reference">Poupyrev, I., Nashida, T., Okabe, M. <strong>Actuation and Tangible User Interfaces: the Vaucanson Duck, Robots, and Shape Displays. </strong> Proceedings of TEI'07. 2007: ACM: pp. 205-212 [<a href="../e-library/2007/TEI2007ipoupyrev.pdf">PDF</a>].</p>
<p class="reference">Poupyrev, I., T. Nashida, S. Maruyama, J. Rekimoto, and Y. Yamaji.
    <strong>Lumen: Interactive visual and shape display for calm computing.</strong> SIGGRAPH Conference Abstracts and Applications, Emerging Technologies, 2004: ACM [<a href="../e-library/2004/siggraph2004.pdf">PDF</a>].<br>
</p>
<p class="indented">[ Also, see <a href="../exhibits/index.php">exhibitions</a> and <a href="../media/index.php">media</a> pages for more information. ] </p>
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

<p><strong>Highlights:</strong></p>
<p class="highl">A <a href="../e-library/2008/CACM-kinetic.pdf">paper </a>on kinetic interfaces  co-authored by Amanda Parkes, me and Hiroshi Ishii was published in <a href="http://cacm.acm.org/">Communications of ACM</a>. 
<p class="highl">Lumen was included in <a href="http://www.amazon.com/gp/product/1933330481?ie=UTF8&tag=ivanpoupyilab-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=1933330481">Design Japan: 50 Creative Years With Good Design Awards</a> published by Stone Bridge Press in 2007. <br>
    <br>
  A <a href="#publ">paper</a> on Lumen was presented at the <a href="http://tei-conf.org/07/">TEI 2007</a> Conference in Baton Rouge, USA.
<p class="highl"><a href="../media/index.php#axislumen">AXIS magazine</a> featured Lumen in their annual 2005 prototype issue.<br>
      <br>
      Lumen was shown at the <a href="../exhibits/index.htm#ars">ARS Electronica 2005 Festival</a> in Lynz, Austria. <br>
      <br>
      Lumen was demonstrated at the <a href="../exhibits/index.htm#sigg2005">SIGGRAPH 2004 Emerging Technologies Exhibition.</a>
</div>


</div>

</div>
</body>
</html>
