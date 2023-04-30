<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/STATUS</title>
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
		function toFixed(x) {
			if (Math.abs(x) < 1.0) {
				var e = parseInt(x.toString().split("e-")[1]);
				if (e) {
					x *= Math.pow(10,e-1);
					x = "0." + (new Array(e)).join("0") + x.toString().substring(2);
					}
					} else {
				var e = parseInt(x.toString().split("+")[1]);
				if (e > 20) {
				e -= 20;
				x /= Math.pow(10,e);
				x += (new Array(e+1)).join("0");
				}
				}
			return x;
		}

		document.addEventListener("DOMContentLoaded", function(event) { 
			var music = new Howl({
				src: ["/res/audio/bgm/status.ogg"],
				loop: true,
				volume: 0.5
			});
			
			window.addEventListener("load", function(event) {
				music.play();
			});

			UpdateClock();
			GetRegistrants();
			UpdateClock2();

			setInterval(function(){ UpdateClock(); }, 1);

			setInterval(function(){
				GetRegistrants();
			}, 1000);

			setInterval(function(){
				UpdateClock2();
			}, 1);
		});

		function UpdateClock() {
			var now = new Date().getTime();
			var countDownDate = 1498924800000;

			// Find the distance between now an the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			var ms = Math.floor((distance % (1000)));

			if (minutes < 10) {
				minutes = "0" + minutes;
			}

			if (seconds < 10) {
				seconds = "0" + seconds;
			}

			if (ms < 100) {
				ms = "0" + ms;
			}

			if (ms < 10) {
				ms = "0" + ms;
			}

			// Display the result in the element with id="demo"
			if (distance >= 0) {
				$("#countdown").html(days + "d " + hours + ":" + minutes + ":" + seconds + "<span id=ms>" + ms + "</span>");
			} else {
          		$("#countdown").text("Waiting...");
            }
        
		}

		var new_time = 0;
     	var rec = false;
				
		function GetRegistrants() {
			var registrants = 4969;
			var original_time = 1498921200;
			var slots_left = 31000 - registrants;
			new_time = original_time + 1728 * slots_left;
         	rec = true;
		}

		function UpdateClock2() {
			var now = new Date().getTime();
			var countDownDate = new Date(new_time * 1000).getTime();

			// Find the distance between now an the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			var ms = Math.floor((distance % (1000)));

			if (minutes < 10) {
				minutes = "0" + minutes;
			}

			if (seconds < 10) {
				seconds = "0" + seconds;
			}

			if (ms < 100) {
				ms = "0" + ms;
			}

			if (ms < 10) {
				ms = "0" + ms;
			}

			if (distance >= 0 && rec) {
				$("#countdown2").html(days + "d " + hours + ":" + minutes + ":" + seconds + "<span id=ms>" + ms + "</span>");
				$("#left").html(String(distance * 1185611831116156 / Math.pow(2, 64)).replace(".", "<span class=decimal>.") + "</span><span class=append>k.nHa</span>");
			} else {
          		$("#countdown2").text("Waiting...");
            }
        
		}
	</script>
	<style>
		@font-face {
			font-family: CNT;
			src: url(/res/font/countdown.ttf);
		}

		.layer {
			padding: 4em;
		}

		#slots {
			background-image: url(/res/img/status/new/shootingstars.png);
			background-size: cover;
			background-position: center;
		}

		#linked {
			background-image: url(/res/img/status/new/cables.png);
			background-size: cover;
			background-position: center;
		}

		#aurora {
			background-image: url(/res/img/status/new/auroraleft.png);
			background-size: cover;
			background-position: center;
		}

		#usage {
			background-image: url(/res/img/status/new/usage.png);
			background-size: cover;
			background-position: center;
		}

		#gate {
			background-image: url(/res/img/status/new/gates.png);
			background-size: cover;
			background-position: center;
		}

		#recruit {
			background-image: url(/res/img/status/new/recruit.png);
			background-size: cover;
			background-position: center;
		}

		#destruction {
			background-image: url(/res/img/status/new/destruction.png);
			background-size: cover;
			background-position: center;
		}

		h1 {
			text-align: center;
			font-family: CNT;
			font-size: 5vw;
			text-shadow: 0px 8px #AAA, 0px 8px 32px #FFF;
			line-height: 1.5;
			margin: 0;
		}

		h2 {
			text-align: center;
			font-family: Heading;
			font-size: 2.5vw;
			margin: 0;
		}

		h4 {
			text-align: center;
			font-family: Heading;
			font-size: 2vw;
			margin: 0;
		}

		#ms {
			font-family: Heading;
			vertical-align: center;
			font-size: 0.6em;
		}

		.append {
			font-family: Heading;
			vertical-align: center;
			font-size: 0.3em;
		}

		.decimal {
			font-family: CNT;
			vertical-align: center;
			font-size: 0.7em;
			width: 42vw;
			display: inline-block;
			text-align: left;
		}

		.extralarge {
			font-size: 15vw;
			text-shadow: 0px 32px #AAA, 0px 32px 32px #FFF, 0px 32px 256px #FFF;
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

	<div class="layer" id="slots">
		<h1 class="extralarge">4969</h1>
		<h4>registrants</h4>
		<h2>122 cancelled registrations</h2>
		<h2>0 new registrations in queue</h2>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="aurora">
		<h2>PROJECT AURORA REMAINING</h2>
		<h1 id="left"></h1>
		<h4>This is an estimate</h4>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="linked">
		<h2>LINKED</h2>
		<h4>Maximum time until unlink</h4>
		<h1 id="countdown2"></h1>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="usage">
		<h2>AURORA USAGE</h2>
		<h1>???<span class=append> nhA/sss</span></h1>
		<h4>This is an estimate</h4>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="gate">
		<h2>GATES OPEN</h2>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="recruit">
		<h2>MISSION 1: TRANSFER LIFE REGISTRANTS</h2>
		<h1>ON COURSE</h1>
		<h4>now RECRUITING</h4>
	</div>
	<div class="seperate"></div>
	<div class="layer" id="destruction">
		<h2>MISSION 2: DESTROY LIFE AFTER UNLINK</h2>
		<h1>ON COURSE</h1>
		<h4>now WAITING FOR UNLINK</h4>
	</div>
	<div class="seperator"></div>
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
</body>
</html>
