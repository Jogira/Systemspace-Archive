<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/MUSIC</title>
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
			var sound = new Howl({
				src: ["/res/audio/bgm/music.wav"],
				loop: true,
				volume: 1
			});

			window.addEventListener("load", function(event) {
				sound.play();
			});

			$(".button").click(function(){

				if (typeof loop !== 'undefined' && loop !== null) {
				    loop.stop();
				} else {
					sound.stop();
				}

				if (!$(this).attr("data-loop")) {

					sound = new Howl({
						src: [$(this).attr("data-src")],
						loop: true,
						volume: 1
					});

					sound.play();

				} else {

					sound = new Howl({
						src: [$(this).attr("data-src")],
						loop: false,
						volume: 1
					});

					loop = new Howl({
						src: [$(this).attr("data-loop")],
						loop: true,
						volume: 1
					});

					sound.play();

					sound.once("end", function(){
						loop.play();
					});
				}

				$("#nowplaying h2").text($(this).attr("data-title"));
				$("#nowplaying h5").text($(this).attr("data-from"));

			});
		});
	</script>
	<style>
		.box {
			width: 90vw;
			margin-left: 3vw;
			background-color: #000;
			border: 1px solid #FFF;
			box-shadow: 3px 3px #FFF;
			padding: 2vw;
			margin-bottom: 1em;
		}

		.button {
			width: 6vw;
			height: 4vw;
			padding-top: 2vw;
			margin: 0.2em 0px;
			font-size: 2vw;
			display: inline-block;
			text-align: center;
			vertical-align: center;
			cursor: pointer;
			position: relative;
			top: 0px;;
			background-color: #000;
			border: 1px solid #FFF;
			box-shadow: 0px 3px #FFF;
		}

		.button:hover {
			top: -2px;
			box-shadow: 0px 5px #FFF;
		}

		.button:active {
			top: 2px;
			color: #000;
			background-color: #FFF;
			box-shadow: 0px 1px #FFF;
		}

		.button.big {
			width: 15vw;
			margin: 0.2em 0px;
		}

		.button.mega {
			width: 100%;
		}

		h2 {
			margin: 0;
		}

		#nowplaying {
			color: #C0FF96;
			background-color: #2F4024;
			padding: 1em;
			box-shadow: inset 0px 2px 16px #000;
		}

		.lack {
			border: 1px solid #F00;
			box-shadow: 0px 3px #F00;
			color: #F00;
		}

		.lack:hover {
			border: 1px solid #F00;
			box-shadow: 0px 3px #F00;
			color: #F00;
			box-shadow: 0px 5px #F00;
		}
		.lack:active {
			background-color: #F00;
			color:#000;
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
	<div class="seperator"></div>
	<center><h1>Music box</h1></center>
	<div id="nowplaying">
		<center>
			<h4>Now playing</h4>
			<h2>---</h2>
			<h5>click a button below to play</h5>
		</center>
	</div>
	<br><br>
	<div class="box" id="ambience">
		<h2>/tsuki/ sings</h2>
		<a href="https://www.youtube.com/watch?v=n5wV5s-ZfYc"><div class="button mega">Duvet</div></a>
	</div>
	<div class="box" id="ambience">
		<h2>Ambience</h2>
		<div class="button" data-title="Ambience 1" data-from="from random files" data-src="/res/audio/ambience/1.ogg">1</div>
		<div class="button" data-title="Ambience 2" data-from="from random files" data-src="/res/audio/ambience/2.ogg">2</div>
		<div class="button" data-title="Ambience 3" data-from="from random files" data-src="/res/audio/ambience/3.ogg">3</div>
		<div class="button" data-title="Ambience 4" data-from="from random files" data-src="/res/audio/ambience/4.ogg">4</div>
		<div class="button" data-title="Ambience 5" data-from="from random files" data-src="/res/audio/ambience/5.ogg">5</div>
		<div class="button" data-title="Ambience 6" data-from="from random files" data-src="/res/audio/ambience/6.ogg">6</div>
		<div class="button" data-title="Ambience 7" data-from="from random files" data-src="/res/audio/ambience/7.ogg">7</div>
		<div class="button" data-title="Ambience 8" data-from="from random files" data-src="/res/audio/ambience/8.ogg">8</div>
		<div class="button" data-title="Ambience 9" data-from="from random files" data-src="/res/audio/ambience/9.ogg">9</div>
		<div class="button" data-title="Ambience 10" data-from="from random files" data-src="/res/audio/ambience/10.ogg">10</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Dataverse ambience</h2>
		<div class="button" data-title="Dataverse ambience 1" data-from="from Overwatch" data-src="/res/audio/ambience/d1.ogg">1</div>
		<div class="button" data-title="Dataverse ambience 2" data-from="from Overwatch" data-src="/res/audio/ambience/d2.ogg">2</div>
		<div class="button" data-title="Dataverse ambience 3" data-from="from Overwatch" data-src="/res/audio/ambience/d3.ogg">3</div>
		<div class="button" data-title="Dataverse ambience 4" data-from="from Overwatch" data-src="/res/audio/ambience/d4.ogg">4</div>
		<div class="button" data-title="Dataverse ambience 5" data-from="from Overwatch" data-src="/res/audio/ambience/d5.ogg">5</div>
		<div class="button" data-title="Dataverse ambience 6" data-from="from Overwatch" data-src="/res/audio/ambience/d6.ogg">6</div>
		<div class="button" data-title="Dataverse ambience 7" data-from="from Overwatch" data-src="/res/audio/ambience/d7.ogg">7</div>
		<div class="button" data-title="Dataverse ambience 8" data-from="from Overwatch" data-src="/res/audio/ambience/d8.ogg">8</div>
		<div class="button" data-title="Dataverse ambience 9" data-from="from Overwatch" data-src="/res/audio/ambience/d9.ogg">9</div>
		<div class="button" data-title="Dataverse ambience 10" data-from="from Overwatch" data-src="/res/audio/ambience/d10.ogg">10</div>
		<div class="button" data-title="Dataverse ambience 11" data-from="from Overwatch" data-src="/res/audio/ambience/d11.ogg">11</div>
		<div class="button" data-title="Dataverse ambience 12" data-from="from Overwatch" data-src="/res/audio/ambience/d12.ogg">12</div>
		<div class="button lack" data-title="Connection" data-from="from Overwatch" data-src="/res/audio/bgm/connection.mp3">CONN</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Error pages</h2>
		<div class="button" data-title="403" data-from="from Yume Nikki" data-src="/res/audio/bgm/403.wav">403</div>
		<div class="button" data-title="404" data-from="from Drax" data-src="/res/audio/bgm/404.ogg">404</div>
		<div class="button lack" data-title="500" data-from="from Bejeweled 2" data-src="/res/audio/bgm/error.wav">500</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Main pages</h2>
		<div class="button big" data-title="Home" data-from="by Camellia" data-src="/res/audio/bgm/superbgm.ogg" data-clicked="0">Home</div>
		<div class="button big" data-title="Home Old" data-from="by Camellia" data-src="/res/audio/bgm/home.ogg">Home Old</div>
		<div class="button big" data-title="Home Alt" data-from="by Camellia" data-src="/res/audio/bgm/torhome.ogg">Home Alt</div>
		<div class="button big" data-title="Status" data-from="from Bejeweled Twist" data-src="/res/audio/bgm/status.ogg">Status</div>
		<div class="button big" data-title="Login" data-from="from Event[0]" data-src="/res/audio/bgm/login-start.ogg" data-loop="login-loop.ogg">Login</div>
		<div class="button big" data-title="Compendium" data-from="from Bejeweled 3" data-src="/res/audio/bgm/compendium.ogg">Compendium</div>
		<div class="button big" data-title="Register" data-from="from Mabinogi" data-src="/res/audio/bgm/register.ogg">Register</div>
		<div class="button big" data-title="Menu" data-from="from Hyperballoid 2" data-src="/res/audio/bgm/menu.ogg">Menu</div>
		<div class="button big" data-title="Warning" data-from="by Camellia" data-src="/res/audio/bgm/exode.ogg">Warning</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Login-walled pages</h2>
		<div class="button big" data-title="Member" data-from="from Yume Nikki" data-src="/res/audio/bgm/member.wav" data-clicked="0">Member</div>
		<div class="button big" data-title="Choice" data-from="from Bejeweled 2" data-src="/res/audio/bgm/choice.ogg" data-clicked="0">Choice</div>
		<div class="button big" data-title="Ident" data-from="by Jake Chudnow" data-src="/res/audio/bgm/ident.ogg" data-clicked="0">Ident</div>
		<div class="button big" data-title="Belief" data-from="from Bejeweled 2" data-src="/res/audio/bgm/belief-intro.ogg" data-loop="/res/audio/bgm/belief-loop.ogg" data-clicked="0">Belief</div>
		<div class="button big" data-title="Unregister" data-from="from Yume Nikki" data-src="/res/audio/bgm/delete.wav">Unregister</div>
		<br>
		<div class="button big" data-title="Files" data-from="from Yume Nikki" data-src="/res/audio/bgm/files.wav" data-clicked="0">Files</div>
		<div class="button big" data-title="Upgrade" data-from="from Yume Nikki" data-src="/res/audio/bgm/upgrade.wav">Upgrade</div>
		<div class="button big" data-title="Order" data-from="from Bejeweled 2" data-src="/res/audio/bgm/order.ogg">Order</div>
		<div class="button big" data-title="Thank You" data-from="from Yume Nikki" data-src="/res/audio/bgm/thankyou.wav">Thank You</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Chat countdown</h2>
		<div class="button" data-title="Something 1" data-from="from random files" data-src="/res/audio/bgm/something.ogg" data-clicked="0">1</div>
		<div class="button" data-title="Something 2" data-from="from random files" data-src="/res/audio/bgm/something2.ogg" data-clicked="0">2</div>
		<div class="button" data-title="Something 3" data-from="from random files" data-src="/res/audio/bgm/something3.ogg" data-clicked="0">3</div>
		<div class="button" data-title="Something 4" data-from="from random files" data-src="/res/audio/bgm/something4.ogg" data-clicked="0">4</div>
		<div class="button" data-title="Something 5" data-from="from random files" data-src="/res/audio/bgm/start-something.ogg" data-loop="/res/audio/bgm/loop-something.ogg" data-clicked="0">5</div>
	</div>
	<div class="box" id="dataverses">
		<h2>Miscellaneous</h2>
		<div class="button big" data-title="Admin" data-from="from random files" data-src="/res/audio/bgm/admin.ogg" data-clicked="0">Admin</div>
		<div class="button big" data-title="Thank You" data-from="from random files" data-src="/res/audio/bgm/koronba-intro.ogg" data-loop="/res/audio/bgm/koronba.ogg">Thank You</div>
		<br>
		<div class="button big" data-title="Vsauce" data-from="by Jake Chudnow" data-src="/res/audio/bgm/vsauce.ogg" data-clicked="0">Vsauce</div>
		<div class="button big" data-title="Bel-Air" data-from="from random files" data-src="/res/audio/bgm/belair.ogg" data-clicked="0">Bel-Air</div>
		<div class="button big" data-title="NAZI" data-from="from random files" data-src="/res/audio/bgm/nazi.ogg" data-clicked="0">NAZI</div>
	</div>
	<br><br><br>
</body>
</html>
