<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, Surround Haptics</title>

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

<div class style="margin-bottom:600px" id="content_f"><img src="shaptics/shtopimg.jpg"><br>
      
<h2>Surround Haptics and Tactile Brush.</h2>
<p class="indented">
<a href="#moti">What are Surround Haptics and Tactile Brush?</a><br>
<a href="#pict">Surround Haptics and Tactile Brush in Pictures.</a><br>
<a href="#publ">Publications, Exhibitions.</a><br>
<a href="#media">Media, Press.</a><br>
<a href="#credits">Team and Credits.</a><br>

</p>
<div id="green_line"><a name="moti" id="moti"><p></p></a></div>


<h2 align="left">What are Surround Haptics and Tactile Brush?</h2>
<p>Surround Haptics is a new tactile technology that uses a low-resolution grid of vibrating actuators to create high-resolution, continuous moving tactile strokes on human skin. The user would not feel the discrete buzzes that are common in tactile devices today, but rather a smooth tactile motion, akin to what we feel when someone drags a finger across our skin.</p>
<p>Our technology is based on modeling and controlling tactile illusions, which allow to create virtual, phantom tactile actuators and movements anywhere on an actuator grid. With that, complex tactile trajectories can be created using just a few actuators. Their speed, direction, length, and intensity can be effectively controlled. We called the algorithm implementing such tactile drawing - a&nbsp;Tactile Brush.</p>
<p>There are many applications of Surround Haptics. Imagine a chair that makes you feel bugs crawling on your back as you watch a movie. A motorcycle jacket that lets you feel the traffic around you. A game controller that makes you feel forces and motions in virtual game environments.  There are endless possibilities.</p>
<br>
<p>
<embed src="http://s0.videopress.com/player.swf?v=1.03" type="application/x-shockwave-flash" width="450" height="252" wmode="direct" seamlesstabbing="true" allowfullscreen="true" allowscriptaccess="always" overstretch="true" flashvars="guid=Fe7n55pd&amp;isDynamicSeeking=true" title=""></embed>
 </p>

<div id="green_line"><a name="pict" id="book2"></a><p></p></div>

<h2>Surround Haptics and Tactile Brush in Pictures.  </h2>
<h2><a href="shaptics/hi-res/illusions-hr.png"><img src="shaptics/illusions.jpg" width="450" height="414"></a></h2>
<div id="pjimagecap-new">
  <p align="center">Surround Haptics is based on two <em>tactile illusions</em>. In <em>Apparent Tactile Motion</em> we overlap actuation time of two proximate vibrating actuators placed on subject skin. The subject  will perceive not <em>two </em>actuators, but a <em>single moving</em> virtual actuator. In <em>Phantom Tactile Sensation</em>    a simultaneous stimulation of two vibrating actuators creates an <em>illusory</em> actuator  in between them. Unlike apparent motion, the phantom illusion is static and no motion is perceived.</p>
</div>
<div align="center"><a href="shaptics/hi-res/tactile-brush-hr.jpg"><img src="shaptics/tactile-brush.jpg" width="400" height="245"></a>
</div>
<div id="pjimagecap-new">
  <p align="center"><em>Tactile Brush</em> algorithm uses tactile illusions to generates smooth tactile strokes on actuator grid. We use Apparent Tactile Motion to produce continuous strokes between points of the actuator grid (a).  A difficulty arises when we attempt to generate a diagonal stroke (b): because of the large distance between start and end points, the user feels a gap in the middle. To solve this we generate a virtual actuator using the Phantom Illusion and proceed to generate a tactile stroke using Apparent Motion (c). The phantom actuator here is treated just like a normal physical actuator, in fact we can produce tactile strokes consisting of virtual actuators only (d).</p>
</div>

<a href="shaptics/hi-res/hardware-hr.jpg"><img src="shaptics/hardware.jpg"></a>
<div id="pjimagecap-new">
  <p align="center">Surround Haptics can implement Tactile Brush algorithm in a variety of embodiments, e.g. chairs or vests.  In  early tests we used a 4&times;3 rectangular grid of C-2 tactors placed in a finely cut sheet of foam glued to the back of a wooden chair.  Each actuator was individually controlled by a multichannel audio card with tactile waveforms generated by patches in PureData sound generation environment.  A custom control board amplified individual waveforms before sending them to actuators. Application software triggered Pure Data patches over  UDP protocol.</div>

<div align="center"><a href="shaptics/hi-res/sh-application-hr.jpg"><img src="shaptics/sh-application.jpg"></a>
</div>
<div id="pjimagecap-new">
  <p>There are multiple applications of Surround Haptics technology including, but not limited, to handheld computing devices, gaming controllers and wearable haptics embedded in vests and clothes.</p>
</div>

<div align="center"><a href="shaptics/hi-res/sh-movie-rides-hr.jpg"><img src="shaptics/sh-movie-rides.jpg" ></a>
</div>
<div id="pjimagecap-new">
  <p>We started by investigating the use of Surround Haptics to enhance movies and rides experiences. By combining hi-fidelity moving tactile sensations on user body with three-dimensional visuals and sound we aim to dramatically increases the sense of immersion and realism.</p></div>

<a href="shaptics/hi-res/chairs-composite-hr.jpg"><img src="shaptics/chairs-composite.jpg" width="450" height="502"></a>
<div id="pjimagecap-new">
<p>A custom  plywood chair was developed in collaboration with CMU School of Design (see <a href="#credits">credits</a>) as a platform for investigating applications of Surround Haptics in movies and gaming applications.</p>
</div>

<a href="shaptics/hi-res/chair-asem-hr.jpg"><img src="shaptics/chair-asem.jpg" width="450" height="600"></a>
<div id="pjimagecap-new">
<p>The chair was designed to be modular where haptics capabilities can be easily added by adding a set of haptic pads with actuators built into them.</p>
</div>

<a href="shaptics/hi-res/chair-hr.jpg"><img src="shaptics/chair.jpg"></a>
<div id="pjimagecap-new">
<p>Surround Haptics chair assembled with haptic pads.</p>
</div>

<a href="shaptics/hi-res/chair-games-hr.jpg"><img src="shaptics/chair-games.jpg" width="450" height="601"></a>
<div id="pjimagecap-new">
<p> Surround Haptics can be used to enhance computer gaming.</p>
</div>


<a href="shaptics/hi-res/chair-movies-hr.jpg"><img src="shaptics/chair-movies.jpg" width="450" height="598"></a>
<div id="pjimagecap-new">
<p> We can also enhance movies experiences with Surround Haptics.</p>
</div>

<a href="shaptics/hi-res/sh-driving-sideview-hr.png"><img src="shaptics/sh-driving-sideview.jpg" width="450" height="253"></a>
<div id="pjimagecap-new">
<p>We enhanced existing driving simulation game with Surround Haptics.</p>
</div>

<a href="shaptics/hi-res/sh-driving-backview-hr.png"><img src="shaptics/sh-driving-backview.jpg" width="450" height="253"></a>
<div id="pjimagecap-new">
<p>The user could feel sensations on his body that correspond to events in the game, such as acceleration, breaking, hitting objects and many others.</p>
</div>

<div id="green_line"><a name="publ" id="publ"></a><p></p></div>
<h2>Publications, Exhibitions.</h2>
<p class="reference">Israr, A. and Poupyrev, I. <strong>Tactile Brush: Drawing on skin with a tactile grid display.</strong> Proceedings of CHI'2011, 2011. ACM: pp. 2019-2028 [<a href="../e-library/2011/tactilebrush-chi2011.pdf">PDF</a>].</p>
<p class="reference">Israr, A. and Poupyrev, I. <strong>Control space of apparent haptic motion.</strong> Proceedings of World Haptics Conference (WHC), 2011. IEEE, pp. 457-462 [<a href="../e-library/2011/whc2011-israr-poupyrev.pdf">PDF</a>].</p>
<p class="reference">Israr, A., Poupyrev, et al., <strong>Surround Haptics: Sending shivers down your spine.</strong> SIGGRAPH Conference Abstracts and Applications, Emerging Technologies, 2011: ACM [<a href="../e-library/2011/siggraph2011-Israr-etal.pdf">PDF</a>].</p>
<div id="green_line"><a name="media" id="media"></a><p></p></div>
<h2>Media, Press.</h2>
<table width="100%" border="0">
  <tr>
    <td width="51%" height="70">
 <p align="center"><a href="http://www.pittsburghlive.com/x/pittsburghtrib/business/s_753250.html"><img src="../images/assets/tribune-review.jpg"></a></p>
  
    <td width="49%"> <p align="center" ><a href="http://www.newscientist.com/article/mg21028137.900-illusions-to-send-shivers-down-a-gamers-spine.html"><img src="../images/assets/newscientist.jpg"></a></p></tr>
  <tr>
    <td height="70"><p align="center"><a href="http://www.fastcompany.com/1772583/disney-reinvents-the-vibrator-for-sensational-movies-and-gaming"><img src="../images/assets/fast-company.jpg"></a></p></td>
    <td>  <p align="center"><a href="http://www.msnbc.msn.com/id/40845743/ns/technology_and_science-tech_and_gadgets/"><img src="../images/assets/msnbc.jpg"></a></p></td>
  </tr>
  <tr>
    <td height="70"><p align="center"><a href="http://ipoupyrev.wordpress.com/2011/06/12/pittsburgh-post-gazette-on-surround-haptics/"><img src="../images/assets/pittsburgh_post_gazette.jpg"></a></p></td>
    
    <td><p align="center"><a href="http://www.engadget.com/2011/08/11/surround-haptics-could-bring-force-feedback-to-vests-coasters-a/"><img src="../images/assets/endgadget.png"></a></p>
</td>
  </tr>
  <tr>
	<td height="99"><p align="center"><a href="http://www.technewsdaily.com/3063-tactile-technology-creates-real-life-sensations.html"><img src="../images/assets/technewsdaily.jpg"></a></p></td>
    <td><p align="center"><a href="http://www.pcworld.com/article/229026/disney_researches_force_feedback_on_your_spine.html"><img src="../images/assets/pcworld.png"></a></p></td>
  </tr>
  <tr>
  	<td height="70"><p align="center"><a href="http://gizmodo.com/5806070/disney-tactile-device-lets-games-and-movies-literally-send-chills-down-your-spine"><img src="../images/assets/gizmodo.png"></a></td>
    
  	<td><p align="center"><a href="http://news.discovery.com/tech/a-video-game-that-really-gives-you-the-shivers-110528.html"><img src="../images/assets/discovery-news.png"></a>
</td>
  </tr>
   <tr>
  	<td height="70"><p align="center"><a href="http://kotaku.com/5829027/one-day-games-will-caress-smack-you"><img src="../images/assets/logo_kotaku.jpg"></a></td>
    
  	<td><p align="center"><a href="http://blogs.voanews.com/science-world/2011/08/12/gamers-filmgoers-could-soon-feel-jolt-of-onscreen-car-crash/"><img src="../images/assets/voiceofamerica-logo.jpg"></a>
</td>
  </tr>
 <tr>
  	<td height="70"><p align="center"><a href="http://www.popsci.com/technology/article/2011-05/sensory-illusions-could-soon-add-tactile-touch-games-and-movies"><img src="../images/assets/Popular-Science-Logo.jpg"></a></td>
    
  	<td><p align="center"><a href="http://www.theregister.co.uk/2011/08/09/mickey_to_vr_gaming_thanks_walt/"><img src="../images/assets/register.jpg"></a>
</td>
  </tr>
 <tr>
  	<td height="70"><p align="center"><a href="http://www.repubblica.it/spettacoli-e-cultura/2011/08/11/news/volare_come_peter_pan-20310974/"><img src="../images/assets/repubblica.jpg"></a></td>
    
  	<td><p align="center"><a href="http://www.jpost.com/HealthAndSci-Tech/InternetAndTechnology/Article.aspx?id=234257"><img src="../images/assets/Jerusalem_Post_Logo.jpg"></a>
</td>
  </tr>

</table>
<div id="green_line"><a name="credits" id="credits"></a><p></p></div>
<h2>Team and Credits.</h2>
<p> Surround Haptics fundamental technology was developed in 2010-2011  at <a href="http://www.disneyresearch.com/">Disney Research</a> Pittsburgh by <a href="http://www.aliisrar.info/">Ali Israr</a> and me. The early set of applications that explored our haptics technology and were reported in our CHI 2011 <a href="../e-library/2011/tactilebrush-chi2011.pdf">paper</a> were designed and developed by <a href="http://www.ivanpoupyrev.com/projects/index.php">Jan Stec</a>.</p>
<p><a href="http://www.design.cmu.edu/show_person.php?t=f&id=markbaskinger">Mark Baskinger,</a> Jason May, Natalia Olbinski and Luke Martin all from CMU School of Design designed and produced custom plywood chair.</p>
<p> <a href="http://www.cioffreda.com/cioffreda/Christopher_Ioffreda.html">Chris Ioffreda</a>,  CMU School of Design, designed and produced second version of actuator padding for the chair as well as graphics and illustrations.</p>
<p>Kenny Mitchell and Huw Bowles (both Black Rock Studio, DIS) as well as Neil Hutchinson (Roundcube Entertainment Ltd.) developed haptic integration of Surround Haptics with Split Second simulation driving game.</p>
<p>Video  production is by Karl Willis (Disney Research, Pittsburgh) and Jim Cox (Black Rock Studio, DIS).</p>

<div id="green_line"></div>
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
<p align="center"><img src="../images/assets/acm_logo.jpg"></p>
<p class="highl_new">A full <u><a href="#publ" class="highl">paper</a></u> on Surround  Haptics was presented at<a href="http://www.chi2010.org/"> CHI 2011</a> conference and a follow up <a href="#publ" class="highl">paper</a></u> was presented at <a href="http://www.haptics2011.org/en/">WHC 2011</a> conference.</p>
<p class="highl_new"><br>
</p>
<p class="highl_new">Surround Haptics was reported in a  variety of on-line  and <a href="../media/index.php">print media</a>. Click on logos   below for some of the stories or see <a href="#media">compleate coverage</a>:</p>
<br>
<p align="center"><a href="http://ipoupyrev.wordpress.com/2011/06/12/pittsburgh-post-gazette-on-surround-haptics/"><img src="../images/assets/pittsburgh_post_gazette.jpg"></a></p>

<p align="center" class="highl_img"><a href="http://blogs.voanews.com/science-world/2011/08/12/gamers-filmgoers-could-soon-feel-jolt-of-onscreen-car-crash/"><img src="../images/assets/voiceofamerica-logo.jpg"></a></p>

<p align="center" class="highl_img"><a href="http://www.newscientist.com/article/mg21028137.900-illusions-to-send-shivers-down-a-gamers-spine.html"><img src="../images/assets/newscientist.jpg"></a></p>

<p align="center" class="highl_img"><a href="http://www.fastcompany.com/1772583/disney-reinvents-the-vibrator-for-sensational-movies-and-gaming"><img src="../images/assets/fast-company.jpg"></a></p>

<p align="center" class="highl_img"><a href="http://www.msnbc.msn.com/id/44241757/ns/technology_and_science-tech_and_gadgets/t/new-tactile-game-device-creates-touch-sensation/"><img src="../images/assets/msnbc.jpg"></a></p>

<p align="center" class="highl_img"><a href="http://kotaku.com/5829027/one-day-games-will-caress-smack-you"><img src="../images/assets/logo_kotaku.jpg"></a></p>





<div align="center"><br>
 more <a align="right"  href="#media	">media</a> ...</div>
</p>
</div>


</div>

</div>
</body>
</html>
