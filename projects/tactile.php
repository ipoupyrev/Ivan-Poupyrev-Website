<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Ivan Poupyrev, Tactile</title>

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

<img src="tactile/te_actuators.jpg" width="450" height="300"><br>
<div id="pjimagecap">
  <div align="right">
  Early prototypes of TouchEngine tactile actuators.
  </div>
</div>
      

<h2>Research: Tactile User Interfaces </h2>
<p class="indented">
<a href="#why">Why tactile interfaces?</a><br>
<a href="#te">TouchEngine&trade; tactile  platform.</a><br>
<a href="#smallscreen">Tactile interfaces for small touch screens.</a><br>
<a href="#pen">Tactile feedback for pen computing.</a><br>
<a href="#publ">Publications.</a><br>
</p>

<div id="green_line"></div>

<h2 align="left"><a name="why"></a>Why tactile interfaces?</h2>
<p align="left">A sense of touch is a combination of  sensations evoked by stimulating the skin and it is crucial for our interactions with the world around us. For example, when we roll a pencil in our fingers, we can very quickly and precisely re-adjust the 3D positions and grasping forces of our fingers by relying entirely on tactile sensation. It also allows us to understand fine object properties where vision fails: e.g. textures and tiny surface variations can be accurately detected by touch. Touch has also strong emotional impact: running a finger into a splinter, touching a cat's fur, or immersing fingers into unknown sticky substance all bring intense, though very different, emotional responses. </p>
<p align="left">In several projects listed below I investigate how we can use sense of touch as an additional channel of communication between human and digital devices, in particular handheld mobile devices that has become so prevalent nowadays. My work on tactile user interfaces is an <em>ongoing research</em>, therefore, more projects might be added in the future. </p>

<div id="green_line"></div>

<h2 align="left"><a name="te"></a>TouchEngine&trade; tactile platform.</h2>
<p align="left"><em>TouchEngine</em> is a new haptic actuator that we created for designing and implementing a wide range of tactile user interfaces. It is particularly suited for implementing tactile feedback in handheld, mobile electronic devices. Indeed, currently TouchEngine is the only haptic actuator that has <em>all</em> of the following highly desired qualities:</p>
<ul>
  <li>small, miniature size; </li>
  <li>lightweight;</li>
  <li>low voltage and power consuption ; </li>
  <li>extremely low latency, accelerations up to 5G can produced; </li>
  <li> can produce a wide variety of tactile patterns with different frequency and amplitude;</li>
  <li>can be easily customized and retrofitted to devices of various sizes and forms;</li>
  <li>relatively inexpensive in mass production. </li>
</ul>
<p align="left">The TouchEngine actuator is constructed as a sandwich of 0.28 micrometer piezoceramic film layers with adhesive electrodes in between, resulting in a 0.5mm beam. The piezocermic material works as a solid state &quot;muscle&quot; by either shrinking or expanding depending on the polarity of the applied voltage. The material on the top has an opposite polarity to that on the bottom, so when a signal is applied the whole structure bends. This configuration is often called a &quot;bending motor&quot; actuator. </p>

<div id="pjimage">
  <div align="center"><img src="tactile/actuator_structure.png" width="299" height="150"></div>
</div>
<div id="pjimagecap">
  <div align="center">Piezoelectric bending motor actuator.&nbsp;</div>
</div>

<p align="left">The bending motors that currently exist usually consist of only two layers (i.e. biomorphs) and require a at least of 40V peak-topeak for producing sufficient force, making them unsuitable for the mobile devices. We can observe, however, that for voltage <em>V</em> and thickness <em>T</em>, the displacement <em>D</em> and force <em>F</em> for  bending motors are: </p>
<p align="center"><em>D</em> = <em>a</em><sub>1</sub><em>V</em> /T<sup>2</sup> and <em>F</em> = <em>a</em><sub>2</sub><em>T</em><em>V</em>, </p>
<p align="left">where <em>a</em><sub>1</sub>, <em>a</em><sub>2</sub> are coefficients. Therefore, by decreasing thickness <em>T</em> we can achieve the same displacement with a lower voltage. This, however, also decreases the force <em>F</em>, we can compensate for this by layering several thin piezoceramic layers together. Thus, we reduce the voltage required for maximum displacement to 8-10V peak-to-peak. </p>

<div id="pjimage">
  <div align="left"><img src="tactile/nlayer_structure.png" width="450" height="202""><br>
  </div>

  <div align="right">Left: Structure of the TouchEngine multilayer haptic actuator. <br>
      Right: Microscopic view of the actuator with <em>n</em>=9. You can also see an <br>
      image with much higher magnification <a class="linkopacity" href=""onClick="window.open('tactile/microscopicview.jpg','','status, width=1020, height=770'); return false">here</a>.
</div>
</div>


<p align="left"><br>
  The resulting actuator has unique properties. It is thin, small, it can be operated from a battery and produced in different sizes and number of layers. We implemented a range of tactile user interfaces with TouchEngine that have been demonstrated to public and presented in detailes at UIST 2002 [<a href="../e-library/2002/uist2002_ambientouch.pdf">PDF</a>], CHI 2002 [<a href="../e-library/2002/chi2002_touchengine.pdf">PDF</a>] and SIGGRAPH 2002 [<a href="../e-library/2002/siggraph2002_tactilepen.pdf">PDF</a>] conferences.</p>
<p align="left">The actuator has been also used in a number of <a href="../product/index.htm">products</a> that incorporated tactile user interfaces and were released on the market by <a href="http://www.sony.co.jp">Sony Corporation</a>. </p>

<div id="green_line">
</div>

<a name="smallscreen" id="smallscreen"></a> 

<div id="pjimage">
  <img src="tactile/smallscreen_device.jpg"><br>
  We embedded a tactile feedback apparatus in a Sony PDA touch screen<br>
  and enhanced its basic GUI elements with tactile feedback.<br>
</div>

<h2 align="left">Tactile Interfaces for Small Touch Screens</h2>
<p align="left">Touch screens have become common in mobile devices, such as mobile phones, digital video cameras, high-end remote controls and so on. Despite thier popularity one important challenge remains:  graphical buttons cannot provide the same level of haptic response as physical switches. Without haptics, the user can only rely on audio and visual feedback, which breaks the metaphor of directness in touch screen interaction.</p>

<p align="left">We present a haptic, tactile interface design for small touch screens used in mobile devices. We embedded four custom-designed TouchEngine actuators in Sonys Clie PDA touch screen (see figure above). Actuators were placed at the corners of the touch screen between the TFT display and the touch-sensitive glass plate. The glass plate is larger than the display; hence, the actuators are not visible. </p>
<p align="left">The important design decisions were as follows (see also drawing below):</p>
<ul>
  <li><em>Actuation of the touch screen</em>. When a signal is applied, actuators bend rapidly, pushing the touch-sensitive glass plate towards the user's finger. Actuators are very thin, hence we could embed them <em>inside</em> the touch screen. Therefore, only the lightweight touch-sensitive glass is actuated, not the entire unit which includes a heavy TFT display.<br>
    <br>
  </li>
  <li><em>Localized tactile feedback.</em> Vibration of touch screen glass produces tactile sensations <em>only</em> to the touching finger, not to the hand holding the device. To prevent the entire device from vibrating, a soft silicon damper is installed between the glass panel and frame ridges. It allows the glass panel to move when pushed by the actuators while cushioning the impact on the device frame.<br><br>
  </li>
  <li><em>Small high-speed displacement.</em> Although the displacement of actuators is small (about 0.05 mm), its fast acceleration produces a very sharp tactile sensation. <br>
    <br>
  </li>
  <li><em>Silent operation.</em> Large audible noise defeats the purpose of tactile display. Noise can be sharply reduced by a) wave shape design and b) mechanical design, i.e. by preventing loose parts from rattling when the actuators move.<br>
    <br>
  </li>
  <li><em>Reliability.</em> Bending the fragile ceramic actuators more then 0.1 mm by pushing on the touch screen glass can damage them. Therefore, a stopper is placed under the actuators to prevent their excessive bending.</li>
</ul>
<div id="pjimage">
  <div align="center"><img src="tactile/smallscreen_structure.png" width="408" height="296"></div>
</div>
<div id="pjimagecap">
  <div align="center">Structure of tactile feedback apparatus embedded into the Sony Clie PDA.&nbsp;</div>
</div>

<p align="left">There are two basic directions for exploration of tactile feedback and touchscreen GUI interaction. First, we can investigate application specific tactile interfaces, e.g. enhancing drawing applications with tactile feedback. Second, we can investigate combination of tactile feedback with general-purpose GUI elements. Since our immediate objective is to introduce tactile feedback into generic mobile devices, we have chosen the latter.</p>
<p align="left">Interaction with touch screens is based on gestures. The gesture starts when the user touches the screen with a finger (or pen) and finishes when the user lifts it up from the screen. The figure below presents a basic gesture structure for touch screen interaction. Each component of the gesture can be augmented with a distinct tactile feeling and, therefore, we can classify all tactile feedback into five types: tactile feedback provided when the user starts a gesture by touching a GUI element on touch screen (T1), when the user then either drags (T2) or holds (T3) her pen/finger, and, finally, when the user lifts it off either inside (T4) or outside (T5) the GUI widget.</p>
<div id="pjimage">  
  <div align="center"><img src="tactile/gesture.png"></div>
</div>
<div id="pjimagecap">
  <div align="center">Structure of touch screen gesture.&nbsp;</div>
</div>

We augmented basic GUI elements with tactile feedback, including several variations of buttons, scroll bars and menus. The tactile feedback wavepatterns that were used are shown  below. These particular instances of tactile feedback were made primarily for prototyping and evaluation; certainly other tactile feelings might be more effective.

<div id="pjimage">  
  <div align="center"><img src="tactile/waveshapes.jpg" width="344" height="159" ></div>
</div>
<div id="pjimagecap">
  <div align="center">Tactile waveshapes that we used with GUI elements.&nbsp;</div>
</div>

<p align="left">We evaluated our prototypes in several informal usability studies, asking 10 colleagues to test our interfaces in audio, tactile and no feedback conditions. Tactile feedback was exceptionally well-received by our users who remarked how similar it felt to an mechanical switch. We also observed that tactile feedback was most effective when the GUI widgets needed to be held down or dragged on the screen. The combination of continuous gestures and tactile feedback resulted in a strong feeling of physicality in interaction. 
<p align="left">We also found tactile feedback effective in interacting with small GUI elements, as it provided fast and reliable feedback even when GUI element is obscured by a finger.
<p align="left">The design of our interface is presented in much more details in UIST 2003 paper [<a href="../e-library/2003/uist2003_tactilesmalldisplay.pdf">PDF</a>]. A number of products that incorporated our tactile interface were released on the market by Sony, please see <a href="../product/index.php">product descriptions</a> for more details. 
<div id="green_line">
</div>

<a name="pen" id="pen"></a> 

<div id="pjimage">
  <img src="tactile/vaio_tactile.jpg" width="450" height="314"><br>
  We embedded a tactile feedback apparatus in a Sony PDA touch screen<br>
  and enhanced its basic GUI elements with tactile feedback.<br>
</div>

<h2 align="left">Tactile Feedback for Pen Computing</h2>
<p align="left">Until recently pen-based devices were used mostly by prefessionals: engineers, artists and architects. Recently, however, the variety of devices that support pen input have grown with introduction of PDAs and tablet PCs. With further improvement of technology, the popularity of pen-based computing will continue to grow in the future.
<p align="left">We seek to improve the experience of using pen devices by augmenting them with tactile feedback. In our initial experiments we embedded TouchEngine tactile actuators directly into pen and provided feedback directly to the user finger (see our short SIGGRAPH presentation for more details [<a href="../e-library/2004/siggraph2004.pdf">PDF</a>]). The problem with this design is that the pen need wires to provide power to the actuators. Wireless solution would require embedding batteries and wireless receiver into pen which would increases its size and weight making it more significantly more difficult to use.
<p align="left">Therefore, in our second prototype we embedded actuators directly into the screen, similarly to <a href="#smallscreen">small screen tactile user interfaces</a> presented above. 
<p align="left">Four TouchEngine actuators were embedded into a stationary 15 inch LCD monitor of Sony VAIO LX personal computer (figure above) that hasd Wacom pen-input technology built into the display. We then enhanced 2D pen interaction interfaces with tactile feedback and explored three strategies for tactile interaction with pen computers: tactile <em>GUI</em>, tactile <em>information perception</em>, and tactile feedback for <em>active input</em>.

<div id="pjimage"> 
  <img src="tactile/pen1.png" width="450" height="148">
  Left: text selection was enhanced with tactile feedback;<br>
  Middle: 
  feeling visual textures and photographs;<br>
  Right: feeling chartacter motion.
</div>

<ul>
  <li><em align="left">GUI interaction.
    </em>
    We added tactile feedback to GUI elements, such as buttons, so that they would &quot;click&quot; when pushed, sliders, that provided a short tactile impulse each time the user scrolled a line, and text, where selecting a character was enhanced with a tactile click (see figure below). In informal evaluations, the users were very positive about tactile feedback. We observed that users strongly preferred tactile feedback when it was combined with an active gesture, e.g. dragging sliders or selecting text.<br>
  </li>
  <li>  <em>Feeling data</em>. Tactile display may allow to <em>feel</em> visual data similarly to how we can feel physical textures in the real world, e.g. feeling cracks in the photograph of a desert (see figure above). We also added tactile feedback to character animation, so that the user could feel the character motion; similar to how we can feel a pulse beating in a hand.
    <br>
    <br>
    We found, that increasing the complexity of textures seemed to reduce the effect of haptic feedback and it even made interaction more confusing. We hypothesize that with complex visual textures the users could not easily correlate the image and tactile feedback, particularly when they draw quickly and the latency of pen input was evident. Thus, spatial and temporal correlation between visual and haptic feedback in dynamic gestures must be explored in more depth. Techniques to cope with lag are also important.<br>
    <br>
  </li>
  <li><em>Tactile feedback for active pen input. </em>We added tactile feedback for drawing  operations by having a single tactile pulse produced each time the pen crossed a pixel (see figure below). The strength of the pulse was correlated with the pen pressure: the stronger pressure resulted in stronger tactile feedback. We also explored tactile feedback in vector style graphics manipulation, such as manipulating control points of Bezier curve. Indeed, in complex drawings the density of control points is often very high and tactile feedback might be useful for improving selection precision. Finally, we combined tactile feedback with constraints such as grids and alignments. In one example, the user would feel the underlying grid while manipulating a line's endpoint in snap-to-grid mode.<br>
      <br>
      Active input enhanced with tactile feedback was most appreciated by the users. In particular, haptic constraints were met with delight, as they felt similar to a pen hitting a physical groove or guide.</li>
  </ul>

<div id="pjimage">
  <img src="tactile/pen2.png" width="450" height="148"><br>
  Left: adding tactile feedback to drawing operation allows to feel pixels;<br>
  Middle: Tactile feedback was added to control handles;<br> 
  Right: The user could feel the when manipulating vector drawings. <br>
</div>

<p align="left">After refinement, we conducted experimental studies that investigated the effect of tactile feedback in pen tapping and drawing tasks. We designed experiments according to the<a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=30030"> ISO 9241 Part 9</a>. Two tasks were evaluated. First, in the <em>tapping task</em>, the subjects repeatedly tapped on strips of varying width separated by different distances. Second, in the <em>drawing/dragging</em> task, the subjects drew a line with a pen from a starting point to the target stripe of varying with.
<p align="left">We found that tactile feedback did not improve the <em>tapping </em>performance. We observed that in tapping task subjects often <em>hit</em> the target rather then touch it, hence the contact between the pen and screen was very short. Hence subjects sometimes failed to even notice tactile feedback.
<p align="left">Tactile feedback improved user performance in the<em> drawing task</em>. There was significant interaction between feedback, amplitude and target width; the effect of feedback was strongest for smaller targets. Assuming that the dragging falls under Fitt’s law, the bandwidth could be estimated as 5.9 and 4.8 bit/sec for tactile and no tactile conditions respectively (see figure below). As the difficulty of task increases the benefit of tactile feedback also increases.

<div id="pjimage">
  <div align="center"><img src="tactile/experiments.jpg" width="322" height="311"><br>
    Scatter plot of time versus Fitt's index of difficulty <br>
    with linear regression lines for different tactile conditions<br>
  </div>
</div>

<p align="left">The experimental results suggest that the combination of active gesture with tactile feedback yields significantly better results then for the simple tapping task. This is also supported by the survey of the users' subjective preferences. We believe that these tasks and conditions approximate a bulk of the interactions in pen computing, such as selecting targets of various sizes separated by differing distances, dragging icons and scroll bar handles, etc. Therefore, the results of the experiments can be generalized to wider range of traditional GUI applications. 
<p align="left">The detailes of the interaction design and experiments can be found in our CHI 2004 [<a href="../e-library/2004/CHI2004_pentactile.pdf">PDF</a>] and SIGGRAPH 2002 [<a href="../e-library/2002/siggraph2002_tactilepen.pdf">PDF</a>] publications. 
<p align="left">

<div id="green_line">
</div>

<p align="left"><h2><a name="publ" id="publ"></a>Publications.</h2>
<p class="indented"><span class="reference">Poupyrev, I., M. Okabe, and S. Maruyama. <strong>Haptic Feedback for Pen Computing: Directions and Strategies.</strong> Proceedings of CHI'2004. 2004: ACM: pp. 1309-1310 [<a href="../e-library/2004/CHI2004_pentactile.pdf">PDF</a>].</span></p>
<p class="indented"><span class="reference">Poupyrev, I., S. Maruyama, and J. Rekimoto. <strong>TouchEngine: A tactile display for handheld devices.</strong> Proceedings of CHI 2002, Extended Abstracts. 2002: ACM: pp. 644-645 [<a href="../e-library/2002/chi2002_touchengine.pdf">PDF</a>]</span></p>
<p class="indented"><span class="reference">Poupyrev, I. and S. Maruyama. <strong>Tactile interfaces for small touch screens.</strong> Proceedings of UIST. 2003: ACM: pp. 217-220 [<a href="../e-library/2003/uist2003_tactilesmalldisplay.pdf">PDF</a>].</span></p>
<p class="indented"><span class="reference">Poupyrev, I. and S. Maruyama. <strong>Drawing With Feeling: Designing Tactile Display for Pen.</strong> Proceedings of SIGGRAPH'2002, Technical Sketch. 2002: ACM: pp. 173 [<a href="../e-library/2002/siggraph2002_tactilepen.pdf">PDF</a>]</span></p>
<p class="indented"><span class="reference">Poupyrev, I., S. Maruyama, and J. Rekimoto. <strong>Ambient Touch: Designing tactile interfaces for handheld devices.</strong> Proceedings of UIST'2002. 2002: ACM: pp. 51-60 [<a href="../e-library/2002/uist2002_ambientouch.pdf">PDF</a>] </span></p>
<p class="indented">[<a href="../publications/index.php">other publications</a> ...]</p>

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
<p class="highl">You can see the <a href="tactile/microscopicview.jpg">microscopic view</a> of the early version of TouchEngine actuator that was used to check for productions defects.</p>

<p class="highl">Sony used TouchEngine in it's multifunctional <a href="../products/index.php#nav">RM-NX7000 remote controller</a> that was released in the USA in 2004. It was <em>first</em> consumer electronic device in the world which had touch-screen instrumented with tactile feedback.</p>

</div>

</div>
</body>
</html>
