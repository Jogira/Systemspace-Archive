<!DOCTYPE html>
<html>
<head>
	<title>TSUKI/REGISTER</title>
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
	<link rel="stylesheet" href="/res/css/reset.css"><link rel="stylesheet" href="/res/css/common.css"><link rel="stylesheet" href="/res/css/scanlines.css"><script src="/res/js/jquery.js"></script><script src="/res/js/howler.js"></script><script src="/res/js/cookies.js"></script><script src="/res/js/gl-matrix.js"></script><script src="/res/js/space.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 
			var noise = new Howl({
				src: ['/res/audio/bgm/register.ogg'],
				loop: true,
				volume: 0.5
			});

			var type = new Howl({
				src: ['/res/audio/sfx/type.wav'],
				loop: false,
				volume: 1
			});

			var finish = new Howl({
				src: ['/res/audio/sfx/finish.wav'],
				loop: false,
				volume: 1
			});

			var accept = new Howl({
				src: ['/res/audio/sfx/accept.wav'],
				loop: false,
				volume: 1
			});

			var finalize = new Howl({
				src: ['/res/audio/sfx/finish.wav'],
				loop: false,
				volume: 1
			});

			var fanfare1 = new Howl({
				src: ['/res/audio/sfx/fanfare1.wav'],
				loop: false,
				volume: 1
			});

			var fanfare2 = new Howl({
				src: ['/res/audio/sfx/fanfare2.wav'],
				loop: false,
				volume: 1
			});

			var fanfare3 = new Howl({
				src: ['/res/audio/sfx/fanfare3.wav'],
				loop: false,
				volume: 1
			});
			
			window.addEventListener("load", function(event) {
				noise.on('load', function(){
					$("#loadingpane").addClass("hidden");
					noise.play();
					$("#welcomepane").removeClass("hidden");
					Write("#welcomepane");
				});
			});
			
			$('body').on('click', '.button', function() {
			    accept.play();
			});

			$('body').on('click', '#button1', function() {
			    $("#welcomepane").addClass("hidden");
				$("#termspane").removeClass("hidden");
				Write("#termspane");
			});

			$('body').on('click', '#button2', function() {
			    $("#termspane").addClass("hidden");
				$("#agepane").removeClass("hidden");
				Write("#agepane");
			});

			$('body').on('click', '#button3', function() {
			    $("#boardspane").addClass("hidden");
				$("#emailpane").removeClass("hidden");
				Write("#emailpane");
			});

			$('body').on('click', '#button-age-min', function() {
			    $("#agepane").addClass("hidden");
				$("#13pane").removeClass("hidden");
				setCookie("under13", "yes", 356);
				Write("#13pane");
			});

			$('body').on('click', '#button-age-mid', function() {
			    $("#agepane").addClass("hidden");

			    if (getCookie("under13") == "yes") {
			    	$("#liarpane").removeClass("hidden");
					Write("#liarpane");
			    } else {
			    	$("#boardspane").removeClass("hidden");
					Write("#boardspane");
			    }
			});

			$('body').on('click', '#button-age-max', function() {
			    $("#agepane").addClass("hidden");

			    if (getCookie("under13") == "yes") {
			    	$("#liarpane").removeClass("hidden");
					Write("#liarpane");
			    } else {
			    	$("#emailpane").removeClass("hidden");
					Write("#emailpane");
			    }
			});

			$('body').on('click', '#button4', function() {
				if ($("#email").val()) {
					$("#emailpane").addClass("hidden");
					$("#signingpane").removeClass("hidden");
					Write("#signingpane");
				}
			    
			});

			$('body').on('click', '#button5', function() {
				$("#signingpane").addClass("hidden");
				$("#uploadpane").removeClass("hidden");
				Write("#uploadpane");
			    fanfare3.play();
			});

			$('body').on('click', '#button6', function() {
				if ($("#upload").val()) {
					$("#uploadpane").addClass("hidden");
					$("#finishpane").removeClass("hidden");
					Write("#finishpane");	
				}
			    
			});

			$('body').on('click', '#button7', function() {
				if ($("#invite").val()) {
					$("#invitepane").addClass("hidden");
					$("#finishpane").removeClass("hidden");
					Write("#finishpane");
					fanfare1.play();
				}
			    
			});

			$('body').on('click', '#buttonfinish', function() {
				$("#finishpane").addClass("hidden");
				$("#loadingpane").removeClass("hidden");
				finalize.play();
			    $("form").submit();
			});

			$('body').on('click', '#buttonshade', function() {
				fanfare2.play();
				$("#buttonshade").addClass("dropped");
			});
		});

		function Write(element) {
			var text = $(element).html();
			var i = 1;

			var toot = setInterval(function() {
				$(element).html(text.substring(0,i));
				//type.play();
				i += 3;
				if (i > text.length) {
					clearInterval(toot);
					$(element).html(text);
					//finish.play();
				}
			}, 15);
		}
	</script>
	<style>
		canvas {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    z-index: -100;
		}

		ul {
			padding-left: 10vw;
			padding-right: 10vw;
			text-align: left;
		}

		.pane {
			width: 100%;
			height: 100%;
			position: fixed;
			text-align: center;
			transition: 2s;
		}

		.pane.hidden {
			opacity: 0;
			pointer-events: none;
		}

		.button {
			width: 60vw;
			background-color: rgba(255,255,255,0.2);
			border: 1px solid #FFF;
			box-shadow: 6px 6px #FFF, inset 0px 0px 20px #FFF, 0px 0px 50px #FFF;
			margin-left: 20vw;

			font-family: Heading;
			font-size: 2em;

			cursor: pointer;
			transition: 0.5s;
		}

		.button:hover {
			background-color: #FFF;
			color: #000;
		}

		#loadingpane {
			background-color: #000;
		}

		#email, #invite {
			width: 60vw;
			background-color: #000;
			border: 1px solid #FFF;
			box-shadow: 6px 6px #FFF, 0px 0px 50px #FFF;

			font-family: Heading;
			font-size: 2em;
			color: #FFF;
			text-align: center;

			cursor: pointer;
			transition: 0.5s;
		}

		#captive {
			display: inline-block;
			background-color: #222;
			padding: 12px;
			width: 60vw;
			border-radius: 4px;
			box-shadow: 0px 6px #111;
			margin-top: -1em;
		}

		#captive .button {
			background-color: #F00;
			border: 1px solid #800;
			margin-left: 0;
			box-shadow: 0px 6px #800, 0px 0px 50px #F00;
		}

		#captive .button:hover {
			background-color: #F44;
			border: 1px solid #F00;
			box-shadow: 0px 6px #F00, 0px 0px 50px #F00, 0px 0px 50px #F00, 0px 0px 200px #F00;
		}

		#buttonshade {
			background-color: rgba(0,0,0,0.8) !important;
			border: 1px solid #F00 !important;
			box-shadow: 0px 0px 16px #000 !important;
			padding: 6px;
			position: relative;
			left: -6px;
			top: calc(-2em + 18px);
			margin-bottom: -1.5em;
			transition: 1s;
		}

		#buttonshade:hover {
			opacity: 0.9;
			top: calc(-2em + 14px);
			color: #F00;
		}

		#buttonshade.dropped {
			opacity: 0;
			top: -2.5em;
		}
	</style>
</head>
<body>
	
	<form action="process-registration.php" method="post" enctype="multipart/form-data">
		<canvas id="canvas"></canvas>
		<div class="pane" id="loadingpane">
			<div class="padder" style="height: 20vh;"></div>
			<center><img src="/res/img/forms/loading-reg.png"/></center>
		</div>
		<div class="pane hidden" id="welcomepane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Registration</h1>
			<p>You are about to register into the TSUKI Project. Make sure you've got ready:</p>
			<ul>
				<li>About 5 minutes of time</li>
				<li>Pen and paper</li>
			</ul>
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button1">Got it</div>
		</div>
		<div class="pane hidden" id="termspane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Agreement</h1>
			<p>You (the User) are about to register to the TSUKI project and its experiment. This consists of:
				<ul>
					<li>You will be transferred over to the LFE System after your death in Life, as long as:
						<ul>
							<li>You do not soul-shatter (although this is made very hard, this might happen if you undergo too much pressure)</li>
							<li>You do not die before July 1st, 2017</li>
						</ul>
					</li>
					<li>You will lose your body, and be given a new one (it will resemble your Life one).</li>
					<li>You will live a new life in LFE.</li>
					<li>You will keep all memories from when you die.<br>Note that memories lost (due to Alzheimer's or other brain damage, if propagated for 28 hours or longer, will make it impossible to carry over these lost memories.)</li>
					<li>You will be able to sign out until Life is unlinked.</li>
				</ul>
				By signing up, you understand that this requires TSUKI to look up your soul ID and attach an EID to it.<br>
				You also understand that although this protocol is tested and very safe, it is not perfect and may have issues. We will provide insurance, however, if anything goes wrong.
			</p>
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button2">This is OK by me</div>
		</div>
		<div class="pane hidden" id="agepane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Age requirement</h1>
			<p>Sorry, but we have to ask for legal purposes. What is your age?</p>
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button-age-min">&lt;16</div>
			<div class="padder" style="height: 2em;"></div>
			<div class="button" id="button-age-mid">16-18</div>
			<div class="padder" style="height: 2em;"></div>
			<div class="button" id="button-age-max">&gt;18</div>
		</div>
		<div class="pane hidden" id="13pane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Blocked</h1>
			<p>Unfortunately, we cannot process souls of those under 16 for legal reasons.</p>
		</div>
		<div class="pane hidden" id="liarpane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Blocked</h1>
			<p>You told us before you were under 16. Do not lie to us.</p>
		</div>
		<div class="pane hidden" id="boardspane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Warning</h1>
			<p>As you are underage, you will not be admitted to the boards and Discord. Please keep this in mind when attempting to join.</p>
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button3">Got it</div>
		</div>
		<div class="pane hidden" id="emailpane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Correspondance</h1>
			<p>To be able to receive your EID, you need to enter an e-mail so we may send you a message once your registration has been processed.</p>
			<div class="padder" style="height: 5vh;"></div>
			<input id="email" name="email" placeholder="enter your email">
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button4">Got it</div>
		</div>
		<div class="pane hidden" id="signingpane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Signing</h1>
			<p>To locate your soul, we need you to draw an image. The image must be a photo of paper, with on it:
				<ul>
					<li>A drawn image. (The image or its drawing ability does not matter, this is merely to increase the amount of data points)</li>
					<li>The code "<span style="color: yellow">a62cd92b2104acbd928ccb29</span>", handwritten on the same image.</li>
				</ul>
				Example: <img src="/res/img/forms/register/example.png"/>
			</p>
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button5">Done!</div>
		</div>
		<div class="pane hidden" id="uploadpane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Upload</h1>
			<p>You may now take a picture (NOT A SCAN) of your image, and upload it to our servers.</p>
			<div class="padder" style="height: 5vh;"></div>
			Your image (JPG): <input id="upload" type="file" name="fileToUpload">
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button6">Upload</div>
		</div>
		<div class="pane hidden" id="invitepane">
			<div class="padder" style="height: 20vh;"></div>
			<h1>Invites</h1>
			<p>You currently need to be invited to register. Please enter your invite code below:</p>
			<div class="padder" style="height: 5vh;"></div>
			<input id="invite" name="invite" placeholder="enter your invite code">
			<div class="padder" style="height: 5vh;"></div>
			<div class="button" id="button8">Register</div>
		</div>
		<div class="pane hidden" id="finishpane">
			<div class="padder" style="height: 5vh;"></div>
			<img src="/res/img/forms/register/warninglain.png"/>
			<div id="captive">
				ARE YOU SURE YOU WISH TO ENROLL?
				<div class="button" id="buttonfinish">Finish registration</div>
				<div class="button" id="buttonshade">CLICK TO UNLOCK</div>
			</div>
		</div>
	</form>
</body>
</html>
