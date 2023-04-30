<!DOCTYPE html>
<html>
<head>
	<title>TSUKI</title>
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
	<link rel="stylesheet" href="/res/css/reset.css"><link rel="stylesheet" href="/res/css/common.css"><script src="/res/js/jquery.js"></script><script src="/res/js/howler.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 
			var something = new Howl({
				src: ['/res/audio/bgm/zen.ogg'],
				volume: 0.5,
				loop: true
			});

			something.play();

			setInterval(function(){
				UpdateClock();
			}, 100);
		});

		function GetRegistrants() {
			var registrants = 4969;
			var original_time = 1498921200;
			var slots_left = 31000 - registrants;
			new_time = original_time + 1728 * slots_left;
			rec = true;

			$("#slotsremaining").text(slots_left);
		}

		function UpdateClock() {
			GetRegistrants();

			var now = new Date().getTime();
			var countDownDate = new Date(new_time * 1000).getTime();

			// Find the distance between now an the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			if (minutes < 10) {
				minutes = "0" + minutes;
			}

			if (seconds < 10) {
				seconds = "0" + seconds;
			}

			// Display the result in the element with id="demo"
			if (distance >= 0 && rec) {
				$("#counter").text(days + "d " + hours + ":" + minutes + ":" + seconds);
			} else {
				$("#counter").text("Waiting...");
			}
		}

		// Magick
		(function(){var t,i,o;o=function(t){(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeOut(t,1e3/60)})(t)},t=function(){var t,n,r,e,a,s,f,h,w,p,d,u,l,m,F,c,A,D,v,y,P,R,x,C,X,Z;document.body,a=Math.PI,p=Math.max,d=Math.min,m=Math.random,F=function(){return 2*m()-1},w=Math.cos,h=Math.acos,A=Math.sin,x=150,P=0,R=0,r=0,s=0,e=0,window.iFramesToRotate=2e3,window.iPerspective=250,window.iNewParticlePerFrame=10,window.fGrowDuration=200,window.fWaitDuration=50,window.fShrinkDuration=250,window.aColor=[0,198,129],f=2*a/window.iFramesToRotate,n=nCanvasRender.getContext("2d"),X={pFirst:null},C={pFirst:null},Z=y=0,(c=function(){return nCanvasRender.width=Z=window.innerWidth,nCanvasRender.height=y=window.innerHeight,P=Z/2,R=y/2,{w:Z,h:y}})(),i(window,"resize",c),D=function(i,o,n){return null!=i?o.pFirst===i?(o.pFirst=i.pNext,null!=i.pNext&&(i.pNext.pPrev=null)):(i.pPrev.pNext=i.pNext,null!=i.pNext&&(i.pNext.pPrev=i.pPrev)):i=new t,i.pNext=n.pFirst,null!=n.pFirst&&(n.pFirst.pPrev=i),n.pFirst=i,i.pPrev=null,i},t=function(){function t(){}return t.prototype.fX=0,t.prototype.fY=0,t.prototype.fZ=0,t.prototype.fVX=0,t.prototype.fVY=0,t.prototype.fVZ=0,t.prototype.fAX=0,t.prototype.fAY=0,t.prototype.fAZ=0,t.prototype.fProjX=0,t.prototype.fProjY=0,t.prototype.fRotX=0,t.prototype.fRotZ=0,t.prototype.pPrev=null,t.prototype.pNext=null,t.prototype.fAngle=0,t.prototype.fForce=0,t.prototype.fGrowDuration=0,t.prototype.fWaitDuration=0,t.prototype.fShrinkDuration=0,t.prototype.fRadiusCurrent=0,t.prototype.iFramesAlive=0,t.prototype.bIsDead=!1,t.prototype.fnInit=function(){this.fAngle=m()*a*2,this.fForce=h(F()),this.fAlpha=0,this.bIsDead=!1,this.iFramesAlive=0,this.fX=x*A(this.fForce)*w(this.fAngle),this.fY=x*A(this.fForce)*A(this.fAngle),this.fZ=x*w(this.fForce),this.fVX=.001*this.fX,this.fVY=.001*this.fY,this.fVZ=.001*this.fZ,this.fGrowDuration=window.fGrowDuration+F()*(window.fGrowDuration/4),this.fWaitDuration=window.fWaitDuration+F()*(window.fWaitDuration/4),this.fShrinkDuration=window.fShrinkDuration+F()*(window.fShrinkDuration/4),this.fAX=0,this.fAY=0,this.fAZ=0},t.prototype.fnUpdate=function(){this.iFramesAlive>this.fGrowDuration+this.fWaitDuration&&(this.fVX+=this.fAX+.1*F(),this.fVY+=this.fAY+.1*F(),this.fVZ+=this.fAZ+.1*F(),this.fX+=this.fVX,this.fY+=this.fVY,this.fZ+=this.fVZ),this.fRotX=e*this.fX+s*this.fZ,this.fRotZ=-s*this.fX+e*this.fZ,this.fRadiusCurrent=Math.max(.01,window.iPerspective/(window.iPerspective-this.fRotZ)),this.fProjX=this.fRotX*this.fRadiusCurrent+P,this.fProjY=this.fY*this.fRadiusCurrent+R,this.iFramesAlive+=1,this.iFramesAlive<this.fGrowDuration?this.fAlpha=1*this.iFramesAlive/this.fGrowDuration:this.iFramesAlive<this.fGrowDuration+this.fWaitDuration?this.fAlpha=1:this.iFramesAlive<this.fGrowDuration+this.fWaitDuration+this.fShrinkDuration?this.fAlpha=1*(this.fGrowDuration+this.fWaitDuration+this.fShrinkDuration-this.iFramesAlive)/this.fShrinkDuration:this.bIsDead=!0,!0===this.bIsDead&&D(this,X,C),this.fAlpha*=d(1,p(.5,this.fRotZ/x)),this.fAlpha=d(1,p(0,this.fAlpha))},t}(),l=function(){var t;for(n.fillStyle="#000",n.fillRect(0,0,Z,y),t=X.pFirst,0;null!=t;)n.fillStyle="rgba("+window.aColor.join(",")+","+t.fAlpha.toFixed(4)+")",n.beginPath(),n.arc(t.fProjX,t.fProjY,t.fRadiusCurrent,0,2*a,!1),n.closePath(),n.fill(),t=t.pNext,1},(u=function(){var t,i,n;for(s=A(r=(r+f)%(2*a)),e=w(r),t=0,0;t++<window.iNewParticlePerFrame;)(i=D(C.pFirst,C,X)).fnInit();for(i=X.pFirst;null!=i;)n=i.pNext,i.fnUpdate(),i=n,0;return l(),o(function(){return u()})})(),(v=new dat.GUI).add(window,"fGrowDuration").min(10).max(500).step(1),v.add(window,"fWaitDuration").min(10).max(500).step(1),v.add(window,"fShrinkDuration").min(10).max(500).step(1),v.add(window,"iPerspective").min(150).max(1e3).step(1),v.add(window,"iNewParticlePerFrame").min(1).max(20).step(1),v.add(window,"iFramesToRotate").min(50).max(2500).step(50).onChange(function(){return f=2*a/window.iFramesToRotate}),v.addColor(window,"aColor").onChange(function(){return window.aColor[0]=~~window.aColor[0],window.aColor[1]=~~window.aColor[1],window.aColor[2]=~~window.aColor[2]}),window.innerWidth<1e3&&(v.close(),window.iNewParticlePerFrame=5),window.app=this},(i=function(t,i,o){t.addEventListener?t.addEventListener(i,o,!1):t["on"+i]=o})(window,"load",t)}).call(this);
	</script>
	<style>
		@font-face {
			font-family: CNT;
			src: url(/res/font/countdown.ttf);
		}

		body, html {
			background-color: #000;
			color: #fff;
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		@font-face {
			font-family: CNT;
			src: url(/res/fonts/countdown.ttf);
		}

		#counter {
			font-family: CNT;
			position: fixed;
			text-align: center;
			top: 40vh;
			width: 100vw;
			font-size: 7vw;
			margin: 0;
			color: rgba(0, 198, 129, 0.7);
			text-shadow: 0px 1vh rgba(0, 198, 129, 0.4), 0px 1vh 5vh rgba(0, 198, 129, 0.4);
			z-index: 999;
			mix-blend-mode: lighten;
		}

		#ms {
			display: inline-block;
			width: 4em;
			font-size: 0.5em;
		}

		#wallpaper {
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			mix-blend-mode: screen;
			opacity: 0.05;
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

	<canvas id="nCanvasRender"></canvas>
	<center>
		<h1 id="counter"></h1>
		<h2></h2>
	</center>
	<div id="wallpaper"></div>
</body>
</html>
