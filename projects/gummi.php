<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, Gummi</title>

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

<img src="gummi/gummi_mock.jpg" width="450" height="301"><br>
<div id="pjimagecap">
  <div align="right">
  Gummi mockup (photo courtesy of Junko Kimura, Getty Images).
  </div>
</div>
      

<h2>Gummi: A bendable computer.</h2>
<p class="indented">
<a href="#what">What is Gummi?</a><br>
<a href="#mot">Motivation.</a><br>
<a href="#concept">Gummi concept.</a><br>
<a href="#implem">Prototype.</a><br>
<a href="#inter">Interaction.</a><br>
<a href="#future">Future.</a><br>
<a href="#presentations">Exhibitions.</a><br>
<a href="#publ">Publications.</a><br>

</p>

<div id="green_line"></div>

<h2 align="left"><a name="what"></a>What is Gummi?</h2>
<p align="left">Gummi is a concept of a novel device and interaction style based on bending of a handheld computing device. Users interact with a Gummi device by physically deforming it and by touching the sensor on its back. No buttons, mechanical switches or traditional touch screens are used: the display covers the entire surface of the device. </p>
<p align="left">&nbsp;</p>
<p align="center"><img src="gummi/basics.png" width="442" height="191"></p>

<p>&nbsp;</p>
<p align="left">Gummi's graphical user interface facilitates a wide range of applications: browsing web pages, viewing maps and photographs, playing games, reading e-mail and even writing short messages.</p>
<p align="left">&nbsp;</p>
<p align="center">
<object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/W0g-SZTrFdY&hl=en&fs=1&ap=%2526fmt%3D18"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/W0g-SZTrFdY&hl=en&fs=1&ap=%2526fmt%3D18" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
</p>

<div id="green_line"></div>

<h2 align="left"><a name="mot" id="mot"></a>Motivation.</h2>
<p> We have been fascinated by  recent developments of flexible electronics devices such as flexible batteries, flexible transistors and full color, high-resolution flexible organic light-emitting displays (OLEDs). Flexible electronics is predicted to become one of the core technologies of the future. That is why we were interested to investigate its application in designing small, thin, efficient and inexpensive mobile devices for future pervasive computing environments.</p>
<p>The Gummi project is also part of our wider research efforts in investigating user interfaces for mobile devices. Designing mobile device interfaces that are easy and pleasant to use has been a challenging problem. To solve this problem we investigate new technologies that allow different and unexplored input modalities, presenting an opportunity to create new interaction styles. Flexible electronics are certainly one of those technologies.</p>
<div id="green_line">
</div>

<h2><a name="concept" id="concept"></a>Gummi concept. </h2>
<p>  An ideal Gummi bendable computer would consist of several layers of flexible electronic components: flexible processing and memory circuits, bending sensors and a flexible power<br>
  source are sandwiched between the flexible organic display on the top and a 2D position sensor on the bottom of the device. </p>
<p align="center"><br>
  <img src="gummi/gummi_sando.png" width="333" height="182"></p>
<p align="center"><br>
</p>
<p>We imagine the Gummi device to be extremely thin and slightly larger than a credit card. It would have no mechanical parts and it would be rigid enough to return to a flat state when no bending force is applied to it. </p>
<p>Space is an important resource on any mobile device and Gummi would therefore not incorporate any buttons or switches: the entire body of the device is used for input and output simultaneously. A user would hold the Gummi device with two hands and interact with it by physically bending it, touching the position sensor on the back of the device and observing interface response on the flexible display that covers the top of the device.</p>
<div id="green_line">
</div>

<h2 align="left"><a name="implem"></a>Prototype.</h2>
<p align="left">The flexible electronic components required to implement such a device are not available to us at this moment. Therefore, to evaluate the Gummi interaction techniques, we developed a prototype that emulates the most important properties of such a flexible computer. </p>

<div id="pjimage"><img src="gummi/proto.png" width="450" height="188"></div>
<div id="pjimagecap">Gummi prototype that was used to evaluate user interface design. </div>

<p align="left">The functional Gummi prototype consists of conventional, rigid components mounted on a flexible base. A TFT color display is attached to the center of the base and a USB trackpad is mounted on the bottom of the base and is used as a 2D position sensor. Two resistive bending sensors are mounted on opposing sides of the flexible base; the combined measurements of the sensors can be interpreted as two directions of bending.</p>
<p align="left">Although the resulted prototype is bigger than the envisioned device, it closely simulates the main properties of the  bendable computer: Users can easily bend the device up and down while controlling position using the trackpad mounted on the back of the device.</p>
<p align="left">Please, watch <a href="http://www.youtube.com/watch?v=W0g-SZTrFdY">video</a>  to see Gummi prototype in action. </p>
<div id="green_line">
</div>

<h2><a name="inter" id="inter"></a>Interaction.</h2>
<p>Interaction is a major challenge in designing a flexible, bendable computer. Even if we could develop a bendable computer the size and thickness of a credit card, how would users be able to interact with it? Gummi exploits a key property of flexible electronic technology - physical flexibility - to create a new interaction style and device concept. </p>
<p>The explanation of the basic interface concept is below and you can also watch <a href="http://www.youtube.com/watch?v=W0g-SZTrFdY">video</a> to see working Gummi interface. </p>
<h3>Bending.</h3>
<p>Starting from a flat state (<em>Neutral</em>), the device can be bent either up or down (see figure below). In both directions, transitional states between <em>Neutral</em> and maximum bending are continuously measured (<em>Transition Up</em> and <em>Transition Down</em>). When Gummi is bent to its maximum in either direction, a discreet event is issued (<em>Target Up</em> and <em>Target Down</em>). </p>
<p>In addition to these basic states and events, gestural controls can be incorporated, such as a quick succession of <em>Target Up</em> and <em>Target Down</em> states, which would issue a <em>Double Up</em> or <em>Double Down</em> event. </p>
<p>&nbsp;</p>
<p align="center"><img src="gummi/gesture.png" width="364" height="169"></p>
<p>&nbsp;</p>
<p>Gummi's discreet bending events loosely correspond to mouse button clicks and double clicks in desktop user interfaces. The combination of discreet events of maximum bending and continuous transitional states form a basic interaction vocabulary that is used to implement a variety of interaction techniques, most importantly for selection, scrolling and hierarchical navigation.</p>
<h3>Consistent mapping.</h3>
<p>A central feature of Gummi interaction is the consistent mapping of bending directions to semantically opposed operations, making the Gummi interface coherent and easy to use. For example, bending the device to <em>Target Down</em> is used to select items, descend menu hierarchies or follow hyperlinks. <em>Target Up</em>, on the other hand, is used to deselect items, ascend menu hierarchies or to return to the previous page in hyperlinked documents.</p>
<p>&nbsp;</p>
<p align="center"><img src="gummi/interact.png" width="388" height="169"></p>
<p>&nbsp;</p>
<p>Traditional desktop graphical interfaces must rely on widgets or keyboard shortcuts to accomplish opposed tasks, e.g. &quot;Back&quot; button in web browsers. Two-directional bending in Gummi allows to navigate interfaces without using widgets, saving screen space.</p>
<h3>Selection and scrolling.</h3>
<p>The traditional concept of a <em>pointer</em> is absent from Gummi. Instead of a moving a cursor, Gummi uses a fixed point of focus in the center of the screen.</p>
<p>To select an interface item, such as a hyperlink or a menu item, the user simply scrolls the entire visual content in one or two directions using a 2D position sensor on the back. When the item comes close to the focus point in center of the screen, it is automatically selected and can be activated by bending Gummi to <em>Target Down</em>.</p>
<p>Figure  below illustrates scrolling and selection. The trajectory of finger movement on the 2D position controller is directly mapped to direction and amount of scrolling of visual content. Because the finger moves directly under the screen, this technique provides an effective visual feedback, creating the illusion that the user directly drags the displayed content. In the case of menus and hypertext documents, scrolling can be limited to one dimension. </p>

<div id="pjimage"><img src="gummi/scroll.png" width="450" height="165"></div>
<div id="pjimagecap">Scrolling in Gummi: the user drags subway map to the <em>right</em><br>and the subway station 
that is the closest to the center is selected by the dynamic cursor.</div>
<p>Gummi's combination of scrolling and selection greatly simplifies the browsing of menus and large hyperlinked documents: the user only needs to scroll the content until the desired item comes into focus. No widgets or scroll bars are needed. Also, because selection is determined algorithmically, selection is very easy as it does not require accurate pointing. Even small graphical elements can be selected easily.
<h3>Previews and transitions: analogue links. </h3>
<p>The analog properties of Gummi allow gradual visual transitions between user interface states. We call this feature <strong>analog links</strong>.</p>
<p>For example, in a map application below, a user selects a subway station  to access a local area street map. A small highlight box is displayed around the selected station in the <em>Neutral</em> state. To follow the link, the user bends the device until the <em>Target Down</em> event is issued. In transition between <em>Neutral</em> and <em>Target Down</em> (i.e. <em>Transition Down</em>) the amount of bending is continuously mapped to the size of the highlight box. A preview of the selected link, in this case a street map, is displayed inside the highlight box. When the <em>Target Down</em> state is reached, the link is activated and the highlight box fills the entire display.</p>
<p>Analog links serve two important purposes. Firstly, they provide a <strong>continuous visual feedback</strong> on bending which gives the user feeling of being in control of the device. Secondly, analog links provide <strong>preview</strong> of linked content, such as thumbnail previews or textual descriptions of selected content such as web pages, photographs or menu items. This is comparable to Tool Tip previews used in desktop graphical interfaces.</p>
<p>In addition to analog links we use transparency to interactively blend between multiple views of related information. For example an aerial photograph of a city and a street map of the same area can be simultaneously displayed as overlapping layers. By bending the Gummi device, users can interactively blend between the two images.</p>

<div id="pjimage"><img src="gummi/alinks1.png" width="450" height="164"></div>
<div id="pjimage"><img src="gummi/alinks2.png" width="450" height="164"></div>
<div id="pjimagecap">
<i>Analogue links</i>: the user selected the link (top left). As the device is bended<br>a preview
of a corresponding street map up appears in the selection box (top right). As the
user continues bending the previews increases. When the user hits <i>Target up</i> state the Gummi changes into street browsing mode and map fills the entire screen.
</div>

<div id="pjimage"><img src="gummi/alinks3.png" width="450" height="164"></div>
<div id="pjimagecap">
<i>Transparency</i>: Bending can be also used to visually mix two overlapped images.
</div>

<h3>Zooming, text input, gestures and other interactions.</h3>
<p>Accurate and quick <strong>image zooming</strong> with variable speed is also controlled with <em>Transition Up</em> and <em>Transition Down</em> allowing the user to control the level of details of the information. </p>
<p>We also developed several systems for <strong>text input</strong> for Gummi GUI. All systems utilize analog controls and are based on a two-step character selection process: First, a group<br>
    of characters is selected, then a character from within the chosen group is selected and entered into the text field.<br>
</p>
<div id="pjimage"><img src="gummi/other_technique_sm.png" width="450" height="226"></div>
<div id="pjimagecap">Continuous zooming using bending (top row of images) and a text input<br>
technique (bottom images). The larger image can be accessed 
<a href="" onClick="window.open('gummi/other_technique.jpg','','status, width=1018, height= 518'); return false">here</a>.
</div>

<p>Gummi's bending interaction lends itself to <strong>gestures</strong>. We have used two such gestures: two successive <em>Target Up</em> or <em>Target Down</em> events are interpreted as distinct input events, <em>Double Up</em> and <em>Double Down</em>. In the current design the <em>Double Up</em> gesture opens a menu of system-wide commands that allow users to navigate between various Gummi applications. </p>
<p> The <strong>media playback</strong>, such as movies or music, can be controlled by bending: media files play at regular speed when the device is in its <em>Neutral</em> state and  slowed down or sped up with <em>Transition Up</em> and <em>Transition Down</em>. In another simple application, a <strong>game character's </strong>movement can be controlled with a combination of bending and 2D position control.</p>

<div id="green_line">
</div>

<h2><a name="future"></a>Future.</h2>
<p>The development of such a deformable, credit card-sized computer may seem a very remote possibility. However, rapid advances in flexible electronics make such a device feasible in the relatively near future. Indeed, a wide range of flexible electronic devices and components has recently been demonstrated. </p>
<p>Gummi is a first attempt to design a device and interface style based on the unique physical properties of flexible electronic devices. Developing such interactive concepts that take full advantage of the physical properties of new technologies will hopefully stimulate further development of those technologies and their practical applications. </p>

<div id="pjimage"><img src="gummi/gummi_botm.jpg" width="450" height="295"></div>

<div id="green_line">
</div>

<h2><a name="publ" id="publ"></a>Publications.</h2>

<p class="indented"><span class="reference">Vertegaal, R., Poupyrev, I. <strong>Organic User Interfaces: Introduction to Special Issue</strong>. Communications of the ACM 51(6). 2008: pp. 26-30 [<a href="../e-library/2008/CACM-intro.pdf">PDF</a>].</span></p>
<p class="indented"><span class="reference">Schwesig, C., I. Poupyrev, and E. Mori. <strong>Gummi: a bendable computer.</strong> Proceedings of CHI'2004. 2004: ACM: pp. 263-270 [<a href="../e-library/2004/CHI2004_gummi.pdf">PDF</a>].</span></p>
<p class="indented"><span class="reference">Schwesig, C., I. Poupyrev, and E. Mori. <strong>Gummi: user interface for<br>
  deformable computers.</strong> Proceedings of CHI'2003, Extended Abstract.
  2003: ACM: pp. 954 - 955 [<a href="../e-library/2003/chi2003_gummi.pdf">PDF</a>].</span></p>
  
  <p class="reference">[ see also <a href="../exhibits/index.php">exhibitions</a> and <a href="../media/index.php">media</a> for more information. ] </p>

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
<p class="highl">Watch Gummi <a href="http://www.youtube.com/watch?v=W0g-SZTrFdY">video</a> to see the Gummi interface in action.</p>
<p class="highl">A <a href="../e-library/2008/CACM-intro.pdf">paper </a>on Organic User Interfaces co-authored by me and Roel Vertegaal was published in <a href="http://cacm.acm.org/">Communications of ACM</a>. </p>
<p class="highl"><a href="../media/index.php#axis2">AXIS magazine</a> featured Gummi in their 2004 prototype issue.</p>
<p class="highl">Gummi was exhibited at the <a href="../exhibits/index.php#nf">Wired Next Fest 2004</a> in San-Fransico, USA.</p>
<p class="highl">A <a href="#publ">paper</a> on Gumi project was presented at the ACM CHI 2004 conference in Vienna, Austria. </p>
<p class="highl">Stories on Gummi were carried by <a href="../media/index.php#ft">Financial Times</a>, <a href="../media/index.php#jt">Japan Times</a>, <a href="../media/index.php#nyp">New York Post</a>, <a href="../media/index.php#news">New Scientist</a>, <a href="../media/index.php#web">Slashdot</a>, <a href="http://www.theregister.com/2004/05/15/bendable">Register</a> and many other media sources.</p>
</div>

</div>
</body>
</html>
