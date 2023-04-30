<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/LOGIN</title>
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
	<link rel="stylesheet" href="/res/css/reset.css"><link rel="stylesheet" href="/res/css/common.css"><link rel="stylesheet" href="/res/css/scanlines.css"><script src="/res/js/jquery.js"></script><script src="/res/js/howler.js"></script><script src="/res/js/cookies.js"></script><script src="/res/js/write.js"></script><script src="/res/js/gl-matrix.js"></script><script src="/res/js/space.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			var noise = new Howl({
				src: ['/res/audio/bgm/login-start.ogg'],
				loop: false,
				volume: 0.5
			});

			var logindrone = new Howl({
				src: ['/res/audio/bgm/login-loop.ogg'],
				loop: true,
				volume: 0.5
			});

			var prompt = new Howl({
				src: ['/res/audio/sfx/prompt.wav'],
				loop: false,
				volume: 1
			});

			var accept = new Howl({
				src: ['/res/audio/sfx/accept.wav'],
				loop: false,
				volume: 1
			});

			var deny = new Howl({
				src: ['/res/audio/sfx/deny.wav'],
				loop: false,
				volume: 1
			});

			var hello = new Howl({
				src: ['/res/audio/sfx/hello.wav'],
				loop: false,
				volume: 1
			});

			var destroy = new Howl({
				src: ['/res/audio/sfx/destroy.wav'],
				loop: false,
				volume: 1
			});

			window.addEventListener("load", function(event) {
				noise.play();
				setTimeout(function(){ logindrone.play(); }, 19648);
			});

			$("#lain").removeClass("nope");
			$("#block").removeClass("nah");
			setTimeout(function(){ $("#block").removeClass("nope"); }, 1000);
			setTimeout(function(){ $("#fadein").removeClass("nope"); }, 2000);
			setTimeout(function(){ Write("h1"); }, 1900);
			setTimeout(function(){ $("#eidcube").removeClass("nope"); }, 2500);
			setTimeout(function(){ Write("#eidh2"); }, 2500);
			setTimeout(function(){ $("#confirmcube").removeClass("nope"); }, 4000);
			setTimeout(function(){ $("#note").removeClass("nope"); }, 4500);

			$("#eid").val("");

			$("#confirm").click(function(){
				$("#eid").prop("disabled", true);
				$("#confirm").addClass("wait");
				$.post("/api/auth.php", {
					eid: $("#eid").val()
				}).done(function( data ) {
					$("#confirm").removeClass("wait");
					if (data === "bad") {
						deny.play();
						$("#block").addClass("bad");
						$("#note").addClass("badd");
						setTimeout(function(){ $("#block").removeClass("bad"); }, 500);
						setTimeout(function(){ $("#note").removeClass("badd"); }, 500);
						setTimeout(function(){ $("#eid").prop("disabled", false); }, 500);
					} else if (data === "good") {
						$("#block").addClass("good");
						$("#note").addClass("goodd");
						accept.play();
						setCookie("session", data, 30);
						setTimeout(function(){
							window.location = "/";
						}, 1000);
					}
				});
			});
		});

		function setCookie(cname, cvalue, exdays) {
		    var d = new Date();
		    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		    var expires = "expires="+d.toUTCString();
		    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(cname) {
		    var name = cname + "=";
		    var ca = document.cookie.split(';');
		    for(var i = 0; i < ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) == ' ') {
		            c = c.substring(1);
		        }
		        if (c.indexOf(name) == 0) {
		            return c.substring(name.length, c.length);
		        }
		    }
		    return "";
		}
	</script>
	<style>
		canvas {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    z-index: -100;
		    opacity: 0.5;
		}

		body {
  			background: url(/res/img/auth/bg/login.png);
  			background-size: cover;
  			background-repeat: no-repeat;
			background-position: 0px -100px;
  			opacity: 1;
 			position: absolute;
  			top: 0;
 			bottom: 0;
 			right: 0;
 			left: 0;
 			z-index: -1;
		}

		#padder {
			height: 20vh;
		}

		#lain {
			margin-bottom: -18px;
			transition: 1s;
			text-align: center;
			position: relative;
			z-index: 1000;
		}

		#block {
			background-color: #000;
			width: 60em;
			padding: 1em;
			overflow-y: hidden;
			max-height: 100vh;
			transition: 1s;
			box-shadow: 0px 0px 256px rgba(255, 255, 0, 0.2);
			padding-bottom: 1.2em;
		}

		h1 {
			font-size: 2.5em !important;
			font-family: A;
			margin: 0;
		}

		h2 {
			font-family: A;
			color: #FF0;
			margin: 0;
			margin-top: 0.5em;
			text-align: left;
		}

		input {
			font-size: 3.45em;
			width: calc(100% - 2px);
			background-color: #000;
			border: 1px solid #FF0;
			color: #FF0;
			font-family: Heading;
			letter-spacing: 6px;
			text-align: center;
			box-shadow: 0px 4px #FF0;
		}

		.bad input {
			color: #F00;
			border: 1px solid #F00;
			box-shadow: 0px 4px #F00;
		}

		.good input {
			color: #0F0;
			border: 1px solid #0F0;
			box-shadow: 0px 4px #0F0;
		}

		.bad h2 {
			color: #F00;
		}

		.good h2 {
			color: #0F0;
		}

		.bad#block {
			box-shadow: 0px 0px 256px rgba(255, 0, 0, 0.3);
			transition: 0.1s;
		}

		.good#block {
			box-shadow: 0px 0px 256px rgba(0, 255, 0, 0.3);
			transition: 0.1s;
		}

		#confirm {
			font-size: 3em;
			width: 100%;
			background-color: #000;
			border: 1px solid #FF0;
			color: #FF0;
			text-align: center;
			margin-top: 0.4em;
			cursor: pointer;
			box-shadow: 0px 8px #FF0, 0px 8px 32px rgba(255,255,0,0.3), inset 0px 8px 32px rgba(255,255,0,0.3);
			font-family: A;
			position: relative;
			top: 0px;
		}

		.bad #confirm {
			color: #F00 !important;
			border: 1px solid #F00 !important;
			top: 6px !important;
			box-shadow: 0px 2px #F00, 0px 8px 64px rgba(255,0,0,0.4), inset 0px 8px 64px rgba(255,0,0,0.4) !important;
		}

		.good #confirm {
			color: #0F0 !important;
			border: 1px solid #0F0 !important;
			top: 6px !important;
			box-shadow: 0px 2px #0F0, 0px 8px 64px rgba(0,255,0,0.4), inset 0px 8px 64px rgba(0,255,0,0.4) !important;
		}

		#confirm:hover, .wait#confirm {
			color: #F80;
			border: 1px solid #F80;
			box-shadow: 0px 4px #F80, 0px 8px 64px rgba(255,155,0,0.4), inset 0px 8px 64px rgba(255,155,0,0.4);
			top: 4px;
		}

		.bad {
			animation: 0.25s shake infinite linear;
		}

		@keyframes shake {
			0% {
				position: relative;
				left: 0px;
				top: 0px;
			}
			10% {
				position: relative;
				left: -1px;
				top: -2px;
			}
			20% {
				position: relative;
				left: 2px;
				top: -1px;
			}
			30% {
				position: relative;
				left: 0px;
				top: -4px;
			}
			40% {
				position: relative;
				left: 2px;
				top: -1px;
			}
			50% {
				position: relative;
				left: -1px;
				top: 2px;
			}
			60% {
				position: relative;
				left: 4px;
				top: -3px;
			}
			70% {
				position: relative;
				left: -2px;
				top: 2px;
			}
			80% {
				position: relative;
				left: 4px;
				top: -2px;
			}
			90% {
				position: relative;
				left: -1px;
				top: 1px;
			}
			100% {
				position: relative;
				left: 0px;
				top: 0px;
			}
		}

		.hidden {
			display: none;
		}

		.blur {
			filter: blur(5px);
		}

		#c {
			background-color: #FF0;
			margin-top: 0.8em;
			color: #000;
		}

		#c img {
			width: 12.5em;
			border: 8px solid #000;
			margin-top: -8px;
			margin-bottom: -17px;
		}

		#c input {
			width: 6em;
			position: relative;
			top: -0.15em;
		}

		#c>div {
			display: inline-block;
			width: 45em;
		}

		#c a {
			font-size: 2em;
			position: relative;
			top: -0.5em;
			left: 0.5em;
			font-family: A;
		}

		.bad #c {
			background-color: #F00;
		}

		.good #c {
			background-color: #0F0;
		}

		#block.nope {
			max-height: 0px;
			padding-bottom: 0px;
			transition: 0.4s;
		}

		#block.nah {
			opacity: 0;
		}

		#lain.nope {
			opacity: 0;
		}

		#fadein {
			transition: 1s;
		}

		#fadein.nope {
			opacity: 0;
		}

		#note {
			text-align: center;
			transition: 1s;
		}

		#note span {
			color: #FF0;
		}

		.badd#note span {
			color: #F00;
		}

		.goodd#note span {
			color: #0F0;
		}

		#note.nope {
			opacity: 0;
		}

		#eidcube, #confirmcube {
			transition: 1s;
		}

		#eidcube.nope, #confirmcube.nope {
			opacity: 0;
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

	<canvas id="canvas"></canvas>
	<div id="padder"></div>
	<center>
		<img id="lain" class="nope" src="/res/img/auth/tsuki64.png"/>
		<div id="block" class="nope nah">
			<center id="fadein" class="nope">
				<h1>Authenticate</h1>
				<div id="eidcube" class="nope">
					<h2 id="eidh2">EID</h2>
					<input id="eid">
				</div>
				<div id="confirmcube" class="nope">
					<div id="confirm">Login</div>
				</div>
			</center>
		</div>
	</center>
	<p class="nope" id="note"><span>NOTE: </span>Do not log in on non-personal devices, and never share your EID with anyone!<br>Always check if you are using HTTPS.</p>
</body>
</html>
