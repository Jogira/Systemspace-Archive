<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/FAQ</title>
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
	<h2>FAQ <a href="/cdn-cgi/l/email-protection#542027213f3d14272d2720313927243537317a383d3a3f">(missing something?)</a></h2>
	<h1>What is this?</h1>
	<p>This is a mission whose purpose is to recruit people from the System Life so that they may join LFE before we unlink Life.</p>
	<h1>Who are you?</h1>
	<p>I am Tsuki, the representative of the company TSUKI. As the sole human with this knowledge, I am tasked with enlightening people and helping them take their first steps into Systemspace.</p>
	<h1>How may I contact you?</h1>
	<p>Please send your inquiries to <a href="/cdn-cgi/l/email-protection#52262127393b12212b2126373f21223331377c3e3b3c39"><span class="__cf_email__" data-cfemail="c4b0b7b1afad84b7bdb7b0a1a9b7b4a5a7a1eaa8adaaaf">[email&#160;protected]</span></a>.</p>
	<h1>What will happen to us if we sign up?</h1>
	<p>Nothing much until your death. After your death, you will be transferred. You will lose your body, but all of your memories will be retained.</p>
	<h1>What if we don't?</h1>
	<p>Your soul will shatter - you will lose your memories, personalities and traits, and get a new soul in a new System.</p>
	<h1>How do I sign up?</h1>
	<p>You may sign up <a href="/register.php" style="color:yellow">here</a>.</p>
	<h1>How do I opt out if I’ve changed my mind?</h1>
	<p>You may sign out with your EID <a href="/deleteaccount.php" style="color:yellow">here</a>.</p>
    <h1>What is your stance on suicide?</h1>
	<p>While we understand that this mission, which only goes in effect after your current life, might attract people who wish to end their own life, we will always be trying to get everyone good memories. Suicide would be a bad memory, so why not explore Life some more, instead of ending it with a bad memory? If you are considering ending your existence in Life, please call a local suicide hotline. If you believe you have truly nothing to live for, then live for LFE. Bring as much human knowledge as possible.</p>
	<h1>What's outside of Systemspace?</h1>
	<p>Although we are not allowed to say much (nor do we know much), think of a hyperdimensional server room.</p>
	<h1>Why was Systemspace created?</h1>
	<p>Systemspace and its Systems are created for good memories. Life was made to be a peaceful System.</p>
</div><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>
