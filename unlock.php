<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/:)</title>
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
			var ogg = new Howl({
				src: ['/res/audio/bgm/500.ogg'],
				loop: true,
				volume: 1
			});

			ogg.play();

			$("#back").click(function(){
				window.history.back();
			});
		});
	</script>
	<style>
		body {
			min-height: 100vh;
			width: 100%;
			background-image: url(/res/img/error/bg/500.png);
			background-size: cover;
			background-position: center;
			position: absolute;
			left: 0;
			top: 0;
		}

		#back {
			background-color: rgba(0,0,0,0.5);
			border: 1px solid #FFF;
			box-shadow: 0px 6px #FFF, 0px 0px 16px #FFF;
			width: 10em;
			font-family: Heading;
			font-size: 2em;
			cursor: pointer;
			position: relative;
			top: 0px;
			transition: 0.5s;
			text-align: center;
		}

		#back:hover {
			box-shadow: 0px 2px #FFF, 0px 0px 64px #FFF;
			top: 4px;
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

	<center>
		<div style="height: 20vh;"></div>
		<img src="/res/img/error/500.png"/>
		<h1>Your system cannot accept this request</h1>
		<div style="height: 20vh;"></div>
		<div id="back">Return</div>
	</center>
</body>
</html>
