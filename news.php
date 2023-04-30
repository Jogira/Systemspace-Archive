<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/NEWS</title>
	<link rel="apple-touch-icon" sizes="180x180" href="/res/img/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/res/img/icons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/res/img/icons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/res/manifest.json">
	<link rel="mask-icon" href="/res/img/icons/safari-pinned-tab.svg" color="#000000">
	<link rel="shortcut icon" href="/res/img/icons/favicon.ico">
	<meta name="msapplication-config" content="/res/browserconfig.xml">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#000000">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/res/css/reset.css"><link rel="stylesheet" href="/res/css/common.css"><link rel="stylesheet" href="/res/css/scanlines.css"><script src="/res/js/jquery.js"></script><script src="/res/js/howler.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 
			var noise = new Howl({
				src: ["/res/audio/ambience/10.ogg"],
				loop: true,
				volume: 0.5
			});
			window.addEventListener("load", function(event) {
				noise.play();
			});
		});
	</script>

	<style>
		.blogpane {
			background-color: #000;
			padding: 0.5em;
			margin-bottom: 1em;
		}
		
		.blogpane h1 {
			text-align: center;
		}

		.blogpane h2 {
			text-align: center;
			font-size: 8px;
			font-family: "Paragraph";
			margin-top: -1.5em;
		}

		.padded {
			background-color: #000;
			background-image: url(/res/img/bg/index.png);
			background-attachment: fixed;
			background-position: center;
		}
	</style>
</head>
<body>
	<div id="contentloader">
	<img id="loadtsuki" src="/res/img/loader/loadtsuki.png"/>
	<img id="loadspin" src="/res/img/loader/loadspin.png"/>
</div>
<style>
	#contentloader {
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background-color: #000;
		z-index: 10000;
		transition: 0.2s;
	}

	#loadtsuki {
		position: absolute;
		left: calc(50% - 48px);
		top: calc(50% - 48px);
	}

	#loadspin {
		position: absolute;
		left: calc(50% - 46px);
		top: calc(50% - 47px);
		animation: LoaderSpin 2s infinite linear;
	}

	@keyframes LoaderSpin {
		0% {
			transform: rotate(0deg);
		}
		100% {
			transform: rotate(360deg);
		}
	}

	.destroyedloader {
		opacity: 0;
		pointer-events: none;
		transition: 0.5s !important;	
	}

	.destroyedloader #loadtsuki {
		top: calc(50% - 100px);
		transition: 0.5s ease-in !important;
	}

	.destroyedloader #loadspin {
		top: calc(50% - 100px);
		transition: 0.5s ease-in !important;
	}
</style>
<script>
	window.addEventListener("load", function(event) {
		document.getElementById("contentloader").className = "destroyedloader";
		document.getElementById("loadspin").src = "/res/img/loader/loadfinish.png";
	});
	
	window.onbeforeunload = function() {
		document.getElementById("contentloader").classList.remove("destroyedloader");
		document.getElementById("loadspin").src = "/res/img/loader/loadspin.png";
	}
</script>
<div id="header">
	<div id="headerbar">
		<a href="/status.php"><img id="headerstatus" src="/res/img/headerbar/status-ok.png"></a>		<img id="headerfade_left" src="/res/img/headerbar/fade-left.png">
		<marquee truespeed scrolldelay="30" scrollamount="3" id="headernews">
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p>Welcome to the TSUKI project's homepage</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p style="color: lime">Registrations open</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p style="color: lime">Gates open</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p>4969 users registered</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p>Latest news: &quot;Object assignment&quot;</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
			<p>Life is linked.</p>
			<img class="newssep" src="/res/img/headerbar/sep.png">
		</marquee>
	</div>
	<a href="/"><img id="knob" src="/res/img/headerbar/knobs/tsuki_knob.png"/></a>
	<a href="https://systemspace.link/"><img id="knob4" src="/res/img/headerbar/knobs/officialknob.png"/></a>
	<a href="/login.php"><img id="knob5" src="/res/img/headerbar/knobs/loginknob.png"/></a>
	<a href="/preferences.php"><img id="knob2" src="/res/img/headerbar/knobs/prefsknob.png"/></a>
</div>
<style>
	#header {
		position: relative;
		z-index: 1;
	}

	#headerbar {
		position: fixed;
		width: 100%;
		left: 0;
		top: 0;
		height: 20px;
		background-color: #000;
		box-shadow: 0px 1px #FFF, 0px 2px #000;
	}

	#headerstatus {
		position: fixed;
		left: 0;
		top: 0;
		z-index: 1;
	}

	#headerfade_left {
		position: fixed;
		left: 150px;
		top: 0px;
		z-index: 1;
	}

	#headernews {
		width: 100%;
		font-family: Heading;
		font-size: 16px;
		letter-spacing: -4px;
	}

	#headernews p {
		display: inline;
		position: relative;
		top: -2px;
	}

	#knob {
		position: fixed;
		left: 0;
		top: 20px;
	}

	#knob2 {
		position: fixed;
		right: 0;
		top: 20px;
	}

	#knob3 {
		position: fixed;
		right: 100px;
		top: 20px;
	}

	#knob4 {
		position: fixed;
		left: 200px;
		top: 20px;
	}

	#knob5 {
		position: fixed;
		left: 350px;
		top: 20px;
	}

	#knob6 {
		position: fixed;
		left: 460px;
		top: 20px;
	}

	#knob7 {
		position: fixed;
		left: 492px;
		top: 20px;
	}
</style>
<div id="index">
		<div class="overload">
			<img src="/res/img/pageindex/logos/tsuki.png"/><img src="/res/img/pageindex/right.png"/><div class="indexlist"><span><a href="/index.php">HOME</a> | <a href="/status.php">STATUS</a> | <a href="/calculator.php">CALCULATOR</a> | <a href="/register.php">REGISTER</a> | <a href="/listing.php">LISTING</a> | <a href="/glossary.php">GLOSSARY</a> | <a href="/faq.php">FAQ</a> | <a href="/news.php">NEWS</a> | <a href="/dataverses/">DATAVERSES</a> | <a href="/dataverses/Compendium/">COMPENDIUM</a> | <a href="/music.php">MUSIC BOX</a> | <a href="/representative.php">REPRESENTATIVE</a></span></div><br>
			<img src="/res/img/pageindex/logos/synapse.png"/><img src="/res/img/pageindex/right.png"/><div class="indexlist"><span><a href="/synapse/eot.php">EoT</a> | <a href="/synapse/explore.php" class="overno">EXPLORE LFE</a> | <a href="/synapse/about.php">ABOUT</a></span></div><br>
			<img src="/res/img/pageindex/logos/risen.png"/><img src="/res/img/pageindex/right.png"/><div class="indexlist"><span><a href="/risen/systemspace.php" class="overno">SYSTEMSPACE</a> | <a href="/risen/goal.php">OUR GOAL</a> | <a href="/risen/eot.php">EoT</a> | <a href="/risen/about.php">ABOUT</a></span></div><br>
			<img src="/res/img/pageindex/logos/endymion.png"/><img src="/res/img/pageindex/right.png"/><div class="indexlist"><span><a href="/endymion/role.php" class="overno">OUR ROLE</a> | <a href="/endymion/eot.php">EoT</a> | <a href="/endymion/about.php">ABOUT</a></span></div><br>
			<img src="/res/img/pageindex/logos/kahgy.png"/><img src="/res/img/pageindex/right.png"/><div class="indexlist"><span><a href="/representative.php">TSUKIREP</a> | <a href="/kahgy/ghendyts.php" class="overno">GHENDYTS</a> | <a href="/kahgy/eot.php">EoT</a> | <a href="/kahgy/about.php">ABOUT</a></span></div>
			<center><a href="/unlock.php"><img src="/res/img/pageindex/more.png"/></a></center>
		</div>
	</div>
<div class="seperator"></div><div class="padded seethru">
			<br><br>
	<div class="pane blogpane">
		<h1 class="post-title">Object assignment</h1>
		<h2 class="post-date">17.06.17 from RISEN</h2>
		<p>To help speed up your transfer, please provide us with some info as well as an object which will help us:<br><br><a href="ident.php" style="color: yellow">Click here</a></p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Pre-Gate Survey</h1>
		<h2 class="post-date">11.06.17 from tsukiRep</h2>
		<p>We have a new survey, please fill it out for us! :)<br><br><a href="survey-pre-july-1.php" style="color:red">View survey</a></p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Compendium now available!</h1>
		<h2 class="post-date">10.06.17 from tsukiRep</h2>
		<p>You may now view the largest source of Systemspace information to Life here:<br><br><a href="dataverses/Compendium" style="color:yellow">Visit it here</a>
		<br><br>Many thanks to 655 and 1336!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">File Transfers</h1>
		<h2 class="post-date">04.06.17 from tsukiRep</h2>
		<p>You may now upload files to be transferred to LFE - see the Files knob!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Advertisement survey</h1>
		<h2 class="post-date">15.05.17 from tsukiRep</h2>
		<p>We might advertise on 8chan, click here to vote: https://systemspace.link/survey.php</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">A new era</h1>
		<h2 class="post-date">10.05.17 from tsukiRep</h2>
		<p>eNdymion has decided that, to help the project, they will unlink one of their own developer Systems. This has given us a lot more Aurora to play with!
		<br><br>The Aurora can be used either as slots for users (28K) or time (560 days). You can calculate any balance on the calculator.
		<br><br>I hope you'll enjoy this new change!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">3000 slots open</h1>
		<h2 class="post-date">01.05.17 from Tsuki Rep</h2>
		<p>Sorry for the wait, the floodgates are now open! We have 3000 slots for registrants now.</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">1500 users hit</h1>
		<h2 class="post-date">23.04.17 from Tsuki Rep</h2>
		<p>We have hit our cap of 1500 users. We will be expanding to 3000 soon, please stay tuned.
		<br><br>Due to the influx of new users we have to make sure that everyone is over the age of 13. Aside from law issues, this is also to ensure a safe travel.</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">1000 registrants!</h1>
		<h2 class="post-date">12.03.17 from Tsuki Rep</h2>
		<p>We have hit 1000 registrants!<br><br>We never expected to hit this many registrants, thanks everyone for being with us!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">1500 Slots are available</h1>
		<h2 class="post-date">06.03.17 from RISEN</h2>
		<p>We've bumped the slot count up to 1.5K, should keep yall busy for a little bit! Enjoy!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Another upgrade expected soon</h1>
		<h2 class="post-date">06.03.17 from Tsuki Rep</h2>
		<p>Wow, we hit 800 fast. I guess it's time for me to upgrade to the big 1000.</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">800 Slots are now available</h1>
		<h2 class="post-date">02.03.17 from RISEN</h2>
		<p>We have now increased the amount of open slots by another 300. This moves the dates of failure/assert if unlinked a bit more, but we can go up to 3000 if needed. Any further and we'll need to change the date of unlinking (currently Jul 1st).
		<br><br>Enjoy!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">We are currently lobbying for 800 users</h1>
		<h2 class="post-date">02.03.17 from Tsuki Rep</h2>
		<p>We hit our limit of 500 again. We really weren't expecting this, so I have to lobby to get more people across, which will once again move the time of failure/assert over. Please stay tuned.</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Imageboards are now live!</h1>
		<h2 class="post-date">26.02.17 from Tsuki Rep</h2>
		<p>The imageboards are now live at <a href="https://boards.systemspace.link/">boards.systemspace.link</a>!<br><br>Enjoy!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">500 slots are available</h1>
		<h2 class="post-date">20.02.17 from RISEN</h2>
		<p>The project has been allowed 300 more slots for registrants, increasing the total from 200 to 500. Enjoy!</p>
	</div>
	<div class="pane blogpane">
		<h1 class="post-title">Welcome!</h1>
		<h2 class="post-date">18.02.17 from Tsuki Rep</h2>
		<p>Welcome to systemspace.link!
		<br><br>This is the blog section, where we will inform you of the latest updates and advancements.
		<br><br>Please look forward to more!</p>
	</div>
</div></body>
</html>
