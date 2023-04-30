<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/GLOSSARY</title>
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
				src: ["/res/audio/ambience/7.ogg"],
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
	<h2>Glossary <a href="/cdn-cgi/l/email-protection#3b4f484e50527b4842484f5e56484b5a585e1557525550">(missing something?)</a></h2>
	<h1>AAAR</h1><p>A System; "AAAR" (An Alternate Asynchronous Reality) is the first System.</p>
	<h1>Aurora</h1><p>The purest form of energy; it is used by Systems to create all objects.</p>
	<h1>Auroraic Echoing</h1><p>Resonation that all aurora structures produce.</p>
	<h1>EID</h1><p>Like a domain name to an IP, an EID links a short ID to a long soul ID.</p>
	<h1>eNdymioN</h1><p>A company behind many smaller Systems.</p>
	<h1>Experience</h1><p>The driving force of our consciousnesses, even between souls.</p>
	<h1>Halcyon</h1><p>One quarter of the Systemspatial year.</p>
	<h1>LFE</h1><p>A System; "LFE" is one of the largest and most influential Systems.</p>
	<h1>Life</h1><p>Originally intended to be a peaceful System without distractions, the System "Life" is one of the largest and most influential Systems.</p>
	<h1>Memory</h1><p>A piece of data saved in the soul and Experience.</p>
	<h1>RISEN</h1><p>The company behind Systemspace.</p>
	<h1>RISENII</h1><p>A RISEN member.</p>
	<h1>Soul</h1><p>An auroraic construct which binds body and Experience.</p>
	<h1>Soulshatter</h1><p>As a soul gets too much pressure, it shatters and returns to Aurora, destroying all memories and personality.</p>
	<h1>SYNAPSE</h1><p>The company with the largest search engine; it is also the company behind LFE.</p>
	<h1>Synapsian</h1><p>The official language of LFE and SYNAPSE.</p>
	<h1>System</h1><p>An auroraic construct made to be explored by users, thus allowing them to create good memories.</p>
	<h1>Systemspace</h1><p>An auroraic construct made to unite all Systems, thus allowing them access to Aurora.</p>
	<h1>TSUKI</h1><p>A collaboration between the companies RISEN, SYNAPSE and eNdymioN.</p>
	<h1>Tsuki (Representative)</h1><p>The sole human representing TSUKI in Life.</p>
</div><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>
