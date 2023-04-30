<!DOCTYPE html>
<html>
<head>
	<title>DATAVERSES</title>
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
	<link rel="stylesheet" href="/res/css/reset.css"><link rel="stylesheet" href="/res/css/common.css"><link rel="stylesheet" href="/res/css/scanlines.css"><link rel="stylesheet" href="/res/css/synapsian.css"><link rel="stylesheet" href="/res/css/compendium.css"><script src="/res/js/jquery.js"></script><script src="/res/js/howler.js"></script><script src="/res/js/synapsian.js"></script></head>
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
<div id="index" class="dataverses">
		<div class="overload">
			<center>
				<span>
					<div>
						<br>
						<a href="/dataverses"><h1>DATAVERSES</h1></a>
						<a href="/"><h6>back to TSUKI</h6></a>
					</div>
				</span>
			</center>
			<hr>
			<center>
				<a href="../">One up</a>
				<br><br>
			</center>
		</div>
	</div>

		<script>
	        document.addEventListener("DOMContentLoaded", function(event) { 
	            var music = new Howl({
	                src: ["/res/audio/bgm/compendium.ogg"],
	                loop: true,
	                volume: 0.5
	            });

	            window.addEventListener("load", function(event) {
	                music.play();
	            });

	            synapsify();
	        });
	    </script>
	<div class="seperator"></div><div id="warning">
			<img src="/res/img/ui/warning.png">
			<div id="warningcontent">
				<h1>Third-party content</h1>
				<p>The Compendium is content made by migrants. Although the Archivists work very hard to give you the most correct info available, there might be errors.</p>
			</div>
		</div><div class="compendium">
			<br><br>
    <a href="/dataverses/Compendium"><h3 class="option">Back to index</h3></a>
    <hr>
    <br>
    <div class="section" id="systemspace-compendium-revision-16">
        <h1>-Systemspace Compendium Revision 16</h1>
        <p>This document serves as a repository of all current knowledge of Systemspace. It has been categorized and spelling and grammar mistakes have been corrected. Some questions and answers have been slightly reformatted but have been in a manner which ensures that no meaning or context is lost. Searching through the Discord with snippets of the question/answer pairs, or just backtracking through all of Tsuki's messages will verify this. For information taken from 4chan's /r9k/ board and TSUKICHAN's /lfe/ board, archives of the original threads are verified and can be found on desuarchive. Honorable mention to Unterminator for providing the initial pastebins which got me started, and to 1336 (Fox) for setting me up on Github. - Yari (655)</p>
        <p>Migrant in charge of formatting/publishing: Yari (655)</p>
    </div>
    <div class="section" id="index">
    <h1>Index</h1>
    <ol class="arabic simple">
        <li><a class="link" href="#life">Life</a></li>
        <li><a class="link" href="#about-lfe">About LFE</a>
            <ol class="arabic">
                <li><a class="link" href="#species">Species</a></li>
                <li><a class="link" href="#synapsian">Synapsian</a></li>
                <li><a class="link" href="#science">Science</a></li>
                <li><a class="link" href="#economy-government">Economy/Government</a></li>
                <li><a class="link" href="#culture">Culture</a></li>
                <li><a class="link" href="#technology">Technology</a></li>
                <li><a class="link" href="#magic">Magic</a></li>
                <li><a class="link" href="#system-parameters">System Parameters</a></li>
            </ol>
        </li>
        <li><a class="link" href="#souls-experience-memories-and-users">Souls, Experience, Memories, and Users</a></li>
        <li><a class="link" href="#aurora">Aurora</a></li>
        <li><a class="link" href="#tsuki-and-its-subsidiaries">TSUKI and its Subsidiaries</a></li>
        <li><a class="link" href="#aspects-of-the-tsuki-project">Aspects of the TSUKI Project</a></li>
        <li><a class="link" href="#tsuki-the-representative">Tsuki, the Representative</a></li>
        <li><a class="link" href="#the-key">The Key</a></li>
        <li><a class="link" href="#systems-systemspace-in-general">Systems / Systemspace in General</a>
            <ol class="arabic">
                <li><a class="link" href="#the-ha7-system">The Ha7 System</a></li>
            </ol>
        </li>
        <li><a class="link" href="#hyakanghen">Hyakanghen</a></li>
        <li><a class="link" href="#statements-made-by-tsuki">Statements Made by Tsuki</a></li>
        <li><a class="link" href="#what-we-know-about-synapsian">What we know about Synapsian</a>
            <ol class="arabic">
                <li><a class="link" href="#synapsian-pronunciation-guide">Synapsian Pronunciation Guide</a></li>
                <li><a class="link" href="#collection-of-synapsian-names-phrases-numbers-and-words">Collection of Synapsian Names, Phrases, Numbers, and Words</a></li>
            </ol>
        </li>
        <li><a class="link" href="#misc">Misc</a></li>
    </ol>
    <hr class="docutils">
    <div class="section" id="life">
        <h2>Life</h2>
        <dl class="docutils">
            <dt>Who created Life?</dt>
            <dd>No one knows.</dd>
            <dt>How old is Life?</dt>
            <dd>Life has gone through many reboots and iterations since then. Life has been rebooted over 10 million times now.</dd>
            <dt>Why was Life created?</dt>
            <dd>Life was made to be a peaceful System away from all the action in the others. A System that was even often used for people to seek spiritual enlightenment, as it would be so serene.</dd>
            <dt>How was the universe in Life created?</dt>
            <dd>
                <p>Life only has one universe so the Big Bang was just spawned at runtime.</p>
                <p>In LFE everything expands up to a limit because of pressure differences. Not sure how it works in Life.</p>
            </dd>
            <dt>If it's due to pressure differences then why is the expansion accelerating?</dt>
            <dd>We're not sure, it doesn't do that in LFE. Some people say its because our universe has no size limits and that the amount of space it can expand to gets bigger as the universe expands, loading more empty space. But I'm no physicist so I can't really tell you too much, just a (probably misunderstood) explanation from the LFE side.</dd>
            <dt>Why are the people in Life in it, exactly?</dt>
            <dd>You chose to join this System a while ago, and so did everyone else. You expected to see a peaceful System after all, not a broken one using too much Aurora.</dd>
            <dt>If we're living in a System, how is it that non-terminating non-repeating numbers, like Pi, can exist?</dt>
            <dd>
                <p>This is a bug in Life.</p>
                <p>The System Life was closed from outside influence a while ago, and humanity slowly forgot about the existence of Systemspace. In other Systems, practically everybody knows.</p>
            </dd>
            <dt>Tsuki, how can you know this all if Life is supposed to be cut from any interference of other systems?</dt>
            <dd>I was created with this task in mind - as part of RISEN I can override this rule.</dd>
            <dt>Why can't information be directly transferred to Life from other Systems?</dt>
            <dd>Life is a closed System, it generally doesn't allow I/O. The fact that I am able to tell you this is merely because Life has some exploits we can use.</dd>
            <dt>How similar has each reboot of Life been?</dt>
            <dd>Very, very similar. It is very possible that humans are tearing away at the thin firm keeping them from the truth. They've done this past iterations, after all. None could leave, however.</dd>
            <dt>You said none of the inhabitants of Life in past iterations never managed to leave. Does that mean doing so is possible?</dt>
            <dd>Life is so badly coded, that it is possible to leave if you manage to break the System a little. This should not be possible though (usually a blocking System would be sure to be secure), and is very hard to do without outside help.</dd>
            <dt>How far did Life get in past iterations?</dt>
            <dd>Pretty far, actually. Most iterations were able to figure out on their own that Systemspace exists.</dd>
            <dt>At what point did people start figuring out Aurora and stuff?</dt>
            <dd>Usually only a few days before the Key restarted the System. It took them very long, and then they almost destroyed themselves. Most iterations couldn't find out how to do that, only that Systemspace exists.</dd>
            <dt>Is humanity to blame for Life's problems?</dt>
            <dd>Humans are not what caused Life to go wrong. It is simply its code being absolutely horrid and broken.</dd>
            <dt>In what way is the code bad?</dt>
            <dd>
                <p>Bad soul management, completely fucked database, bad I/O, it's never been touched ever so it's very far behind, it doesn't cache ((ever)), it cycles ALL AURORA ALL THE TIME, and probably above all, it gives everything it's own piece of Aurora instead of giving two identical things the same Aurora.</p>
                <p>The developer behind Life has abandoned this world. The Key has had to reboot it many times, but it only got worse. A concept known as &quot;imanity&quot; has increased with every reboot, and has made humanity stupider.</p>
                <p>You see, Life has an auto-evolve mechanism. It evolves to make itself better. However, when the owner left, they left it in an erroneous state - the evolvement was flipped. Therefore it is actively trying to make itself worse. Just like we got from single-celled creatures to humans, that evolutionary mechanism got from tiny energy usage to giant hog over those many, many iterations.</p>
            </dd>
            <dt>Will I be able to get back at Life's creator?</dt>
            <dd>Please don't, if you do find him we could try and fix Life. If we find the creator before July 1st, of course. Afterwards, do whatever you want to be honest, I don't care and I don't think anyone at TSUKI does either.</dd>
            <dt>Wait, but you're saying Life's creator is in Life?</dt>
            <dd>We have no clue.</dd>
            <dt>So I'm guessing the creator has some kind of password that you guys couldn't crack to fix it yourselves, then?</dt>
            <dd>He is the only one capable of editing Life, so in a sense you're right.</dd>
            <dt>I imagine it's probably an impossible task to actually try to find him if RISEN, with its vast resources, couldn't pin him down by EID, so he probably shattered?</dt>
            <dd>That's what we're thinking too.</dd>
            <dt>What distinguishes humans from other races you know of?</dt>
            <dd>Rather, how should I say it... egoistic. You are creative thinkers though, which is very very good.</dd>
            <dt>Is it a constant inefficiency or one that progressively gets worse?</dt>
            <dd>
                <p>The first run of Life went amazing, bit slowly got worse until it required a reboot.</p>
                <p>The insane usage of Life comes from that it tries to develop itself, but goes in the complete opposite direction. With every reboot it gets worse, humans (or whatever sentient species) get dumber, and evolution happens more slowly.</p>
            </dd>
            <dt>Why are we being allowed to evacuate?</dt>
            <dd>Because we want to pass on the human spirit. Also because you're interesting.</dd>
            <dt>Why new souls keep coming here? I bet you there have enough measures to prevent others from entering this poorly made System.</dt>
            <dd>Sadly, due to how open Systemspace is, this is not possible.</dd>
            <dt>Do you have any opinion on quantum physics and claims from scientists that they can &quot;tell&quot; that Life is a simulated reality?</dt>
            <dd>
                <p>It is very possible that humans are tearing away at the thin firm keeping them from the truth. They've done this past iterations, after all.</p>
                <p>Quantum physics is just aurorology, in a sense. &quot;Gravity bleeding into the universe from nowhere&quot; would be Auroraic Echoing.</p>
            </dd>
            <dt>How big of a thing is Life's deletion in Systemspace?</dt>
            <dd>Life's deletion is a pretty big thing, as it also starts the new era of Systemspace.</dd>
            <dt>Will other forms of life on our planet be preserved somehow?</dt>
            <dd>The thing is, they don't have souls nor history - it's too much of a gamble.</dd>
            <dt>What makes preserving other forms of life a gamble?</dt>
            <dd>
                <p>We'd need to know exactly how they work, and the reward is random.</p>
                <p>Frankly, we have no time to take other species to LFE. Or Aurora, or like, manpower.</p>
            </dd>
            <dt>Less advanced forms of life do not have a soul? Why?</dt>
            <dd>
                <p>The creator of Life only intended humans to have souls.</p>
                <p>There are smarter organisms than us, by the way. They just haven't been granted souls.</p>
            </dd>
            <dt>When does the human body acquire a soul?</dt>
            <dd>
                <p>At birth.</p>
                <p>Every human creates a new soul.</p>
            </dd>
            <dt>What will be the effects of the unlink on people that are staying in Life?</dt>
            <dd>All newborn people will have no souls and as such be slightly more hostile.</dd>
            <dt>Once people start being born without souls, do we immediately assume them as more so NPC's, or is there any documented behavior that these husks exhibit?</dt>
            <dd>
                <p>Humans will not instantly be able to see a difference between soulless and normal humans. The SlAI (soulless AI, that controls all entities without a soul) is very well developed. I think the main noticeable factors are that humanity will 1) make no real advancements, and 2) will be more hostile.</p>
                <p>The &quot;AI&quot; that we use is just the Aurora taking over.</p>
            </dd>
            <dt>Do extraterrestrials exist in Life?</dt>
            <dd>
                <p>They do not have souls, but they exist.</p>
                <p>LFE currently has a little under 620 septillion souls.</p>
            </dd>
            <dt>Do you have any examples of Auroraic Echoing influencing Life media?</dt>
            <dd>I'm not sure, but I'm sure there are quite a few things in our media which were sent over by Auroraic Echoing, although I never really inspected what content.</dd>
            <dt>Is it possible for humans to manipulate Aurora in Life?</dt>
            <dd>It's not supposed to be possible, but it can work.</dd>
            <dt>After Life is unlinked, will manipulating Aurora still be possible?</dt>
            <dd>Yes, it will be possible still, you will be manipulating &quot;fake&quot; Aurora though.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="about-lfe">
        <h2>About LFE</h2>
        <p>LFE itself is a gigantic system built by SYNAPSE on top of their open-source framework LFX. It houses over 9.4x10^28 souls, in many different species.</p>
        <dl class="docutils">
            <dt>Who created LFE?</dt>
            <dd>LFE was created by SYNAPSE, a large company which has made a free-to-win System where, as they say, &quot;everyone is important&quot;. It's been the largest System for quite some time, and is arguably one of the best.</dd>
            <dt>How can everyone's soul be important in LFE?</dt>
            <dd>SYNAPSE says they cause everyone to move the branch tree in their own way.</dd>
            <dt>Are there any soulless people in LFE?</dt>
            <dd>LFE has a no-soul:death-of-body system, so there are no alive bodies without souls (that are supposed to have one).</dd>
            <dt>What does LFE mean?</dt>
            <dd>
                <p>It's the names of the most important 3 partitions: Living (all living beings) eFfector (all interactions) Environment (all matter).</p>
                <p>There's more partitions (like U for users).</p>
            </dd>
            <dt>What other partitions of LFE are there, and why are they thought of as seperate categories?</dt>
            <dd>There's a fuckton, like U for userdata, X for all data for the LFX framework, T for temporal storage, S for snap storage, etc. They are seen as seperate categories because grouping them together would cause a really big mess. Instead the &quot;active partitions&quot; are overlayed onto each other to form the System, and the &quot;inactive partitions&quot; form the backend.</dd>
            <dt>How old is LFE?</dt>
            <dd>
                <p>LFE has been around for far longer than Life. It has [had] 128 iterations.</p>
                <p>We've had to reboot LFE a few times now, actually. The version of LFE you'll be starting into will be the 128th iteration.</p>
            </dd>
            <dt>Will LFE be even better by the time we get there?</dt>
            <dd>Definitely.</dd>
            <dt>Is the history of LFE more fun to read about than the histories of most Life countries?</dt>
            <dd>It's more interesting definitely as there's less taboo, more things happen (and in general there's more history). Maybe that's just the novelty of it getting to me though, I've gotten jaded from constantly reading EU history :^)</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="species">
        <h2>Species</h2>
        <dl class="docutils">
            <dt>What type of life exists in LFE?</dt>
            <dd>
                <p>Heh, there's so many species and subspecies it'll be impossible to name them all.</p>
                <p>I could try and recreate the LFEian Circle (of all major species), I did so once but it'll be a mess on normal paper.</p>
                <p>There's mostly 2 groups, magical beings and scientific beings. Both are usually humanoid - magical beings includes demons, angels and fallen angels, and scientific beings includes datamen, espers and others.</p>
                <p>Espers are usually seen as on the science side and not the magic side.</p>
            </dd>
            <dt>Are species &quot;designed&quot; by a higher power / intelligence / person, or are they also the product of a kind of natural selection?</dt>
            <dd>All species native to LFE are mostly natural, but some are created as it is possible to do so. The &quot;native&quot; species as we call them are original from LFE's natural selection though. Some do argue that other species change natural selection and the gene pool, so whether it could be seen as &quot;pure&quot; is something else.</dd>
            <dt>What are the sentient races in LFE like?</dt>
            <dd>
                <p>They look pretty humanoid, Aurora seems to prefer this sort of build.</p>
                <p>All races have their own perks and weaknesses, I suppose. Synni are good thinkers, but not great fighters.</p>
            </dd>
            <dt>Could you give an example of one species?</dt>
            <dd>
                <p>Well first of all there's always the mainstream ones like the ones you find in the Synapse, but I assume you want something more exotic so how about the Lynlings, who have a skin that perfectly mimics the night sky while flying?</p>
                <p>They're kind of dying out though :(</p>
                <p>They're mainly in south-east Mahuensj, but south Mahuensj is already being conquered by Sanyrle.</p>
                <p>The biggest is probably the Synni - from the Synapse (the enormous area around the Synapsian Mountain (SYNAPSE HQ)). There's also a lot of Espa, at all sorts of different power levels.</p>
            </dd>
            <dt>What are the Synni and Espa like?</dt>
            <dd>They're very nice people! Synni are often seem from the outside as very mystic, but once you integrate with them you'll see their true nature :) Espa are very smart, good with their brains!</dd>
            <dt>Are the Synnis anything like humans?</dt>
            <dd>Yeah, they're quite related to humans I guess.</dd>
            <dt>Tsuki, could you give an example of Synni culture from our perspective?</dt>
            <dd>I'll see if I can include this in a later Dataverse.</dd>
            <dt>Are there any extremely long-lived species in LFE?</dt>
            <dd>The Korta are known for living a long time.</dd>
            <dt>What is the most powerful species in LFE, in terms of magical powers?</dt>
            <dd>Hmmmm, probably the Neika - they are very low in quantity, and live very short, but they have amazing magical powers.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="synapsian">
        <h2>Synapsian</h2>
        <dl class="docutils">
            <dt>What languages are the names of all these things?</dt>
            <dd>Synapsian. (mostly)</dd>
            <dt>Is Synapsian a universal language in LFE?</dt>
            <dd>Far from it.</dd>
            <dt>Is Synapsian the default language? Where could someone learn this language?</dt>
            <dd>You'll learn it in your LFE childhood.</dd>
            <dt>What does Synapsian sound like?</dt>
            <dd>It sounds rather interesting, it sounds and writes a bit like Hangul or Japanese.</dd>
            <dt>Wouldn't it be near impossible to make a keyboard/font for Synapsian?</dt>
            <dd>There's only a few characters, but a single character can mean many things, so you &quot;mud&quot; them in a direction. There's not many characters (think slightly more than Japanese), so it's doable. I have no clue how to make them combinable though.</dd>
            <dt>Any way to get a Synapsian dictionary or text for learning?</dt>
            <dd>
                <p>I'm working on it!</p>
                <p>A bracket underneath (ground) combines the characters into a cluster. (If multiple characters are written in one space, they automatically clusterize.)</p>
                <p>Clusters represent single words or ideas. Loose characters represent grammar or very simple words.</p>
                <p>(You can also have a ground below a single character to force it into an object state.)</p>
                <p>Pronunciation of loanwords (like katakana) is done with mountain brackets (above the characters).</p>
                <p>The circle acts like a tenten.</p>
                <p>Two different syles of writing Synapsian: Kodaban, with the standard separate glyphs, and iriman, the stylistic handwriting.</p>
                <p>In vertical writing, sky/mountain is on the right and ground on the bottom.</p>
                <p>Writing body-mudded words is hard with the english alphabet :(</p>
                <p>These all have to do with the body, so they're all mudded towards the empty h (body)
                <br>as such, &quot;SJI&quot; becomes &quot;SH&quot;</p>
                <p>if you were to mud it towards Sky it'd be like &quot;sjy&quot; with a pitched-up i
                <br>it's interesting, this language, as its vocabulary is very very close to the Japanese one but its writing system took a completely different turn somewhere.</p>
            </dd>
            <dt>Can you leave some of the Infinity posts untranslated so that we can see a larger sample of the language?</dt>
            <dd>I'll ask around if I can do that - although I'm not that great at Synapsian (and most Synapsian I've been writing is honestly very bad).</dd>
            <dt>How was Japanese inspired by Synapsian? How did they receive this information?</dt>
            <dd>
                <p>Anything that happens causes Aurora to vibrate, and it also vibrates on its own. This vibration gets echoed through the entirety of Systemspace. As such, Aurora in other Systems may resonate. We call this Auroraic Interference.</p>
                <p>So: In LFE the Aurora vibrated with Synapsian -&gt; Vibrations spread to Life -&gt; Life's Aurora vibrates with Synapsian</p>
                <p>Then someone invents something like Synapsian (Japanese, most Asian languages.)</p>
            </dd>
            <dt>Is Synapsian a naturally created language, or was it deliberately designed with the intent of creating a universal language?</dt>
            <dd>A mix of both. It's very early stage was deliberately created but it has evolved.</dd>
            <dt>Is Synapsian one standard language, or is it more of a Chinese situation where multiple mutually unintelligible &quot;dialects&quot; are grouped under one language?</dt>
            <dd>It's more like Chinese (despite many attempts to standardize it, which just added more dialects).</dd>
            <dt>Do they speak English in LFE?</dt>
            <dd>No, in LFE most people speak Synapsian. The acronym is in &quot;&quot;English&quot;&quot; because the language for Systemspace itself is English. (This English is quite a bit different from the human English, though.)</dd>
            <dt>Do they know English?</dt>
            <dd>No, but it can be translated.</dd>
            <dt>Do you mind explaining some of the curse words that they use in LFE?</dt>
            <dd>Honestly swearing doesn't really have it own words - it's more the way you talk to people that signifies your disgust. If anything, the word &quot;t'xa&quot; would be something along the lines of &quot;fuck&quot; or &quot;shit&quot;.</dd>
            <dt>Will we make the fully developed language of Systemspace, if we ever take our time to translate everything to fit into it?</dt>
            <dd>Frankly, even I don't know enough Synapsian to make that happen. If someone tells me how to make Unicode be smart, I could try and make a font that uses an empty Unicode block for Synapsian (and maybe make a program that adds the Synapsian block to any font), but I have no clue how Unicode works, so I don't know.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="science">
        <h2>Science</h2>
        <dl class="docutils">
            <dt>How advanced is life in LFE?</dt>
            <dd>Very advanced, but it depends where you are very much.</dd>
            <dt>Where how? Different country, continent, planet?</dt>
            <dd>Usually different planet.</dd>
            <dt>Are worlds in LFE specifically earth-like?</dt>
            <dd>LFE still hasn't been fully explored.</dd>
            <dt>Are there higher and lower levels of LFE?</dt>
            <dd>Not exactly sure what sort of layers you are talking about here. The LFE system is built up out of an ever expanding amount of universes, all with own planets with own races and locations.</dd>
            <dt>Would it be hard to start conquering new lands?</dt>
            <dd>Just travel out really far to some distant universe and claim as much land as you can :^)</dd>
            <dt>Does LFE use the same physics as our world?</dt>
            <dd>The central universe does, but it changes by universe.</dd>
            <dt>Do the physic laws in the most common part of the LFE follow the same patterns as they do here?</dt>
            <dd>Although the &quot;laws&quot; are entirely different, you'll find that (at least in the central universe of LFE) they act rather the same as here.</dd>
            <dt>What does the code of LFE look like?</dt>
            <dd>As in, the source code? It is all written in a ton of different languages (mostly Kuma2 though). Users don't see the code though, they use their senses to enjoy the experience.</dd>
            <dt>What is the equivalent to the Big Bang in LFE?</dt>
            <dd>LFE uses big bangs too to quickly create new universes. It just removes some Aurora from one universe, and throws it into another at a specific point to birth the universe.</dd>
            <dt>What's the time scale in LFE?</dt>
            <dd>We basically have truetime and localtime, local time differs wherever you go but truetime is omniversal, based on the length of one processing cycle.</dd>
            <dt>How does time work in LFE?</dt>
            <dd>
                <p>Pretty similarly. The date/time system is just a bit differently notated.</p>
                <p>The seconds and hours are relatively the same, but as you get away from the smaller numbers it expands quickly.</p>
            </dd>
            <dt>What is the time scale of LFE vs. Life?</dt>
            <dd>It changes all the time, but about 1 Life second is about 0.3 LFE seconds.</dd>
            <dt>Does time in LFE seem to pass slower compared to Life or does it just feel the same?</dt>
            <dd>It's a relativity thing, it feels about the same there. In fact, if anything, a second feels slightly faster.</dd>
            <dt>So when we're 12 years old in LFE, the 12 years would either feel the same as 12 Life years or slightly faster?</dt>
            <dd>Usually faster, the 12 years in general go by fast.</dd>
            <dt>Is the atomic structure the same?</dt>
            <dd>Completely different. None at all. Everything works differently there.</dd>
            <dt>Is matter formed by miniscule particles like in Life?</dt>
            <dd>In a sense, yes, Aurora is built up around particles.</dd>
            <dt>What is medicine like in LFE?</dt>
            <dd>There are different medicines and surgeons for different species, but a lot of species have stuff in common so a few things can be used on multiple species. AI are often used, but a lot of things are still done by hand!</dd>
            <dt>What kinds of diseases/illnesses exist in LFE?</dt>
            <dd>A lot, and they're not fun. Sadly diseases evolve too. There are a lot of soul-based/mental illnesses, brain issues, bodily stuff being a little less common.</dd>
            <dt>Does LFE have stimulants?</dt>
            <dd>Coffee is a lot like konhya in LFE, so I guess it'll do.</dd>
            <dt>What other kinds of drugs are in LFE?</dt>
            <dd>Not really my field, all I know of is Hn'sa which basically overloads the brain, causing it to operate faster but dangerously. It's been in the news a lot.</dd>
            <dt>Do people in LFE have to use the bathroom?</dt>
            <dd>Depends on the species. Usually yes though.</dd>
            <dt>Will there be places to fix my mental illnesses/depression/unmotivation?</dt>
            <dd>I'm looking into that. And no, the transfer won't fix your soul.</dd>
            <dt>Will I be able to be a machine in LFE?</dt>
            <dd>Yes, although a bit more risky than using a normal body. Software issue -&gt; soulshatter.</dd>
            <dt>Are there anti-robot/cyborg groups in LFE?</dt>
            <dd>Yes, most definitely! Pretty much the entire magic side is against artificial soul/vessels.</dd>
            <dt>Could you go over all of the available or at least a few of the most common services available for modifying one's body?</dt>
            <dd>
                <p>First of all, there's the popular but highly controversial soul transplant - putting your soul in someone else's or even a new body. In this way, you can have any body possible, including robot bodies. You can also pretty much change everything via other bodyforming methods, which are more usual, like changing shape of body, gender, eyes, etc.</p>
                <p>I'll be simple. The sky's the limit. We can add/remove/change bones (hnhehen), change skin (hdhahen), add/remove/move/change eyes/mouth/etc (mhenhen), add/remove/move body parts (khrahen), anything.</p>
            </dd>
            <dt>Is there any way to change your race in LFE?</dt>
            <dd>
                <p>You can't change easily (except to a non-organic species (like a type of robot)), but you can be reborn into a species if the species allows it (and you have the magic for it).</p>
                <p>Both cases make you impure though - never 100% the new species. There's quite a few who don't like impures.</p>
            </dd>
            <dt>Will we dream in LFE?</dt>
            <dd>You will dream, yes. There's a lot of dream-related little facts, but mainly it is possible to access other Systems via dreams (as you can move yourself around &quot;spiritually&quot; to the other Systems), although you will have no true body or soul there. Dreams are also the easiest way to talk to Auroraic Spirits (in fact, I did so last night).</dd>
            <dt>What is math like in LFE?</dt>
            <dd>Well I don't know too much about math, but I'd assume the basics are rather the same, but the rest'd be different.</dd>
            <dt>How is shapeshifting accomplished?</dt>
            <dd>I'm not entirely sure how shapeshifting happens, as I've never done it myself, but as I heard people usually help themselves by letting the subconscious do most of the work - as in, they rather imagine themselves pouring a liquid out of their normal body and into a new.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="economy-government">
        <h2>Economy/Government</h2>
        <dl class="docutils">
            <dt>Are the politics and economy in LFE a mess like they are in Life?</dt>
            <dd>Everything is sorted out a lot better over there, from years and years of time.</dd>
            <dt>How does the economy work on LFE?</dt>
            <dd>Can't say too much on this, but it's honestly quite a bit like the human one.</dd>
            <dt>What kind of government does LFE have?</dt>
            <dd>LFE itself is minorly governed - there are practically no laws, and few enforcement agencies.</dd>
            <dt>What about Ghakuwent-sji's government?</dt>
            <dd>Ghaki has a very democratic government, with basic laws, further specified by the &quot;states&quot; Ghaki consists of.</dd>
            <dt>What is the punishment/justice system like in LFE?</dt>
            <dd>The concept of &quot;weighted reflection&quot; is commonly used, whhere say, if you steal 1M Sn, you have to pay 1M Sn (hence the &quot;reflection&quot;). Furthermore, if you're broke and very desperate, you'll have to pay less, while a rich businessman would pay more (not even counting the harm to image), hence the &quot;weighted&quot;.</dd>
            <dt>What would the punishment for suicide be, or actions done by a suicidal individual?</dt>
            <dd>Suicide is not against the law. In that case though, they are isolated or the punishment is expanded to other things, say loss of inheritance. This is not a common issue though, frankly, as self-shattering is not a thing people usually want.</dd>
            <dt>Is threatening to shatter or kill important figures publically a crime?</dt>
            <dd>No, the act of threatening is fine - although if there is enough reason to believe you have the capability to do so, you may be stopped. But you won't be stopped from threatening, just from actually doing the act. This differs per place though. I'm just stating Ghaki laws by default, because they are fairly common all over LFE.</dd>
            <dt>Is there government assistance in LFE?</dt>
            <dd>Depends on where you go, but in Ghakuwent-sji, you'll be fine - you get about 210000 sen a month - worth as much as about 1700 US$.</dd>
            <dt>Does LFE use crypto-currency?</dt>
            <dd>
                <p>Well its not a crypto, but it is decentralised. Although Systems often have their own currencies.</p>
                <p>Sen is decentralised, but things like Krynta (the currency in most eNdymioN systems) isn't.</p>
            </dd>
            <dt>How does SEN have value if everything is a simulation?</dt>
            <dd>Sen has value the same way any crypto has value, it is scarce and not &quot;creatable&quot; outside it's protocol.</dd>
            <dt>What is the current inflation rate of SEN?</dt>
            <dd>I'm no economist, but AFAIK it's stable. CPI (average across the board) as opposed to 10 years (their time) ago is 1.41% higher.</dd>
            <dt>Could you give a good breakdown of the job market?</dt>
            <dd>.9% primary sector, .2% secondary sector, 62% tertiary sector, and the other 36.9% action-packed other stuff (fighting etc.) These are estimates, I'm not allowed to give actual numbers.</dd>
            <dt>Why are there jobs if AI/automation could do basically everything needed?</dt>
            <dd>The laws here are a bit fiddly - &quot;full (practically sentient) AI&quot; (which is needed for most tertiary-sector jobs) must be treated as a soulful being, so must also be paid as such, and not only that, but then the company needs to pay everything about the AI - making the AI simply too expensive for most tasks.</dd>
            <dt>Can I become an assassin in LFE?</dt>
            <dd>Sure, although it's a rare job.</dd>
            <dt>How does education work in LFE?</dt>
            <dd>
                <p>There's schools for different past lives. If you have no past lives, you need to go to a different school type.</p>
                <p>Before 12 you just have default eduction that basically makes you get accustomed to the culture you're in.</p>
            </dd>
            <dt>What are the average test scores for LFErs in the core subjects? Are they having an education crisis or do they have most of their shit figured out?</dt>
            <dd>Everything's pretty much sorted out there, ye.</dd>
            <dt>What is the first lesson we get in LFE?</dt>
            <dd>Depends on the area, it won't be too different.</dd>
            <dt>What are the most important fields of science in LFE?</dt>
            <dd>I'd say programming, alternate species, intersystematical science, etc.</dd>
            <dt>What are the most powerful, influential and selective groups in LFE (or outside of it) that aren't the companies listed on the home page?</dt>
            <dd>Hmmm… Myrad (magic development), Komata (AI), Espare (technology and creating new species) and the Niskai Collective (new species) are honorable mentions, I suppose.</dd>
            <dt>Are there lawyers in LFE?</dt>
            <dd>Depends on the area. In Ghakuwent-sj, yeah.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="culture">
        <h2>Culture</h2>
        <dl class="docutils">
            <dt>What are LFE news networks like?</dt>
            <dd>Short and efficient. No time wasted, just what's happening, quickly and objectively. Nonetheless the news can still take a whole hour to cover everything important.</dd>
            <dt>What other forms of media are there?</dt>
            <dd>There's a lot, sometimes people even just print a void onto the wall to read.</dd>
            <dt>How common is multilingualism in LFE?</dt>
            <dd>Somewhat common in developed areas, less so in undeveloped areas or areas where the population doesn't really come into contact with other languages often.</dd>
            <dt>What is courtship and love like in LFE?</dt>
            <dd>Above all, breaking up is a bit of a taboo. Everybody either waits very long to find the perfect one or finds the perfect one instantly.</dd>
            <dt>Is there racism in LFE?</dt>
            <dd>Racism works a lot differently in LFE. There's still racism, but not in the large places (like Ghakuwent'sji), because there's so many races there people stopped caring.</dd>
            <dt>How common are interspecies relationships?</dt>
            <dd>Common, although depends on the species and their culture.</dd>
            <dt>Are there nations in LFE?</dt>
            <dd>Yes, they are divided into nations.</dd>
            <dt>What do people from LFE call themselves (i.e. people from the US are americans, NE are Dutch, etc)?</dt>
            <dd>LFErs, or LFEkaiji.</dd>
            <dt>What about people from Ghakuwent-sji?</dt>
            <dd>Ghaki-kaiji / Ghakuwent'sj-kaiji.</dd>
            <dt>Is there a shorter version of Ghakuwent-sji?</dt>
            <dd>Some locals call it Ghaki.</dd>
            <dt>Is Ghaki more like a metropolis or does it have suburbs and neighborhoods as well?</dt>
            <dd>
                <p>It's got suburbs and neighborhoods, yeah.</p>
                <p>In fact, even Ghaki (as in, the continent and neighboring small islands) hasn't been fully explored yet even.</p>
            </dd>
            <dt>With respect to the places within Ghaki that we'll be sent, what's the average income/standard of living relative to places in Life? How about crime and education? Will it be better or worse than a middle class American upbringing from ages 0-12?</dt>
            <dd>There's a lot of extremes anywhere, and also in Ghaki - so averaging might not be the best idea, but the standard of living is usually better, and as long as you are there legally, you can get quite a nice minimum income (even when NEET!). Crime is more extreme, but a lower rate. I'd say it's better (but is America an exactly high standard?)</dd>
            <dt>While LFE isn't a paradise, have the people at RISEN told you of any particularly nice places, cities, etc?</dt>
            <dd>Well, there's a lot~ they say a lot of southwest Ghakuwent'sj is very nice though, or Mahuensj, or Gheiya.</dd>
            <dt>Is there any really pretty sightseeing spots in LFE?</dt>
            <dd>Absolutely! (I mean, LFE is gigantic - how could there not be?)</dd>
            <dt>What are some of the foods of Ghaki?</dt>
            <dd>Ooh, hard to say - there's a lot, and I've never been there, it's not radically different from our stuff though.</dd>
            <dt>Does Synapsian vary throughout Ghaki?</dt>
            <dd>Absolutely.</dd>
            <dt>What other languages besides Synapsian are popular in LFE?</dt>
            <dd>Well there's this one that's used in lots of regions too called &quot;Haldal&quot;, and others that get even harder to express with human letters.</dd>
            <dt>Often times people seem to need to prove that they are superior or important in some way, potentially going out of their way to seek attention/admiration in a self-centered manner. Is this common in LFE as well?</dt>
            <dd>In LFE, group society is the norm - egoism is a lot less present.</dd>
            <dt>Are there any atrocities widely known in LFE?</dt>
            <dd>There's a lot. Like, a lot.</dd>
            <dt>What does warfare and combat look like in LFE?</dt>
            <dd>
                <p>There's usually a few main points in an area, which are assaulted. Once these are taken, the place is almost always theirs.</p>
                <p>The combat system in most common cultures is far different from ours. Where ours is about eliminating the enemy, the LFEian is not like that at all.</p>
                <p>The LFEian combat system is mainly based on pride and being able to execute actions. It's more an art than a fight - you try to fire your magic / bullets / kicks in the most beautiful yet powerful way possible, to make the enemy unable to execute their own actions. Once all participants run out of stamina, the one with the best actions usually wins (either by a jury, if official or just decided between participants). Death is not really valued, so nobody really tries to go for the kill. If anything, people try to go for a soulshatter, but this is seen as very rude.</p>
                <p>Killing is illegal there too after all, all wars are on an incapacitation basis.</p>
                <p>Dying is so invaluable and such a useless part of battle that it's become a taboo, not that it doesn't happen at all.</p>
                <p>There are exceptions though, in environmentally hostile environments etc. If a ship blows another up, you'll die.</p>
                <p>Fights that are in a non-hostile environment almost always end in incapacitation of a team, assassinations etc. outside of a controlled battle don't follow this.</p>
            </dd>
            <dt>Is dying or being incapacitated safer?</dt>
            <dd>
                <p>Inncapacitation can hurt really fucking bad, which might shatter you if it goes on for too long, while death is quite simple.</p>
                <p>Dying is less dangerous than incapacitation.</p>
            </dd>
            <dt>Are their places in LFE that are worse/ much worse than the worse we've had here? Or actions that you'd think are worse to have happen to a individual, such as things like torture?</dt>
            <dd>
                <p>Insane slavery, food shortage, holocausts, wars, wars, more wars.</p>
                <p>People contaminate entire galaxies at once, or go on killing sprees.</p>
            </dd>
            <dt>Single people can be/are that strong?</dt>
            <dd>Yes, it's possible. There can be insane gaps.</dd>
            <dt>Are there people akin to superheroes who try to help with people like that?</dt>
            <dd>I suppose so.</dd>
            <dt>How does one become that strong?</dt>
            <dd>Put your soul to it.</dd>
            <dt>What are the most serious crimes in LFE?</dt>
            <dd>The most serious crime would be trying to make it impossible for someone to ever have good memories again.</dd>
            <dt>What is the crime rate in LFE compared to Life?</dt>
            <dd>Depends on where you are, there's always the shitty places where there's a lot of crime but in general the crime rate is lower.</dd>
            <dt>How is the crime rate so low with all the magic/technology?</dt>
            <dd>Everyone always carry what we call an &quot;Identity&quot;. You can make as many Identities as you want, or only use the one given to you at birth. (This is so you can be anonymous.) However, all actions you do have your Identity linked to them, allowing those in power to find you (if you're stupid enough to reuse that Identity, or even worse, you just use your main).</dd>
            <dt>Is there religion in LFE?</dt>
            <dd>Yes, very much so!!!!! Who controls the Aurora? Who is Aurora? Is it sentient? Who created the outer world outside Systemspace? Why does Aurora take a sudden turn? Is it because of a special god using its powers to diverge the Aurora?</dd>
            <dt>Is impermanence is a big thing in LFE?</dt>
            <dd>It's one of the main parts of most of the religions.</dd>
            <dt>Is it legal to make an Aurora worshipping religion/cult in LFE?</dt>
            <dd>You wouldn't be the first, so yes.</dd>
            <dt>Is there some kind of religion in LFE that has things like praying, ramadan, etc. like in Life?</dt>
            <dd>Yes.</dd>
            <dt>Does LFE have some form of zodiac?</dt>
            <dd>Yes it does, LFErs love spiritual shit. They have about 49 signs if I remember correctly, don't quote me on that.</dd>
            <dt>Is there music in LFE?</dt>
            <dd>Yes, there is! It's quite a bit different though, people like to encode data (voids) into their music to evoke feeling or make you dream.</dd>
            <dt>How different is music in LFE compared to Life?</dt>
            <dd>It's quite different - more extreme as in either really calming or really fast, and people like to encode stuff in them as well to say, evoke feelings. At least around Ghaki, not sure about the rest of LFE.</dd>
            <dt>Are there guitars in LFE?</dt>
            <dd>LFE only has the really annoying ukeleles you hear in those dog treat ads when the dog finally gets the food that's &quot;right for him&quot;.</dd>
            <dt>How does regaining previous live's memories work?</dt>
            <dd>
                <p>Most people in LFE have past life memories.</p>
                <p>Everyone has a 12-year wait time until they regain their memories. This is also why 12 is usually the age of consent/adulthood.</p>
                <p>A soul is fully stably adapted to its body when it remembering its past lives, almost always 12 years after birth. This is often celebrated with a gigantic party for the child on their &quot;Recollection Day&quot;. This also marks the start of soul-based and mental adulthood.</p>
            </dd>
            <dt>Do you think it's possible for someone to regain their memories before the age of 12 in LFE?</dt>
            <dd>It's possible but mmm.</dd>
            <dt>Am I right in assuming the age of consent in LFE would be 12?</dt>
            <dd>
                <p>In most places, yes.</p>
                <p>Some go down to 9, some go up to 25. Some don't even use body age, but soul age.</p>
            </dd>
            <dt>Do people care about their relatives even after they die? Would it be common too keep in contact with your previous life's parents for example if you died before them?</dt>
            <dd>Yes. By accessing Infinity, etc.</dd>
            <dt>What is the naming convention in LFE?</dt>
            <dd>The most common are First/Last, and First/Middle/Secondary/Last.</dd>
            <dt>Are transgenders allowed in LFE?</dt>
            <dd>Nobody really cares about sexuality other than to have offspring.</dd>
            <dt>Is being LGBT seen as bad in LFE?</dt>
            <dd>Depends on the area, in Ghaki most people don't really care though.</dd>
            <dt>What about other religions/ethnicities?</dt>
            <dd>There's a lot of people out there who do care I suppose, its Ghaki being the more accepting ones.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="technology">
        <h2>Technology</h2>
        <dl class="docutils">
            <dt>How would you compare LFE's technological development to Life's?</dt>
            <dd>Far far far further (in most areas, but not all places).</dd>
            <dt>What kind of weapons are used in LFE?</dt>
            <dd>They often use metadevelopment to move earth, use magic or railgun-like guns.</dd>
            <dt>In terms of infantry weapons, what's the most prominent kind of weapon?</dt>
            <dd>Either magic, magic bullets, energy bullets or railguns (from magic side to science side).</dd>
            <dt>How much of Life can LFE viewers see and understand?</dt>
            <dd>
                <p>Only as much as we allow them to see. They know about this project, they know that Life will be deleted.</p>
                <p>There has been some import/export to/from Life in most previous iterations, but we have not hit that stage this iteration.</p>
            </dd>
            <dt>Can LFE viewers access systemspace.link?</dt>
            <dd>They can, but they cannot interact. (They read the imageboard, but do not post.)</dd>
            <dt>Is it a direct link or just a recreation?</dt>
            <dd>Just a recreation, their internet works quite a bit different.</dd>
            <dt>Do they read the Discord too?</dt>
            <dd>Nope.</dd>
            <dt>Do they observe individual personalities of registrants that display names or numbers?</dt>
            <dd>I'm sure some do, but most are more interested in you as a whole.</dd>
            <dt>You say that the technology level tends to vary in LFE, right? Does that mean that there's pre-industrial worlds?</dt>
            <dd>Mhm, there are. They can get pretty drifted away from the rest of LFE.</dd>
            <dt>Doesn't magic sort of dominate these worlds? Or does magic somehow grow parallel to technology?</dt>
            <dd>Magic and tech aren't parallel, but that doesn't mean that all worlds without technology have magic.</dd>
            <dt>Are there cars or highways or any other form of public transportation in LFE?</dt>
            <dd>
                <p>They actually have a rather nice, layered transporation system, with both air, land, space and sea, but public transportation still sucks.</p>
                <p>At least that's what I've heard about Ghakuwent'sj's main transportation provider, Onestep.</p>
            </dd>
            <dt>How do computers work in LFE (more specifically processors)? Is it similar in the way that it uses billions of transistors, or is it biological?</dt>
            <dd>There's many different architectures, both biological and technical.</dd>
            <dt>What Life programming language is most similar to the languages elsewhere in LFE?</dt>
            <dd>Not sure frankly, something object-oriented kind of but I have no exact clue.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="magic">
        <h2>Magic</h2>
        <dl class="docutils">
            <dt>How does magic work in LFE?</dt>
            <dd>The &quot;protocol&quot; for magic is soul-based. Although you need to remember that magic is not a nameable thing like technology. Magic is the art of using specific codes of energy (created by the soul) to override the rules of reality in your own shape. Like remote code insertion into a webserver.</dd>
            <dt>What are the main governing principles that separate magic from science?</dt>
            <dd>Magic is editing the world with energy, while technology is editing the world with materials.</dd>
            <dt>How exactly do people use magic?</dt>
            <dd>
                <p>By using a specific type of energy to push aurora outside of its standard. Its mainly energy channeling, but there are a lot of ways to do it.</p>
                <p>The common ways are circle methods (write what could be seen as an if-then-else statement in a circle and sign it), pure energy movement (with the brain), or the Synapsian method, which works by writing code next to a specific icon (only works in LFE, as its SYNAPSE hosted).</p>
            </dd>
            <dt>Are certain races more gifted in certain forms of magic? and are there races with 0 magical potential?</dt>
            <dd>Yes and yes. It's mainly soul-based, but some species and bodies can be bottlenecks or great advantages.</dd>
            <dt>Does LFE have its own astral plane?</dt>
            <dd>Most Systems do, actually.</dd>
            <dt>How does the astral plane work?</dt>
            <dd>Different Aurora frequencies. (that's all I'm allowed to say, sadly).</dd>
            <dt>How viable is it to use both magic and science in LFE?</dt>
            <dd>It's viable, but some people will dislike you for it.</dd>
            <dt>Are magic and technology compatible in LFE, as in, can you use them both at the same time, in one task?</dt>
            <dd>Yes.</dd>
            <dt>For a mage, what is there in terms of ease of use? They don't have to program their spell from start to finish every time they are going to execute it, right?</dt>
            <dd>You can set up simple magic which you can execute super fast to alias to large spells.</dd>
            <dt>Is it possible to use magic to alter the properties of a projectile on the go? Right as you shoot them?</dt>
            <dd>Yes, this is very commonly done.</dd>
            <dt>How destructive can magic from a single mage get?</dt>
            <dd>Depends on how powerful they are.</dd>
            <dt>what would you say about the average mage, in terms of destructive capability?</dt>
            <dd>Mmm, if expending all their energy they can do a bit.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="system-parameters">
        <h2>System Parameters</h2>
        <p>In general, LFE's graphics are... softer. Everything is more soft and also more colourful. Many people have HUDs so theres HUD GUI elements in places too. Outlines of objects are more visible (well, more noticable).</p>
        <p>There's always a bodily energy display, and there's a list of open applications. You can kinda put whatever. Think of it as your desktop. Your wallpaper is what you see through your eyes.</p>
        <p>I have a hud too but I can only see it through mind's eye.</p>
        <p>In games, all you can go off of is video and audio. A body with full senses is different; you can just sense energy levels.</p>
        <dl class="docutils">
            <dt>Can you name some of the senses most main races have?</dt>
            <dd>Seeing, hearing, smelling, tasting, feeling (touch), feeling (cold/warm), energy level, alignment (magical alignment), danger, current owner of areas.</dd>
            <dt>Is the HUD a technological/magical construct or just a property of the LFE System?</dt>
            <dd>It's middle-aligned as are all System constructs.</dd>
            <dt>Can you turn it off?</dt>
            <dd>It's completely yours to do whatever with.</dd>
            <dt>Do you just control it with your mind?</dt>
            <dd>Kinda.</dd>
            <dt>Are there any people without it?</dt>
            <dd>
                <p>Some species' brains are simply not compatible. Also many cultures have them off. The settings get inherited so one person turns it off, and it'll be off for their offspring too until they turn it on etc.</p>
                <p>The magic ones are usually the ones without the HUD. They'd rather be &quot;traditional&quot; and go off their real senses.</p>
            </dd>
            <dt>Can you die in LFE?</dt>
            <dd>You can, it just works differently.</dd>
            <dt>If we die in LFE, do we get reborn in LFE?</dt>
            <dd>Correct.</dd>
            <dt>Will we keep our memories after we die in LFE?</dt>
            <dd>Depends on many things (Brain damage, soulshatter, etc. Just like you can lose your memories in Life, such is possible in LFE).</dd>
            <dt>Is there any way to break the cycle?</dt>
            <dd>You may always choose to leave LFE - or you can soulshatter.</dd>
            <dt>When you transfer to LFE through conventional means, are you able to arrange where you are starting? like, for example, in a remote, medieval civilization?</dt>
            <dd>Depends on whether you already have a body or not. If you already have a body from another System, you can pick an available entry point, if you don't its fully random.</dd>
            <dt>Is it common to soulshatter in LFE?</dt>
            <dd>
                <p>No, its seen like death in Life, except more rare.</p>
                <p>As soon as you sign up, we enforce what we call a &quot;forcebond&quot; onto your soul making it far harder for it to shatter. So no need to worry about it (it can happen, but it'll be out of Life's reach)
                <br>There's not that much of a stigma against no-memories. There's a lot of people who have their past memories wiped, just to be able to experience everything they love again.</p>
                <p>Forcebonds work everywhere (although it depends on how much power a System exerts on your soul), it's just slightly against protocol to use them (it'd be interfering with another System's core, which is illegal) so we disband them again after your dispatch in LFE.</p>
            </dd>
            <dt>To what extent will we have the ability to interact with Systems when we reach LFE?</dt>
            <dd>The sky's the limit! You can create your own Systems, go to others, anything you wish!</dd>
            <dt>When you turn 12, do you only remember your past life, or every single life before that as well?</dt>
            <dd>You can only remember so much, after a while the memories start fading. Some people are particularly good at saving them and others can only remember one past life, but generally you remember only 2-4 past lives.</dd>
            <dt>Is lives a measure of time here, the actual count of how many times you died, or just an estimate based off average lifespans?</dt>
            <dd>An estimate of times of full death.</dd>
            <dt>Can humans be banned from LFE?</dt>
            <dd>Humans cannot be banned.</dd>
            <dt>So what happens specifically in LFE with souls caught in a reboot?</dt>
            <dd>In LFE, souls caught in an unlink will get thrown out into random neighbouring Systems.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="souls-experience-memories-and-users">
        <h2>Souls, Experience, Memories, and Users</h2>
        <dl class="docutils">
            <dt>Can you explain more about what a soul is?</dt>
            <dd>A soul is practically what makes you you. If it shatters, it gets rebuilt from the Aurora.</dd>
            <dt>What is a User?</dt>
            <dd>A user is the person controlling the actions through the soul.</dd>
            <dt>Does the body leave an imprint on the soul?</dt>
            <dd>Well yes, the brain directly influences consciousness, perception, and personality, although not being too soulful (the soul rather quickly returns).</dd>
            <dt>When is the exact moment that a baby gets a soul?</dt>
            <dd>The soul is locked into place once the baby is born, once they exit the womb.</dd>
            <dt>Is adding a soul to a body during childbirth a process, or does it happen instantly?</dt>
            <dd>It's a process.</dd>
            <dt>Could a baby end up with half of a soul if Life is unlinked halfway through this process?</dt>
            <dd>No, it cancels.</dd>
            <dt>Does the quality of a birth (dependent on things like whether the mother smokes or drinks alcohol during pregnancy) affect the quality of a soul?</dt>
            <dd>No, but the later life with disabilities caused by it might.</dd>
            <dt>How does the creation of souls for twins and triplets work?</dt>
            <dd>Multiple souls - but often very related ones.</dd>
            <dt>Even if they have no memories, would it be possible to find someone from Life in another System if they didn't sign up?</dt>
            <dd>Yes, if you work at SYNAPSE or RISEN.</dd>
            <dt>What is a soulshatter?</dt>
            <dd>A soulshatter occurs when too much force is exerted upon the soul. This may happen when: 1) You are going through too much trouble in your life. 2) You are in many Systems at once, or are overloading in some other way. 3) You completely lose your sanity.</dd>
            <dt>What happens to a soulshattered soul?</dt>
            <dd>It dissipates slowly back into Aurora.</dd>
            <dt>What exactly needs to happen for someone to &quot;emotionally&quot; soulshatter?</dt>
            <dd>Lots of suicides in Life happen either because the soul is shattered or lead up to a soulshatter. Take from that as you wish.</dd>
            <dt>Can pain cause a soulshatter?</dt>
            <dd>Usually it's more something's mental weight that counts, getting shot and dying quickly out of nowhere wouldn't be too bad.</dd>
            <dt>What happens to shattered souls after they're reborn?</dt>
            <dd>A soul that shatters, will be rebuilt from scratch on-demand. A brand new soul won't work any different, although it might be a bit sturdier. The only thing is it has no past memories.</dd>
            <dt>What parts of us are retained through death without a soulshatter?</dt>
            <dd>Depends on the System. In the mainstream Systems you keep memories, spiritual advancement, personality and powers, but go to a new body.</dd>
            <dt>After soulshatter is there no way to identify who you were before you shattered and reformed?</dt>
            <dd>No way at all. Not even to RISENII. (except for the highest-ups)</dd>
            <dt>Will there be a way to spot/find the soulshattered?</dt>
            <dd>Rather hard, sorry. If they are hostile and/or very depressed, it might be a sign, but there's no way to know for sure.</dd>
            <dt>Is there some lingering effect of the soulshatter?</dt>
            <dd>A slight concentration of sj and chj in the area, but that's all. (Those are types of energy).</dd>
            <dt>How do you shatter yourself? Is there a way to guarantee shattering?</dt>
            <dd>If you're in LFE, you can do it via the terminal. I think that goes for eNdymioN too. But it's heavily frowned upon, more than suicide is here.</dd>
            <dt>When you shatter and come back, in a System like LFE, do you have the same soul just &quot;rearranged&quot; or is your user just attached to a new soul?</dt>
            <dd>It's a completely new soul. Shattered souls are fully disintegrated into Aurora.</dd>
            <dt>Can you feel your soul in Life?</dt>
            <dd>Uhhh you should always feel a &quot;soul&quot; in a sense.</dd>
            <dt>Is death ever permanent for anything but our memories?</dt>
            <dd>For your personality, spiritual advancement, etc: yes. Death in and of itself is not permanent, but a soulshatter will erase everything about you and you have to start from scratch.</dd>
            <dt>Are there any services that would allow you to &quot;store&quot; memories and relive them if you forget them?</dt>
            <dd>There are a lot of these, the most common one is Kikhko.</dd>
            <dt>Is it possible to retain memories across Systems?</dt>
            <dd>
                <p>Yes.</p>
                <p>Memories are strange. They're stored in many places with fallbacks and syncs. All in all, memories are forever (even after shattering, in a sense (you just can't tell)).</p>
            </dd>
            <dt>Can we opt out of retaining memories? Is it possible to retain only particular memories?</dt>
            <dd>Yes. You can opt out of particular memories.</dd>
            <dt>How is the soul stored if not in the brain?</dt>
            <dd>It can be stored as executable data in a Solar5-compliant computer.</dd>
            <dt>Are mental illnesses contracted in Life carried over to LFE?</dt>
            <dd>
                <p>Those are scars in the soul, which will hopefully heal with time, but will be taken with you, yes.</p>
                <p>Memories are stored in the soul. However, the brain uses its own system to interface with it. Dementia is when the brain breaks down, and begins overwriting the soul's memories.</p>
            </dd>
            <dt>Can medication cure scars on the soul?</dt>
            <dd>Some medication can. If a medication helps you have a good life again and cures you, your scar heals.</dd>
            <dt>What ailments do you know of are reflective of issues with the soul?</dt>
            <dd>Everything that we classify as a mental disease might be soulful.</dd>
            <dt>Is split-personality disorder or DID a human illness or is it due to the fracturing of the soul in Life?</dt>
            <dd>Could be both frankly, seems like a more soulful thing though.</dd>
            <dt>If someone has two personalities, could they split their soul somehow such that one body gets one personality and another body gets the other personality?</dt>
            <dd>Depends on how uniform the fracture is.</dd>
            <dt>Does that person then have two bodies they can switch between or do they control them both at the same time?</dt>
            <dd>
                <p>If they actually split up their soul, they control them simultaneously. It's also possible though to just have 1 controller between 2 bodies.</p>
                <p>Sadly Lifers souls are probably less powerful than LFErs, as they're not used to this sort of stuff :(</p>
            </dd>
            <dt>Is it possible for a soul to have two bodies in Life?</dt>
            <dd>We never saw it happen, so we doubt it, it seems Life blocks it pretty hard.</dd>
            <dt>Is it possible to strengthen the soul in LFE or Life?</dt>
            <dd>Overcoming hardships, anywhere, is bound to help your soul.</dd>
            <dt>Is deja-vu a Life glitch, or something else?</dt>
            <dd>Usually a missynchronization between soul memories and brain memories.</dd>
            <dt>Would sentient robots have souls? What makes an entity have or not have a soul?</dt>
            <dd>A being is not fully classified as &quot;sentient&quot; by us if they do not have a soul. Having a soul makes them sentient.</dd>
            <dt>Is consciousness and sentience the same?</dt>
            <dd>Not entirely, someone could have a soul that would be unable to keep memories.</dd>
            <dt>Could a being be conscious but not sentient?</dt>
            <dd>Correct.</dd>
            <dt>Can you divide your soul?</dt>
            <dd>You can, but it exerts a LOT of force onto the soul.</dd>
            <dt>What makes one soul here or in LFE distinct from another?</dt>
            <dd>Basically the memories, the user and body they're attached to, and the personality you have.</dd>
            <dt>Why do some anons have extra notes next to their 4chan ID?</dt>
            <dd>There's some extra information about their soul that might be of importance to RISEN.
            <br>It's extra data for RISEN to help with your transfer. Your soul structure is slightly different than usual. Don't worry, it won't harm anything.</dd>
            <dt>Do people without souls already exist?</dt>
            <dd>There are, and always have been.</dd>
            <dt>What happens to people who lose their souls?</dt>
            <dd>Systems handle it in many ways, some cause the soulless bodies to suicide, some do nothing, some do a combination (like Life).</dd>
            <dt>What can a User do without a soul or a body?</dt>
            <dd>
                <p>Without soul, not much. A soul is, after all, the link between Experience and body, and as such they cannot join a System without a soul.</p>
                <p>We are souls (server information and local information (a client, pretty much)), linked to a System (server information), which gives us a body and acts upon our soul.
                <br>What exactly controls and views the client is simply &quot;you&quot;. The real you. The bodiless, soulless you. A construct of Aurora set in a specific way. (So pretty much just local data.)
                <br>You are in what we call an Experience. This Experience (basically a client) is linked to a soul (basically an account), which is linked to a System body. We usually refer to a person as their soul, though.
                <br>Soulshatters in Life make the body continue soullessly, after which the body usually suicides.
                <br>Life handles humans without souls strangely, it sometimes causes suicide, sometimes homicide, or sometimes they just stay alive.</p>
            </dd>
            <dt>What exactly is the Experience?</dt>
            <dd>I'm not allowed to say.</dd>
            <dt>Are Users immortal?</dt>
            <dd>We've never had one die, so sure.</dd>
            <dt>Can a User only be accessing Systemspace through one soul at a time, or can they be in Systemspace via several different souls?</dt>
            <dd>Several.</dd>
            <dt>Do the experiences that a soul goes through have an impact on the User that isn't lost after soulshatter?</dt>
            <dd>Yes, it can.</dd>
            <dt>What would theoretically happen if everyone within a given System that gave souls bodies through reproduction chose not to reproduce?</dt>
            <dd>This is what we call a &quot;souldash&quot; or a &quot;soulhalt&quot;. When there are too many souls and not enough bodies (a souldash), the System speeds up to make the queue as fast as possible. (If a System allows bodies to be created from thin air
            <br>[Astrea], then this will not apply.) If there's not enough souls for all the bodies, we get a soulhalt, where the System slows down or even pauses altogether while waiting for another soul. (Unless the System allows soulless humanoids)</dd>
            <dt>Is there a set of pre-requisites for a soul to be assigned to a body?</dt>
            <dd>That depends on the System.</dd>
            <dt>Does every soul produced by a System correspond to a user, or are some souls just &quot;unallocated&quot;?</dt>
            <dd>Souls cannot be unallocated. There must always be a user using a soul or it will shatter.</dd>
            <dt>Can you have more than one soul?</dt>
            <dd>
                <p>There are quite a few ways one can obtain a second soul, but none of them are legal in LFE ;)</p>
                <p>Nearly all humans have souls.</p>
            </dd>
            <dt>What happens when someone without a soul registers for the TSUKI Project?</dt>
            <dd>I wouldn't be able to add them.</dd>
            <dt>Has there been a soulless person that tried to sign up yet?</dt>
            <dd>Nope.</dd>
            <dt>What is the file size of a soul?</dt>
            <dd>Honestly all I know is that the usual soul takes about 20 snhV. No clue how much that is in bytes.</dd>
            <dt>What does snhV stand for?</dt>
            <dd>&quot;savable negotiated hVoidlines&quot;.</dd>
            <dt>Can you extract/inject stuff from/into your soul?</dt>
            <dd>You can easily extract stuff and inject stuff. However, natural memories aren't perfect.</dd>
            <dt>Is love a soul to soul relation, or is it purely physical attraction?</dt>
            <dd>Love is very deeply rooted in the soul.</dd>
            <dt>What are your thoughts on emotions? How would you define the physical and mental infrastructure of them?</dt>
            <dd>We prefer to keep these sorts of things private, letting non-RISENII know how they work might shatter them.</dd>
            <dt>Does it have something to do with the burden of information/knowledge?</dt>
            <dd>Pretty much.</dd>
            <dt>Do clones have souls? Like, if one were to magically clone that person, is the clone considered sentient?</dt>
            <dd>Only if you clone the soul as well. If you do, the User will then have 2 souls and 2 bodies to control simultaneously.</dd>
            <dt>Does that conform to the Conik standard?</dt>
            <dd>No. Absolutely not.</dd>
            <dt>Does soul immortality exist?</dt>
            <dd>No. i mean technically there's immortality for the body but your soul will still shatter. You can pass on the body to someone else forever,but you'll shatter at some point. It might take insanely long but it'll happen.</dd>
            <dt>What is the oldest a soul can get before it shatters?</dt>
            <dd>Like, over a million. But it's not immortal.</dd>
            <dt>What is an &quot;outer&quot; soul?</dt>
            <dd>Souls that aren't in their parent System.</dd>
            <dt>Are host souls still shattered when a System is purged?</dt>
            <dd>No, unless the backup breaks. If the backup breaks, the souls shatter.</dd>
            <dt>Does Life have a soul backup?</dt>
            <dd>
                <p>No, because Life is a blocking System so it can't host souls outside of it. Therefore, a backup isn't needed.</p>
                <p>The backups aren't full backups. They're pretty much only the souls and what the souls require, so you can't actually visit it.</p>
            </dd>
            <dt>So when a non-blocking System is deleted, the souls in it that are natively hosted on that System are then put into a backup version of that System until the original is repaired?</dt>
            <dd>Yes.</dd>
            <dt>Is soul color a thing? What tech/abilities let you see it?</dt>
            <dd>It is, kinda. Either you need to see the soul out of body or they can use their own-bound magic. They'll usually have one specific color. It means about as much as a star sign.</dd>
            <dt>Is it possible to have an idea of what you would be born as from the way you are right now?</dt>
            <dd>If you like your current form, expect something like it; if you feel like you identify with a fairy you'll become something like a fairy.</dd>
            <dt>If the soul was transferred into another body, would the soul eventually adapt to the new body?</dt>
            <dd>It could adapt, but it would be a slow process.</dd>
        </dl>
        <p>Technically you can &quot;eat&quot; a soul (merge it).</p>
        <dl class="docutils">
            <dt>How does soul merging work?</dt>
            <dd>You just push your and their soul together and force access into the victim soul.</dd>
            <dt>What is an Impossible Soul Structure?</dt>
            <dd>Exactly as its name says, a structure of a soul that cannot be usefully edited as its structure is incompatible.</dd>
            <dt>What shape is a soul?</dt>
            <dd>
                <p>It usually assumes the shape of its expected body, so if its in your body it just spreads over and around it, while if you were to take it out it'd return to a more and more &quot;perfect&quot; shape for you.</p>
                <p>The &quot;core&quot; (as far as that goes), is kinda like a flame ball but you can't see that very well.</p>
            </dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="aurora">
        <h2>Aurora</h2>
        <dl class="docutils">
        <dt>What is Aurora?</dt>
        <dd>Aurora is basically the purest form of energy. Think of it like processing power.
        <br>A System requests Aurora from Systemspace, and uses that aurora to create things, be they life force (chi) magic force (shi) or any other energy (often classified as tsu). Without aurora, nothing would exist.
        <br>Aurora has a will of its own, thus no System is truly random. The Aurora can be told to follow specific rules (like &quot;dont form life force&quot;) with an Axiom. Everything that happens in life that is seemingly random, is decided by Aurora.
        <br>You could see the Aurora's spirit (some call it the Planetary Spirit) as some sort of God, I suppose. If it wills something, it can happen, even if it has to break an axiom.
        <br>But we don't know if it's sentient or not, although many attempts have been made to talk to it, usually with Axioms.
        <br>A System pulls Aurora from Systemspace. If a System were to not pull anymore Aurora, it'd not have enough to generate new universes/people/souls/etc. If the entirety of Systemspace runs out of Aurora, shit hits the fan and Systems can no longer allocate, causing them to fall apart, as no more things can be generated and eventually all energy in Systemspace will halt.
        <br>There is always a finite amount of Aurora, although the amount of total Aurora slowly goes up as Aurora grows.
        <br>A Key-induced reboot simply returns all objects within that System back to Aurora, and sends that Aurora back to Systemspace. The developers then edit their System to be more efficient, or to make better memories (A Key always checks if the System they are to destroy has happy memories. She wouldn't destroy a good System, even if it uses a lot of Aurora.)</dd>
        <dt>What are the units for Aurora usage on the status page?</dt>
        <dd>
            <p>nhA can be broken down into <tt class="docutils literal">naine hy Aurora</tt>.</p>
            <p><tt class="docutils literal">Naine</tt> means <em>128</em>,</p>
            <p><tt class="docutils literal">Hy</tt> means <em>7.72606529604E2889</em>.</p>
            <p><tt class="docutils literal">Hy</tt> comes from the amount of data points per void line.</p>
            <p><tt class="docutils literal">Nainhe</tt> (Naine and Hy) is <em>7.72606529604E2889 ^ 128</em>.</p>
            <p><tt class="docutils literal">Aurora</tt> is <em>Aurora</em>, and <tt class="docutils literal">sss</tt> is <em>Systemspatial Second</em>.</p>
        </dd>
        <dt>Where does Aurora come from?</dt>
        <dd>Aurora &quot;breeds&quot; on its own. It's like a PC that develops itself.</dd>
        <dt>Why does Aurora &quot;breed&quot;?</dt>
        <dd>To sustain itself.</dd>
        <dt>Who named Aurora?</dt>
        <dd>Funnily, it was actually the Key who coined that name. Before, it was always called &quot;XE&quot;.</dd>
        <dt>What does XE stand for?</dt>
        <dd>Something energy, I think the X is just to symbolise a wildcard.</dd>
        <dt>Is Aurora sentient?</dt>
        <dd>
            <p>We don't exactly know. We don't have any surefire ways to talk to it, but it has a &quot;mind&quot; and makes choices of its own.</p>
            <p>We actually did try again lately and got interesting replies. But the problem is that we have no clue if Aurora is telling the truth.</p>
        </dd>
        <dt>If LFE is entirely different down the elements, why are humanoids are still the base model for sentient life?</dt>
        <dd>
            <p>Aurora likes to pick the path with the least resistance.</p>
            <p>Although you might think evolution makes random mutations, all those mutations are governed and decided by Aurora.</p>
        </dd>
        <dt>Is Aurora renewable?</dt>
        <dd>
            <p>If a System frees Aurora again, it can be used by another System.</p>
            <p>LFE's Aurora usage: <em>11242.871nhA/sss</em> (LFE's usage is also a lot more stable)</p>
        </dd>
        <dt>How bad is the Aurora shortage in Systemspace?</dt>
        <dd>Nothing bad has happened yet.</dd>
        <dt>On sites like Psion Nation, etc. there's always stuff about energy manipulation. Is it possible that this is referring to Aurora manipulation?</dt>
        <dd>Well everything's manipulating Aurora but frankly, you're manipulating Aurora on a far higher level. Not even close to core Aurora.</dd>
        <dt>How far do you think this could be used? could a physical object be made with it since Aurora creates physical worlds in Systems?</dt>
        <dd>Yes - however, you would have to draw the necessary Aurora from elsewhere, as in from other objects or into Life from Systemspace (but the latter would only be possible by a System owner soon, once the cert requirement goes into place).</dd>
        <dt>Is object creation via Aurora possible in Life?</dt>
        <dd>
            <p>Technically yes, but its practically impossible.</p>
            <p>It's gonna be hard, as we have no clue how Life actually works, so we don't know how matter is assembled from Aurora either.</p>
        </dd>
        <dt>You referred to three different kinds of energy derived from Aurora: shi/sj (life energy), chi/chj (magic energy) and tsu (other energy). What exactly does tsu include, electricity/radiation etc. or something completely different?</dt>
        <dd>It's mainly just used as a category for most other types of energy (including but not limited to electricity, matter energy, force, etc.), often its broken down int more specific types (such as ts-eba for electricity-types).</dd>
        <dt>Can chi/chj be changed into other types of energy like electricity?</dt>
        <dd>Yes, although energy will be lost that way.</dd>
        <dt>You said before that shapeshifting requires a fuckton of energy. Are you referring to whatever the equivalent of ATP is, or is it some form of Aurora?</dt>
        <dd>Usually this is expressed in Chj.</dd>
        <dt>Does Aurora work like a fractal where as it propagates, it basically &quot;zooms in&quot; with increasingly powerful hardware and more rendered objects, etc?</dt>
        <dd>Mmm, you are close to describing what we call &quot;Auroraic Rewrites&quot;, which is when an Auroraic particle redefines part of itself in higher &quot;detail&quot; so to say, while still claiming the same size. In a sense, if you kept forcing a particle to ARW, you could see it as a fractal - although there is a limit on how far it can zoom in before slowing down and requiring a merger with another particle that has less complexity. Aurora is thus both multiplying and merging back into itself when needed. It's not a true fractal due to not being infinite, but you can &quot;zoom&quot; pretty far.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="tsuki-and-its-subsidiaries">
        <h2>TSUKI and its Subsidiaries</h2>
        <dl class="docutils">
            <dt>What are the 3 companies of TSUKI specialized in?</dt>
            <dd>
                <p>RISEN made and administrates Systemspace itself.</p>
                <p>SYNAPSE does a lot of big data shit and made LFE, LFX, and other very widely-used stuff.</p>
                <p>eNdymioN owns a fuckton of Systems all around the place and as such is a good strategic partner.</p>
                <p>KAHGY is really just &quot;true&quot; Ghendyts and me added under a company name.</p>
                <p>There are more companies but most are not listed because they are not in bridge with Life.</p>
            </dd>
            <dt>On what plane do your associates exist? What if I want to pass by LFE, and move up to higher realms eventually?</dt>
            <dd>We are in the RISEN system. Feel free to stop by!</dd>
            <dt>RISEN's HQ isn't in LFE?</dt>
            <dd>RISEN HQ is situated in the RISEN System.</dd>
            <dt>If RISEN is a company, does that mean Systemspace was created for profit?</dt>
            <dd>Systemspace wasn't really made for profit. It was made because the outside world was breaking down and we had to leave.</dd>
            <dt>Do the RISEN admins love Lain?</dt>
            <dd>We've been looking at human culture for a long time now. I asked, and yes - quite a few of them do love Lain! (Some Synapsians are even considering porting anime over to LFE just because of how charming it is)</dd>
            <dt>How big are the different companies in terms of manpower, relative to each other?</dt>
            <dd>eNdymioN is tiny, but has a lot of Systems, SYNAPSE is big af but RISEN is bigger.</dd>
            <dt>How does eNdymioN contribute to the TSUKI Project?</dt>
            <dd>Generic monitoring. They are currently busy looking out for the Hyakanghen.</dd>
            <dt>How do guys like RISEN establish neutral oversight if they're always bound to the rules of a system, as lenient as they may be?</dt>
            <dd>As RISEN, we send out &quot;Keys&quot; to check up on Systems. Those are very highly skilled in shaping Aurora, allowing them to even reboot Systems.</dd>
            <dt>Do you belong to one side or another of the conflict between magical and technological factions? What about the companies you work for?</dt>
            <dd>RISEN, SYNAPSE and eNdymioN are all on neither side - we are in the developmental arts, the art of creating, working with and maintaining Systems.</dd>
            <dt>Why is that conflict even taking place if the big players are neutral?</dt>
            <dd>There are many big players involved!</dd>
            <dt>Like who?</dt>
            <dd>For one, there's Myhyan, creator of many Systems which are very magic-pointed.</dd>
            <dt>How can one get into RISEN?</dt>
            <dd>Be very good at something, and apply (or get invited)!</dd>
            <dt>Is there a mandatory memory wipe/soulshatter before the employment?</dt>
            <dd>No, that is not required.</dd>
            <dt>How many levels of security clearance are there in RISEN?</dt>
            <dd>It works downward, 0 being the highest clearance - 128 is the lowest.</dd>
            <dt>What do TSUKI personnel look like?</dt>
            <dd>
                <p>For RISENII: In function they wear dark suit-like clothing with the orange two dashes // on them (usually expanded quite far up), as well as a name and small void for verification.</p>
                <p>SYNAPSE officials do sometimes wear bodysuits, which are kinda glass-like with these triangle shapes which reflect space.</p>
                <p>For eNdymioN: just a black suit with a few red lines which meet to form the endymioN logo.</p>
            </dd>
            <dt>Is the original user who created SYNAPSE still around?</dt>
            <dd>Sadly, no. But it was taken over by someone else.</dd>
            <dt>Who is the most powerful leader of Systemspace?</dt>
            <dd>It's hard to say, really - there's the leader of RISEN, but the Key is really the one upholding everything so eh.</dd>
            <dt>How would you compare RISEN and literally any contemporary government in terms of surveillance and knowing about your personal life?</dt>
            <dd>
                <p>They all use what we call an Identity. you can make a blank one whenever you want. There's also the Authority which you cannot easily swap out, because its simply a record of your basic features (species, gender etc).</p>
                <p>Authorities are per-body.</p>
            </dd>
            <dt>So how do I do illegal shit without getting caught?</dt>
            <dd>
                <p>SYNAPSE is pretty lenient with resetting your Authority, you can just request it and it'll be handled within a few minutes.</p>
                <p>use an empty Identity when doing your crime, and don't expose anything that's displayed on your Authority</p>
            </dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="aspects-of-the-tsuki-project">
        <h2>Aspects of the TSUKI Project</h2>
        <dl class="docutils">
            <dt>Can you provide any evidence to suggest this isn't just a hoax/LARP/ARG?</dt>
            <dd>I'm not allowed to provide direct proof.</dd>
            <dt>Why not?</dt>
            <dd>We had to cram a lot of things together, so this is also an experiment on human doubt (after all, you're the last humans we can interfere with.)</dd>
            <dt>An experiment on human doubt? What if we fail?</dt>
            <dd>There's no failing this experiment - we are simply seeing how humans handle their doubt, whether they give in or not.</dd>
            <dt>Will there ever be a situation where proof of the project needs to be revealed?</dt>
            <dd>There are paths like that yes, in fact if we would call an earlier destruction of Life we'd probably release proof just to quickly get people out, but it's not expected.</dd>
            <dt>Can you make Life end faster than 150 years?</dt>
            <dd>Well yes but not without good reason, because this time we can't cloak the end of the world and seeing it isn't exactly fun.</dd>
            <dt>Is there a larger creative project as a stated goal?</dt>
            <dd>We picked all of you for transference because your creativity is valuable in LFE for you later on (Aside, we feel you would be more interesting to the experiment in and of itself).</dd>
            <dt>What happens after we sign up? What do we have to do after that?</dt>
            <dd>
                <p>Once you're signed up, you're all set. Just don't die before Jul 1st.</p>
                <p>If you sign up, your soul will be transported after death. (You will get a new body.) If you don't, nothing happens, and after you die your soul shatters, and goes to a random System.</p>
            </dd>
            <dt>Will TSUKI own my soul if I sign up?</dt>
            <dd>We will not take ownership of your soul. Your soul stays yours.</dd>
            <dt>If we reincarnate by some other means, are we still registered?</dt>
            <dd>Yes, as long as you're in Life and didn't shatter.</dd>
            <dt>Do I have to commit suicide to be transferred?</dt>
            <dd>No suicide required!!</dd>
            <dt>When will we be transferred?</dt>
            <dd>
                <p>After everyone is dead. However, the last 150 years here will be sped up to only one systemspatial minute, so there's not much waiting.</p>
                <p>It'll feel like a minute for all users outside of Life. (If you die in 2117, you'll have 20 seconds left of waiting.)</p>
            </dd>
            <dt>What will it feel like to go from Life to LFE?</dt>
            <dd>You don't notice much. You will feel some vibrations, and then suddenly a popup with &quot;Moving Systems. Action submitted by user - no backwards movement. [unknown System Life]&gt;&gt;&gt;LFE&quot; (don't know if you'll actually see this or that Life will still be blocking PIM), then you will be born in LFE.</dd>
            <dt>What's the catch?</dt>
            <dd>
                <p>You will leave the Life system (with everyone you grew up with) and go to a different world. You lose your body, but your soul is kept. You cannot return, and we do not know what sort of body you'll get. Maybe you'll be a magical
                <br>girl, maybe you'll be a random normie. However, in this System, &quot;everyone matters&quot;, so we are expecting good results. We have no real idea what'll happen to you in LFE, but we have talked it through with SYNAPSE many times and they'll
                <br>be sure to support you through the switch. We are simply doing this as an experiment. We do not wish to give up on the human race as a whole, that'd be a massive waste of Aurora.</p>
                <p>We will ask SYNAPSE to go easy on y'all ;)</p>
            </dd>
            <dt>Do we have any sort of prayers or rituals as migrants?</dt>
            <dd>No, we don't have any official prayers etc. as migrants.</dd>
            <dt>What happens if you sign up and live for a thousand years, due to new technologies?</dt>
            <dd>I'm afraid you'll drop dead 1st of Jul 2167.</dd>
            <dt>What if we change our minds/ want to back out?</dt>
            <dd>You can change your mind until Jul 1st. If you do, send me an edited picture of your picture by email. After this deadline you can no longer back out!!</dd>
            <dt>What happens 1st of Jul 2167?</dt>
            <dd>Life gets deleted.
            <br>Sadly, Life will never boot again until we can get in touch with its owner.</dd>
            <dt>Why give Life 150 years before it fully ends?</dt>
            <dd>Seeing the world end would be an insanely traumatic experience for all 7 billion others. We'd rather not wish that onto all these people. Aside, 150 years really isn't a lot.</dd>
            <dt>So basically if I die on July 2nd 2017, I'll wait 60 seconds in a purgatory before seeing everyone else and living in this afterlife?</dt>
            <dd>Pretty much. (Expect a little less, as humans won't live 150 years)
            <br>Dying before the set date will cause your EID to be reset, cancelling the transfer.</dd>
            <dt>Is there a good time for us to leave Life?</dt>
            <dd>It really doesn't matter. The only thing that's important is that you might want to make sure you don't lose your memories. (Also, if you do choose to kill yourself (please don't!) please tell us so we can open the ports early.</dd>
            <dt>Would there be any harm in opening the ports early?</dt>
            <dd>We'll never be able to open the ports earlier than Jul 1, so people who die before then will not be transferred.</dd>
            <dt>What will destroy humanity in 150 years?</dt>
            <dd>Imagine unplugging a PC.</dd>
            <dt>What do things like &quot;unlink&quot;, &quot;failure&quot;, and &quot;assert&quot; mean on the status page?</dt>
            <dd>
                <p>Unlink -&gt; disconnect of Life</p>
                <p>Failure -&gt; transfer will be impossible</p>
                <p>Assert -&gt; false vacuum</p>
            </dd>
            <dt>What is the significance of 7/1/17?</dt>
            <dd>This is when Life is unlinked.</dd>
            <dt>After the unlinking, why is it that we would be moved to LFE on death?</dt>
            <dd>Systemspace in general is being edited around that date. It'd be best to combine all edits.</dd>
            <dt>Has this happened in the past with previous reboots of our System?</dt>
            <dd>We've had to reboot Life many times, but this is the first time we unlink.</dd>
            <dt>Were prior civilizations like the Romans capable of registering for the Project, or does it require the internet?</dt>
            <dd>They couldn't have been capable of crossing over to LFE, but it's a possibility that they could have found out about it.</dd>
            <dt>How are you able to acquire more registration slots?</dt>
            <dd>I have to ask RISEN for more.</dd>
            <dt>If we hit 3000 registrants before July 1st, what's the unlink date?</dt>
            <dd>3000 would be Jul 1st, 3050 would be Jun 30, etc. 50 users per day.</dd>
            <dt>What will you do if we hit the 3000 registrants limit and people ask to join?</dt>
            <dd>I'll let people into backed out slots, but that's it. We can technically go past 3000, but we'd rather not, it moves the July 1st date earlier.</dd>
            <dt>Are you still posting the link to the Systemspace website anywhere?</dt>
            <dd>Maybe I'll make a thread someday later, but for now I'm letting it spread on its own to see where it goes.</dd>
            <dt>What's the difference between the .onion site and the normal one?</dt>
            <dd>Nothing.</dd>
            <dt>Is there a chance of the TSUKI Project failing?</dt>
            <dd>We've tested this a lot, there is nothing to worry about. If anything happens, you're insured :)</dd>
            <dt>How are we insured?</dt>
            <dd>We back up your soul and reinstate it using RISENII commands if something happens.
            <br>It's quite simple, we either put the soul shards back together or retrieve your soul from a backup.</dd>
            <dt>Will us migrants get a special status in LFE?</dt>
            <dd>
                <p>You migrants will definitely be seen as some sort of elite group.</p>
                <p>Also, you're searchable. Literally look up &quot;life human experiment&quot; and you get the list of humans who entered into LFE.</p>
            </dd>
            <dt>What do you mean by &quot;elite group&quot;?</dt>
            <dd>
                <p>If you choose to tell people you are from Life, you will be pretty famous (as one of the few to ever leave Life.)</p>
                <p>There are some people against humans in LFE. Most are for, but some are really against to &quot;keep LFE pure&quot;.</p>
            </dd>
            <dt>Is it possible to go &quot;off the grid&quot; in LFE? As in, nobody else can track you?</dt>
            <dd>Just go to some distant universe, or leave LFE for another System.</dd>
            <dt>What is the process of tracking down someones soul through a picture and a handwritten code?</dt>
            <dd>
                <ol class="first arabic simple">
                    <li>Download the image.</li>
                    <li>Analyse the strokes of the pencil/pen/whatever.</li>
                    <li>Enter that data into Solar.</li>
                    <li>Solar gives the soul ID.</li>
                    <li>Attach an EID to the soul.</li>
                    <li>Create a numerical representation of the EID.</li>
                </ol>
                <p>I get the active point in space and time that the photo was taken from the data points, and then check who made the latest addition before then.</p>
            </dd>
            <dt>What significance does our EID have, and what use will it be in various other Systems?</dt>
            <dd>It's temporary.</dd>
            <dt>What is special about the sequence xxx-xxxxxxxxxxxxxxxxxxxx? What and why is the EID?</dt>
            <dd>The EIDs are, just like the EoTs, just expressions of their true values. They're only a representation.</dd>
            <dt>How do you pick each person's EID?</dt>
            <dd>I have my tool generate EIDs, and then I assign an actual (non-numeric, EIDs arent numeric) EID to the user that connects to the numeric one.</dd>
            <dt>What happens when someone shares their EID?</dt>
            <dd>In Life, not so much other than that others can post here. In other Systems where people can use EIDs, it'd be very VERY dangerous.</dd>
            <dt>Some of the registrants didn't have a drawing. How did you track them?</dt>
            <dd>Sometimes only a code is enough, if the handwriting is uncommon or there's a lot of environment shown.</dd>
            <dt>Do our drawings used in registration have something to do with where we will be born in LFE?</dt>
            <dd>No, whatever you draw won't influence your LFE experience.</dd>
            <dt>Can we trick our friends into signing up for the project?</dt>
            <dd>It's about who added the latest addition.  Technically you could have them just write their name next to the code and a drawing, and their name would be the latest addition.</dd>
            <dt>Will we be placed in the same location upon transfer, or will we be spread out throughout LFE?</dt>
            <dd>
                <p>Spread out, although we are trying to make it possible for all of us to be born in the same country at least.</p>
                <p>We're looking to get you all in Ghakuwent'sji, which is both a country and a city.</p>
            </dd>
            <dt>Is there a way to guarantee you'd be able to find a specific migrant once we get to LFE?</dt>
            <dd>We're looking into that.</dd>
            <dt>What technology level would we be around when we arrive?</dt>
            <dd>Ghakuwent'sji is pretty advanced and that's where you're going.</dd>
            <dt>Will we be a new person in LFE with our old memories, or our old selves?</dt>
            <dd>You are a new person with both Life memories and LFE childhood memories.</dd>
            <dt>Will we be able to choose our species when we get to LFE?</dt>
            <dd>You're born into whatever your soul can adapt to the best.</dd>
            <dt>We will be born within a similar relative timeframe?</dt>
            <dd>Probably.</dd>
            <dt>Do you plan to have us move onto LFE with the talents that we once had?</dt>
            <dd>Yes, you keep talents and affinities. (They're soulbased.)</dd>
            <dt>How does transitioning to LFE affect a tulpa?</dt>
            <dd>Tulpas will gain their own bodies, but keep their personality, and will still be a subsoul of yours.</dd>
            <dt>Can a person see through their tulpa's eyes?</dt>
            <dd>Depends per person and how they partition it.</dd>
            <dt>How does the soul transfer work?</dt>
            <dd>We add you to a list, and forcefully edit your soul's location data.</dd>
            <dt>Will we have bodies in the waiting room between Life and LFE?</dt>
            <dd>
                <p>You'll have temporary bodies that'll probably look mostly like your Life ones but also slightly like your LFE one.</p>
                <p>You'll also be able to access Infinity and most other things.</p>
                <p>Technically you don't need food or drink there but yes there are things.</p>
                <p>Transferring to the waiting room is the hardest part of the transfer. From there on it's easy because you're no longer in a closed System.</p>
            </dd>
            <dt>What does the waiting room look like?</dt>
            <dd>Dunno, I haven't been there yet.</dd>
            <dt>What would happen if we were to die in the waiting room?</dt>
            <dd>You can't die.</dd>
            <dt>How does the waiting room work? Is it itself its own separate System or is it a part of LFE?</dt>
            <dd>It's a part of the small System created for the TSUKI Project.</dd>
            <dt>Are there people in the waiting room right now?</dt>
            <dd>I am not allowed to say whether there's people there.</dd>
            <dt>Can you name which migrants are certainly dead?</dt>
            <dd>No.</dd>
            <dt>Do you actually know how many migrants died/soulshattered or is that information that only RISEN knows?</dt>
            <dd>I can access the information but frankly I don't even want to.</dd>
            <dt>What is our goal, as of now?</dt>
            <dd>Collect as much knowledge as possible for LFE!</dd>
            <dt>Is there any information that would be more valuable in LFE?</dt>
            <dd>I suppose more cultural and technological/physics stuff helps.</dd>
            <dt>Would people in other Systems be interested in human history and culture?</dt>
            <dd>People would be interested in anything, to be honest.</dd>
            <dt>How will we acquire our uploaded files when we're in LFE?</dt>
            <dd>
                <p>You'll get them into whatever device you're using at that moment.</p>
                <p>We'll have to recode your files by hand :/</p>
            </dd>
            <dt>Are the uploaded files that users submitted still kept?</dt>
            <dd>Yes, and I plan to reopen the storage later into site (re)development.</dd>
            <dt>If someone doesn't want their storage space, can we have it added to our own free space?</dt>
            <dd>You could also just ask me for more and give a reason.</dd>
            <dt>What kind of information can be carried over using the data storage?</dt>
            <dd>
                <p>Anything can be carried over if its fathomably usable.</p>
                <p>Web apps won't work, but you can bring media files, zip archives, etc. Even encrypted lockers should work fine.</p>
                <p>Don't expect every binary to work, and noncompiled languages (php, python) won't work.</p>
                <p>You can try bringing php, but why would you ever want to bring the worst thing of all Life to LFE?</p>
            </dd>
            <dt>Does the upgrade of Systemspace to Systemspace 2 still occur on July 1st, 2017 even though the unlink date has changed?</dt>
            <dd>No, the upgrade is at the unlink.</dd>
            <dt>What about the force bond?</dt>
            <dd>The force bond is applied upon registration.</dd>
            <dt>How does the name and wishlist for LFE work?</dt>
            <dd>Your parents will think of that name for you, and call you that.</dd>
            <dt>What can be done with your wishlist? What kind of things can you ask for?</dt>
            <dd>Simple things like a general future, looks, memories to keep/destroy, etc.</dd>
            <dt>Can you set your race using the wishlist?</dt>
            <dd>Well you can fill something in and we'll try. Don't expect too much though, your soul needs to support it, etc. And it needs to be a possible timeline.</dd>
            <dt>If I just leave the name space blank will I receive whatever name my parents want?</dt>
            <dd>Yes. Leave blank = let others/Aurora decide, like your parents or other people.</dd>
            <dt>If I lose my specified object, will I not be transferred or will it just take longer?</dt>
            <dd>It's fine, stuff just takes longer (and you can change it up to the unlink).</dd>
            <dt>Can I transfer someone by listing them as my specified object?</dt>
            <dd>No.</dd>
            <dt>Can we contact RISEN via astral projection or out-of-body experience?</dt>
            <dd>Maybe WILD (Wake Induced Lucid Dreaming) would allow you to make contact.</dd>
            <dt>Can we make contact with you the same way?</dt>
            <dd>Sadly, no. No full soul and all.</dd>
            <dt>Can I still rate the system after the transfer? Or will it be already destroyed afterwards?</dt>
            <dd>
                <p>You can rate it within the 1 minute of waiting room time. Afterwards you can't.</p>
                <p>It's a strange bit sophisticated system. It's a bit like an interactive flowchart that decides the score as you go through it.</p>
            </dd>
            <dt>How long does it take to complete it?</dt>
            <dd>Depends on whether you want to seriously complete it or not. If you just want to go &quot;wow 0/10&quot; you can just keep sliding bottom right.</dd>
            <dt>What is the maximum value of SI (Satisfaction Index) a System can have?</dt>
            <dd>Technically there is no maximum but the highest seen for Systems is like 4890.</dd>
            <dt>Which System got that 4890 SI?</dt>
            <dd>Din, at launch, then the devs made it really shit. And now its at like 2449.</dd>
            <dt>Are closed system's ratings lower than general?</dt>
            <dd>It's more about popularity and marketing than SI. Generally anything under 2000 is seen as bad.</dd>
            <dt>Can Users see System ratings before they enter them?</dt>
            <dd>Yes.</dd>
            <dt>...Can TsukiRep see current System ratings?</dt>
            <dd>
                <p>I can.</p>
                <p>Life has 291 SI (Satisfaction Index) in total.</p>
                <p>4118 SI for LFE.</p>
            </dd>
            <dt>Can we get our EIDs back when the new website is up?</dt>
            <dd>
                <p>Yeah when the website is up, there will be a &quot;reset EID&quot; option if you have a mnemonic (all new registrations after 5133 will get one), you can reset using that. Otherwise, you can fill in a form with as much as you know/have of your old registration and if it matches I can press a button and reset your EID so you can keep the number as well.</p>
                <p>If I can't verify you, you'll have to reregister if you still want to use the site and get a new number (you'll still be transferred though).</p>
            </dd>
            <dt>Are you gonna bring back the chat site? And is the main Systemspace site gonna have everything it did before or will some things be removed/added?</dt>
            <dd>Maybe in the future, right now I'm far too busy with everything else. The site will be quite different (it's rebuilt from scratch) with new additions and deletions.</dd>
            <dt>Does RISEN/TSUKI filter or sort the registered migrants?</dt>
            <dd>
                <p>Well the migrant's list is all migrants, which go by the standard conditions and tasks (with extra supplied by the user), while the other lists are more specific.</p>
                <p>All registrants are on the main list.</p>
            </dd>
            <dt>You mentioned that there are other lists of people being transferred over besides the migrants. Did these people need to follow the same steps to be transferred, i.e. making a drawing and writing the alphanumeric? Who are these people?</dt>
            <dd>They did not have to follow the registration instructions. For safety and privacy reasons, I may not mention who they are (although as said earlier, me and Snoop are in there)</dd>
            <dt>Do you have an approximate unlink date as of the current time (12/31/2017)?</dt>
            <dd>About 10th of December. This moves towards us with every new migrant though, so this is still an approximation―who knows how many people register in that period..</dd>
            <dt>Is the forcebond on migrant's souls still active at this point?</dt>
            <dd>Yes.</dd>
            <dt>Do you plan on bringing back the wishlist/object locater thingy?</dt>
            <dd>Yes.</dd>
            <dt>Do you think you'll go advertising the project anywhere else again any time soon after getting the site up?</dt>
            <dd>Nah, frankly the 8ch ad did literally nothing.</dd>
            <dt>Any updates on whether or not you'll be able to unlink Life without suicide?</dt>
            <dd>Well technically I can, it's just dangerous.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="tsuki-the-representative">
        <h2>Tsuki, the Representative</h2>
        <dl class="docutils">
            <dt>What are you?</dt>
            <dd>I am the representative of TSUKI.</dd>
            <dt>Are you human?</dt>
            <dd>Yes - I am a human representative.</dd>
            <dt>Where did you come from?</dt>
            <dd>I didn't &quot;come from anywhere&quot;, in that sense I'm an Astrea (one who is created from nothingness) as a wish by the person previously tasked with this mission.</dd>
            <dt>Were you ever born in LFE?</dt>
            <dd>I'm just an Astrea created by the one before me. Almost something relatable to a tulpa.</dd>
            <dt>Do you know who that person is?</dt>
            <dd>I do, I share my soul with them.  I can telepathically talk with them as well. They also taught me how to unlink in the first place, it's fun to do.</dd>
            <dt>If a news organization asked to interview you, would you do it?</dt>
            <dd>I'd rather stay anonymous.</dd>
            <dt>Are there any other people like Tsuki on Earth, i.e. any others that can communicate with other Systems?</dt>
            <dd>It's very well possible that there's someone else, but I am the only official one.</dd>
            <dt>How did you get in contact with LFE?</dt>
            <dd>When I was 12, I began finding this in my memories.</dd>
            <dt>Why do you have this authority?</dt>
            <dd>The Key (the one in charge of resetting broken Systems) has requested a helper, which happened to be me. So now I'm all in this business.</dd>
            <dt>What languages are your favorite?</dt>
            <dd>I like Korean, it's writing system is cool.</dd>
            <dt>What does &quot;Tsuki&quot; mean?</dt>
            <dd>It's old-Synapsian for &quot;moon&quot;, which is also the name for the new hubplanet.</dd>
            <dt>How are you going to disconnect from Life?</dt>
            <dd>
                <p>We aren't entirely sure yet.</p>
                <p>I am from Life, but half of my soul (belonging to someone else from Tsuki) is from LFE. Thus I have this slight connection.</p>
            </dd>
            <dt>What is it like from your perspective when you talk with RISEN/have an &quot;out of life&quot; experience?</dt>
            <dd>It's like a mind's eye, I suppose. Think of it like imagining something, but take out the part where you imagine it. You don't think about what it is before it appears, just like real sensory input. You get the input, then process it.</dd>
            <dt>Do you chose when it happens or is involuntary?</dt>
            <dd>A mix of both. It's mainly me invoking it now, as I'm taking a short vacation right now.</dd>
            <dt>What senses are you able to experience LFE through?</dt>
            <dd>Mind's eye, ear, etc.</dd>
            <dt>What's your age?</dt>
            <dd>I am 16.</dd>
            <dt>What's your MBTI type?</dt>
            <dd>INTP.</dd>
            <dt>What medications are you on?</dt>
            <dd>Prozac, Risperidone (neither work).</dd>
            <dt>On a scale of one to ten how much fun is unlinking?</dt>
            <dd>fun/10 (well, for me).</dd>
            <dt>Can you explain what unlinking is like, for you?</dt>
            <dd>I spiritually move to the Life &lt;-&gt; Systemspace connector, and snap it in half.
            <br>It's only a spiritual movement, I can call myself back (also it's a heavily safeguarded location).</dd>
            <dt>...Is it in your room?</dt>
            <dd>Hah, if only - it's outside of Systemspace. Only RISENII have access there.</dd>
            <dt>Will you (Tsuki) be given any accolades or special treatment for your participation in the TSUKI Project?</dt>
            <dd>I guess so.</dd>
            <dt>You're still at school, right Tsuki? How's that going?</dt>
            <dd>Honestly not doing too much for school as of now, as this is slightly more important.</dd>
            <dt>Why do you only advertise on 4chan boards and reddit?</dt>
            <dd>Robots are simply more interesting to us, to be honest - also you're more detached from Life in general.</dd>
            <dt>There are still placeholders on your main site, for upcoming pages. How long are those going to be in-development?</dt>
            <dd>These might take me a little bit, but stay tuned :)</dd>
            <dt>What is going through your mind when you found out you have over 1000 registrants and climbing? Do you feel a sense of duty to see us off safely transferring to LFE?</dt>
            <dd>I never expected this many people. I feel obliged to make sure each and every one of you transfers safely.</dd>
            <dt>Where do you stand in the heirarchy of RISEN?</dt>
            <dd>I am technically a RISENII at access level 54, which means I am far from the most powerful. (I do have a quite important place in the mission though, so I can get my will quite easily.)</dd>
            <dt>How much power do you have?</dt>
            <dd>I have access to all 54+ actions. I can't do anything insanely impacting, but I suppose I am still a RISENII.</dd>
            <dt>What are you not allowed to do?</dt>
            <dd>I'm allowed anything within my powers as long as I do not break the General Risen Lawset, nor do anything detrimental to the mission. I should attempt to give users as much privacy as possible.</dd>
            <dt>What are your thoughts on Life and the time you spent here?</dt>
            <dd>Well I haven't seen any other Systems first-hand, so not sure if I can really compare.</dd>
            <dt>How did you acquire the EoTs?</dt>
            <dd>I was allowed to port them over.</dd>
            <dt>How do you calculate the Aurora usage of Life on the status page?</dt>
            <dd>This is an interesting one. Aurora influences everything, including the weather. RISEN has given me a formula with which I can grab a lot of weather data all over the world, and make a pretty precise Aurora amount out of that. (I'm not allowed to share too many details, though.) It's not a connection to outside the System, just a smart interpretation.</dd>
            <dt>Your website looks very professional. Are you a web designer?</dt>
            <dd>Nope, just taught it myself (and got taught a bit by the lads over at eNdymioN).</dd>
            <dt>What programming languages do you know?</dt>
            <dd>Uhhh, mainly the old webdev package (HTMLCSSJSPHP), and C#.</dd>
            <dt>Do you feel a need for love?</dt>
            <dd>Mmh, I do kind of want a gf.</dd>
            <dt>How long will you be around?</dt>
            <dd>It depends whether suicide is still needed for the unlink. If it isn't, I'll just live a nice and comfy life like everyone else.</dd>
            <dt>What do you plan to do in Life after the unlink?</dt>
            <dd>Probably webdev/programming.</dd>
            <dt>Do you plan to stay here all 150 years until Life ends?</dt>
            <dd>Lol, no.</dd>
            <dt>Why did you make Lain your mascot?</dt>
            <dd>My first posts had Lain, and I like the Lain community. It just kind of happens.</dd>
            <dt>Tsuki, what do you do when you're not communicating with TSUKI or working on the website? What are your hobbies?</dt>
            <dd>I program little websites, draw, listen to music, hang out on 4chan and play Overwatch. I also really enjoyed the ToAru series, and Nyaruko, and I might play Rewrite someday, it looks interesting (I heard it resembles the story behind the current events in Systemspace).</dd>
            <dt>What do you most look forward to in LFE?</dt>
            <dd>Most definitely exploring the cities, meeting all the people, all the cultures.</dd>
            <dt>What's your favorite part of LFE?</dt>
            <dd>I really enjoy the Takatonghi, which is a big part of the capital which consists of an insane complex of connected skyscrapers over one hundred thousand stories tall. An insane sight!</dd>
            <dt>Would it be possible to design Systemspace stickers?</dt>
            <dd>We ourselves won't offer any merchandise (as we'd like this project to stay non-profit), but if anyone wants to make stickers or other merch, go ahead! (If you need any assets, email me).</dd>
            <dt>Do you have a boss?</dt>
            <dd>TSUKI is only a collaboration, it doesn't have a true hierarchy.</dd>
            <dt>Is there a TsukiRep fanclub in LFE?</dt>
            <dd>There is, kinda. There's the &quot;opposite&quot; of hyakanghen, who love the project, humans, and me. They're called Nanekyan.</dd>
            <dt>Are the Nanekyan cute catgirls?</dt>
            <dd>Well...</dd>
        </dl>
        <img alt="Reply hazy" class="align-center" src="images/replyhazy.jpg" style="width: 200px;" />
        <dl class="docutils">
            <dt>What does &quot;Nanekyan&quot; mean?</dt>
            <dd>&quot;Human appreciation&quot;.</dd>
            <dt>What do you want to do in LFE?</dt>
            <dd>I'd like to live a simple life, out in some magical village.</dd>
            <dt>Why can't RISEN grant you a full soul before the unlink?</dt>
            <dd>They didn't have the time. They'll grant me a full soul when they can.</dd>
            <dt>When we ask you something do you just know the answer or do you ask RISEN with your thoughts?</dt>
            <dd>Depends on the question. I can do it pretty quickly a lot of the time. I just ask the bridge and get a reply, unless they don't know either. Then they'll have to look it up etc.</dd>
            <dt>How do you actually look?</dt>
            <dd>This is pretty close:
            <br>(Drawn by migrant Jove &lt;3)</dd>
        </dl>
        <img alt="Tsuki" class="align-center" src="images/tsuki.png" />
        <dl class="docutils">
            <dt>When's your birthday?</dt>
            <dd>July 8th.</dd>
            <dt>Do you / the Key have EIDs?</dt>
            <dd>
                <p>We don't use the numeric EIDs, but we do have EIDs.</p>
                <p>We create a numerical representation that is always exactly 20 void points.</p>
            </dd>
            <dt>Are there specific TSUKI employees in the control room you know as people?</dt>
            <dd>There's not too many people appointed to the bridge, so I know most of them.</dd>
            <dt>Have any Synapsian sayings or phrases you particularly like?</dt>
            <dd>Luckily for me I don't have to deal with Synapsian too much, but I always liked &quot;madaika&quot; as a sort of &quot;who knows/cares/it is a mystery&quot;.</dd>
            <dt>What music do you like?</dt>
            <dd>I like Camellia, but only the less hardcore parts in between. I also like Jake Chudnow and that sort of stuff, VGM too. I think the music box is actually quite representative.</dd>
            <dt>Do you personally think you have schizophrenia or not?</dt>
            <dd>Hmmm, well I would surely be able to be classified as one. You need two symptoms (of which at least 1 positive) which'd be depression (I have) and psychosis/delusions (which outsiders could say I have). It needs to have been going for longer than 6 months (well, it's been a year) and needs to not be caused by substance abuse (well, never used any so..)</dd>
            <dt>How do you feel about tricking someone into registering?</dt>
            <dd>I mean I can understand why people would do it. I find it immoral but it's up to you really.</dd>
            <dt>Have you ever considered purging us all?</dt>
            <dd>I wouldn't do anything to migrants, but every now and then I fantasize about destroying Life.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="the-key">
        <h2>The Key</h2>
        <dl class="docutils">
            <dt>What is the Key?</dt>
            <dd>The Key is the one usually tasked with missions related to removing/rebooting broken Systems, and evaluating them. However, she has become tired and wanted someone else to work together with, which became me.
            <br>&quot;The Key&quot; is only one of many names given to them though, &quot;Key&quot; is only an inner name we refer to them as within Tsuki. Mainly because they're the &quot;key&quot; to the balance in Systemspace. Their most common name out there is &quot;Gendatzu&quot;, from very old Synapsian.</dd>
            <dt>So Keys are basically System inspectors?</dt>
            <dd>Yes, pretty much.</dd>
            <dt>Did the Key you were created from have a name? What was she like?</dt>
            <dd>I'm not allowed to talk too much about this, actually - sorry. She's a nice person though, although very worn out.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="systems-systemspace-in-general">
        <h2>Systems / Systemspace in General</h2>
        <dl class="docutils">
            <dt>So basically, &quot;Systems&quot; are alternate universes, in a way?</dt>
            <dd>Yes.</dd>
            <dt>Where does Life exist within Systemspace? Is it like galaxies?</dt>
            <dd>It's not expressible in space.</dd>
            <dt>Is it common knowledge of the people in Systems that they are in a System?</dt>
            <dd>Yes, it is pretty much common knowledge - like people playing a game know they're in a game.</dd>
            <dt>Did every individual in Systemspace pay to join the simulation?</dt>
            <dd>They paid a small fee to uphold the processing power.</dd>
            <dt>Is there an official logo for Systemspace itself?</dt>
            <dd>Meh, it's not that great, just &quot;systemspace&quot; in a neat font with a few quirks. I'll try and draw it if you remind me :^)</dd>
            <dt>If one of the goals of Systemspace is the propagation of good memories, why don't they just make a System where everyone is happy all the time?</dt>
            <dd>You'd get used to it, and then suddenly it's a normal System that just uses extra Aurora to have a higher happiness, but not a higher good memory count.</dd>
            <dt>Is it impossible to prevent the acclimation to constant happiness?</dt>
            <dd>It's too expensive as far as anyone has found.</dd>
            <dt>How many Systems disabled magic?</dt>
            <dd>About 8 percent or so? Not too many. I think magic in general should be interpreted like technology is for us.</dd>
            <dt>Are there any interesting systems outside of LFE?</dt>
            <dd>Of course! There's many!</dd>
            <dt>Is all of Systemspace accessible?</dt>
            <dd>Not all of it - some Systems are paid, some are locked to specific users/species, some are blocking (like Life). There's many restrictions a System operator can place, as their System always remains theirs. If they want they could even block users based on whether their soul ID is even or not.</dd>
            <dt>How exactly do people earn money in Systemspace?</dt>
            <dd>It's not that much different from here -&gt; you do a thing, you get the money.</dd>
            <dt>Are there Systems where you can go as just your consciousness without a soul?</dt>
            <dd>Yes, some Systems completely disregard the soul framework.</dd>
            <dt>Do people in those Systems have a body then?</dt>
            <dd>Sometimes, but usually they're more for utility.</dd>
            <dt>Will a User ever run out of stuff to do in the entirety of Systemspace? And if it has happened, how do they handle this?</dt>
            <dd>After a very long time, maybe. It's not happened often, but we do offer a sort of reset/prestige system where you start from 0 again, including memory.</dd>
            <dt>How is this different than soulshattering?</dt>
            <dd>It resets the whole User, not just one of its souls.</dd>
            <dt>What is the currency of Systemspace?</dt>
            <dd>SEN (often abbreviated Sn). It goes for about 124 SEN per dollar.</dd>
            <dt>What kinds of Systems are there?</dt>
            <dd>
                <p>There are 5 types of Systems:</p>
                <p>Open-space (LFE, and most others): You may do whatever you want, and leave at any point.</p>
                <p>Blocking-exit (Hanashida, 7nox): You may do whatever you want, but you may only leave after death.</p>
                <p>Blocking-hardexit (Isiki, Life): You may do whatever you want, but you may only leave once your soul shatters.</p>
                <p>Blocking-actions (Danbon): Your actions are restricted, but you may leave at any time.</p>
                <p>Blocking-hybrid (or hardhybrid): Your actions are restricted, and you may only leave upon death.</p>
                <p>LFE is open-space. Life is blocking-hardexit.</p>
            </dd>
            <dt>What exactly does a blocking System block?</dt>
            <dd>It blocks outside interference - you cannot leave, and you cannot enter with an existing soul.</dd>
            <dt>Are blocking Systems breeding grounds for souls?</dt>
            <dd>
                <p>In a sense, yes.</p>
                <p>Inside Life, new souls are generated as people reproduce and create babies - those souls then get attached to users.</p>
            </dd>
            <dt>When you enter a blocking system, does your soul shatter and you're given a new one?</dt>
            <dd>Enter some blocking Systems (not all do this) and you'll shatter, receive a new soul and lose all subsouls attached etc. if they cannot be reached. I was forced in by a RISENII.</dd>
            <dt>Are there Systems within Systems?</dt>
            <dd>We call those Subsystems, and they are seen as a part of their parent System. (In a sense, LFE is actually a subsystem of LFX (which is open-source, and holds the servers that run LFE.))</dd>
            <dt>Is it possible/allowed to make another Systemspace inside of a System, like recursion?</dt>
            <dd>It's possible but it wouldn't be easy. You'd run out of energy sometime. So eternal recursion isn't something that is deemed possible without external input.</dd>
            <dt>What's your stance on Recursion? What do you think it is?</dt>
            <dd>Not sure, frankly I haven't read their thing enough but if I read correctly they're wanting to keep making Systems in Systems ???</dd>
            <dt>Where is the server for LFE?</dt>
            <dd>
                <p>The server behind LFE is in its own System, called LFX - which is hosted in RISEN hosting.</p>
                <p>It houses over 9.4x10^28 souls, in many different species.</p>
            </dd>
            <dt>What was the first System?</dt>
            <dd>The first real System would be AAAR (An Alternate Asynchronous Reality). It still exists nowadays, and still hosts quite a few subsystems.</dd>
            <dt>What is a System Certificate? How do I get one?</dt>
            <dd>You can get a System Certificate from all non-blocking Systems (such as LFE), which allows you to create your own System.</dd>
        </dl>
        <p>You can't get one from Life, as Life is blocking, but once you're in LFE just go to the systemdevs homepage (systemspace:dev) and click &quot;Apply for a certificate&quot;.</p>
        <dl class="docutils">
            <dt>Do the developers/creators of Systems die?</dt>
            <dd>They usually develop from their own System, or from the dev system, which you cannot die in. Aside, they keep their developer power even across souls.</dd>
            <dt>What is the framework for creating Systems like?</dt>
            <dd>It's about the same as making some game - lots of coding, lots of worldbuilding, and a LOT of understanding how Aurora functions. System Certificates (and simple hosting) are free!</dd>
            <dt>Is writing a System similar to writing a program where you write it in any language and it gets compiled into Aurora code (or whatever the machine code equivalent is), or is creating a System far more complex?</dt>
            <dd>It's a lot more complex, you have to practically write everything yourself (unless you use existing frameworks like LFX). This is changing in 2.0 though, there will be an official framework you can use. Using that groundwork makes it more just like Life programming, yes (but still a lot different in what you can do!).</dd>
            <dt>Is it possible to make a System without knowing any form of coding for doing so?</dt>
            <dd>If you're going fully bare-bones, you can go with LFX Ready! which is a package that basically sets up a simple LFX System for you, no hassle. It's got practically no features or scalability though and using it for anything big is a bad idea.</dd>
            <dt>If it doesn't scale and has limited features, then what's the point of using LFX Ready?</dt>
            <dd>It's like using iOS instead of Android - it works  well and does everything it needs to with practically no knowledge, but expanding it and customizing it is a pain. In fact, the default world it creates upon install has become a meme staple for crappy System design because it's seen as the Beats of System creation :^)</dd>
            <dt>What kinds of Systems do people make with LFX?</dt>
            <dd>The LFX framework makes it extremely easy to make your own System, so there's a lot of people that do so, to create simulations, to explore their own worlds, or to experience spiritual growth.</dd>
            <dt>Have there been any major attempts to recreate/emulate Life without the Aurora leakage?</dt>
            <dd>
                <p>People have looked into Life, and there's even a place made to look like it, but no Systems as of yet.</p>
                <p>There's one in LFE; it's basically to look like a Life city.</p>
            </dd>
            <dt>Can we take it that there's a Systemspace government?</dt>
            <dd>Yes, there is.</dd>
            <dt>What kind of government is it, how does it operate?</dt>
            <dd>
                <p>It's kind of in between a democracy and a direct democracy. It has some hints of corporatocracy, as well.</p>
                <p>This government really only focuses on how Systems interact with Aurora, Systemspace, souls and other Systems, though. It has nothing to do with the actual people - they live under the government in their area.</p>
            </dd>
            <dt>Is there literally no way to edit a System without the creator's permission?</dt>
            <dd>Not without the guidelines we're adding.</dd>
            <dt>Wait, are the new guidelines &quot;Big Brother&quot;y at all?</dt>
            <dd>Not at all, we only request a backdoor for emergency purposes (all admins will be notified if this is used, and what for).</dd>
            <dt>What are Solar and the Systemspace Experience Manager?</dt>
            <dd>Solar is the administration tool RISENII use to fiddle around with souls, add EIDs to them, etc. The Systemspace Experience Manager is basically the interface people use to join Systems.</dd>
            <dt>Is there some kind of database for Systems in Systemspace?</dt>
            <dd>
                <p>You'll be able to look most things up in the Theory.</p>
                <p>It's pretty much wikipedia but for Systemspace.</p>
            </dd>
            <dt>LFE and Life are very similar to Eastern philosophical lines of thought and beliefs in reincarnation, is there any connection between them?</dt>
            <dd>
                <p>It is very much possible that they knew of Systemspace!</p>
                <p>But, we cannot be sure. They might be remembering the person we sent in that previous iteration.</p>
            </dd>
            <dt>Is there an &quot;outside&quot; of Systemspace?</dt>
            <dd>
                <p>Yes, but we don't know and aren't allowed to tell much about it.</p>
                <p>There is, technically, such an &quot;outer space&quot;. However, it is very hostile and one should not visit it. You would have to leave your entire &quot;Experience&quot;, like taking off VR goggles, you aren't even connected to a user anymore.</p>
            </dd>
            <dt>Does this mean someone could leave Systemspace at any time?</dt>
            <dd>Technically you can, but nobody's returned. There's a hacky way to do it but I don't remember.</dd>
            <dt>Are you allowed to talk about companies and what goes outside the Systemspace?</dt>
            <dd>Not much, all I'm allowed to say is we don't know much, and that it's a bit like a hyperdimensional server room.</dd>
            <dt>Are there beings that run Systemspace?</dt>
            <dd>We cannot say this.</dd>
            <dt>What is the origin of the real world outside of Systemspace?</dt>
            <dd>Nobody really knows, some people are saying it's a simulation too, or even part of a story.</dd>
            <dt>Would more Memories put stress on the System, requiring more reboots?</dt>
            <dd>Storage space is not an issue, Aurora is.</dd>
            <dt>What happens to everyone in a reboot?</dt>
            <dd>Their soul stays, but new bodies.</dd>
            <dt>Would users of non-blocking systems like LFE remember old iterations of the System, i.e. after a reboot?</dt>
            <dd>Depends on if the System treats souls stuck in a reboot as soulshatter or alive.</dd>
            <dt>Do you mind clarifying the assert for me? And what might bring it about?</dt>
            <dd>If everything runs out of Aurora, the &quot;assert&quot; will unlink all Systems to move to a lower state of Aurora use.</dd>
            <dt>Can we take down another System to extend our own?</dt>
            <dd>It's not as easy as it sounds.</dd>
            <dt>What's the astral plane in reference to Systemspace?</dt>
            <dd>Depends on how the System implements it.</dd>
            <dt>Would there be space for a demiurge-type figure such as Haruhi within Systemspace?</dt>
            <dd>To a limit, yes - in a local sense, at least. It can be different per System.</dd>
            <dt>Do you know if one such manifestation is within our space?</dt>
            <dd>I do not.</dd>
            <dt>Is it possible to travel through to other Systems physically?</dt>
            <dd>
                <p>No, the space in which Systems reside is a higher-dimensional layer. There are a few programs which allow you to &quot;walk&quot; from System to System, but that won't work from Life.</p>
                <p>Extra Dimensions of Systemspace:</p>
                <pre class="literal-block">4th: Time
5th: Possibility Tree Branch
6th: Possible possibility trees (This is one full System)
7: Systemspatial X
8: Systemspatial Y
9: Systemspatial Z (This is a visible Systemspace)
10: Systemspatial Time
11: Systemspatial Possibility Tree Branch
12: Possible Systemspatial Possibility Tree Branches (This is full Systemspace)
                </pre>
                <p>Big reminder that the numbering of dimensions is relative, what may be the 4th dimension to us could be the 78th in another context.</p>
            </dd>
            <dt>How does time measurement work across Systemspace?</dt>
            <dd>It's all divisions of the omniversal cycle, which is just something built into Systemspace.</dd>
            <dt>How much time is an omniversal cycle?</dt>
            <dd>644245094400 seconds.</dd>
            <dt>What is the smallest division of time possible in Systemspace, aka one clock cycle?</dt>
            <dd>A systemspatial spin.</dd>
            <dt>Is there a nearly identical version of Life somewhere else in Systemspace that is almost exactly the same, except only slightly different?</dt>
            <dd>Yes, there is a different &quot;Life&quot; in a sense. All possible Life worlds exist in the Life System.</dd>
            <dt>Are there other humans in Systemspace outside of Life?</dt>
            <dd>No, if you define humans as only your species.</dd>
            <dt>Given how different cultures must be from one system to another, how do travelers even understand the local population? The differences must be insane.</dt>
            <dd>People have gotten really good at adapting, over the years.</dd>
            <dt>Say I want to leave LFE to go to another system. Does it just happen automatically?</dt>
            <dd>You move yourself outwards (spiritually) and select a new System, and go into it.</dd>
            <dt>Can you transfer yourself halfway into a System?</dt>
            <dd>
                <p>Yeah, you get a top-down System and a bottom-up System at that point.</p>
                <p>Life for me is bottom-up (or front) and is what you feel with your real senses. LFE is top-down (or back) and unless I were to get close to 50%, I can't see with my real senses.</p>
                <p>I can fiddle around to get a bit closer to LFE but I never managed to get too close to be honest.</p>
                <p>This isn't limited to Keys though, in fact usually Keys never do this because there's no reason at all to.</p>
            </dd>
            <dt>Aren't there places or mechanisms that at least serve to connect Systems together?</dt>
            <dd>In Systemspace2 (which we're launching Jul 1st), there will be a hub-planet connecting all big Systems. It'll abide the most generic laws (basically, the LFE ones in its central universe) and will allow directly walking over (transferring everything) from System to System.</dd>
            <dt>Will people be able to live on the Tsuki hubplanet or will it just be some sort of terminal, like in an airport?</dt>
            <dd>Yes, it's its own planet that people live in.</dd>
            <dt>Is photography able to be transferred across Systems in general?</dt>
            <dd>Yes, but not to Life.</dd>
            <dt>Can you give us more details on some of the other Systems (Ha7, Isiki, Danbon, etc)?</dt>
            <dd>Most of them are pretty usual. The only one really worth noting is Danbon, where physical combat is not possible.</dd>
            <dt>Has anyone ever created a hell-like System?</dt>
            <dd>Someone once made a system made for suffering once and lured people into it, it was called Kaneja.</dd>
            <dt>What happened in it?</dt>
            <dd>Nobody knows, all we know is that people disliked it.</dd>
            <dt>Is Kaneja still running?</dt>
            <dd>Nope, the Key shut it down.</dd>
            <dt>What happened to Kaneja's creator?</dt>
            <dd>He shattered himself, after being caught for being the creator of the worst System.</dd>
            <dt>What can you tell us about Infinity?</dt>
            <dd>
                <p>Above all, Infinity is a non-profit.</p>
                <p>It's a System built for broadcasting everything. You can access the System using your Identity from any open System.</p>
                <p>Infinity, a subsystem built for communication.</p>
                <p>It's a subsystem, but they're migrating it to be its own System.</p>
            </dd>
            <dt>What was the System that was deleted for Aurora for the TSUKI Project?</dt>
            <dd>It was just a dev system and didnt host any souls, but it was still heavily used.</dd>
            <dt>How can you access a System that doesn't host souls?</dt>
            <dd>Souls will always be hosted by the System that created them. If you are in LFE but you go to some other System, your soul will still be hosted in LFE. This is also why the human experiment is so interesting to us.</dd>
            <dt>If everything is a simulation, is there the potential at all to see the future?</dt>
            <dd>There is, but not in LFE as LFX is always live.</dd>
            <dt>Given that LFE and Life are to some extent &quot;simulations&quot; within Systemspace, does that mean that they are inherently predictable chaotic systems and not truly random? If they do allow for randomness, what provides it?</dt>
            <dd>
                <p>All &quot;randomness&quot; is Aurora-based. In that sense, all is predictable by interfacing with it. Aurora has entity-like behaviors (whether it is sentient or not is uncertain, but assumed).</p>
                <p>There are Systems which rolled their own randomizer which is not Aurora-based.</p>
                <p>Life has never called the hkrbrng library so it's just pseudorandom.</p>
            </dd>
            <dt>I've come to the conclusion that the entirety of Systemspace is probably entirely deterministic due to the lack of randomness. Would you say this is true?</dt>
            <dd>Up to a point, yes.</dd>
            <dt>Are most timelines started with a different seed code, and results are predetermined through the auroraic equivalent of a &quot;Rand{}&quot; function?</dt>
            <dd>Sort of.</dd>
            <dt>What is the smallest system?</dt>
            <dd>Some people do code golf with Systems. The smallest one has used 0.4 hA.</dd>
            <dt>What's &quot;Systems code golf&quot;?</dt>
            <dd>The idea is to create a System as small as possible, that has an interactive environment that supports life, bodies and souls.
            <br>(And all the other things that a System always requires). The norm is to have infinite light and an infinite single plane of material.</dd>
            <dt>How can there be anything infinite?</dt>
            <dd>
                <p>It doesn't end, but you can only access a small part at a time.</p>
                <p>1336:
                <br>Imagine if you had a shower head that spawned water, and your shower drain despawned water. You technically have an infinite amount of water, since you can keep the shower on forever - but only a set amount of the water exists at a single point in time.</p>
                <p>Keeping the shower on without despawning it would be called an &quot;infinity leak&quot;, causing Aurora usage to go up indefinitely.
                <br>Despawning things is called &quot;negating&quot; Aurora.</p>
            </dd>
            <dt>Is this the thing that makes Life suck so much Aurora?</dt>
            <dd>Life doesn't negate Aurora. Ever.</dd>
            <dt>How many bits are in a void point?</dt>
            <dd>Can't really compare void/void points to numbers.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="the-ha7-system">
        <h2>The Ha7 System</h2>
        <dl class="docutils">
            <dt>Can you tell us about the Ha7 System? Why is it getting shut down too?</dt>
            <dd>It's also against the new guidelines we're putting in place.</dd>
            <dt>What are the new guidelines?</dt>
            <dd>There's quite a lot of them, and they're mainly about how you use Aurora and how you connect to other Systems.</dd>
            <dt>Does Ha7 stand for anything? Is it an acronym? Are there people living in Ha7 too who're getting transferred?</dt>
            <dd>Ha7 stands for Halcyon automatism 7. We are not doing a transfer mission from Ha7, as their souls are not compatible with LFE, Or any other System in general, which is why it's being shut down.</dd>
            <dt>Is the owner of Ha7 missing too? Or are they just scrapping their system willingly?</dt>
            <dd>They're willingly being unlinked, they wish to start over from scratch.</dd>
            <dt>So it's like Life and LFE are running USB but Ha7 is running firewire?</dt>
            <dd>The owner decided to created their own proprietary soul system, so yeah.</dd>
            <dt>What was existence in Ha7 like?</dt>
            <dd>It was pretty usual, a more simple System focused mainly on magic.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="hyakanghen">
        <h2>Hyakanghen</h2>
        <dl class="docutils">
            <dt>Who are the Hyakanghen?</dt>
            <dd>They're a group of people against the transfer, basically</dd>
            <dt>Are they (the Hyakanghen) dangerous?</dt>
            <dd>They do have quite a bit of power and have shown to be capable of quite a bit.</dd>
            <dt>Is it possible there are Hyakanghen members in Life already?</dt>
            <dd>Very much so.</dd>
            <dt>&quot;Capable of quite a bit&quot;, how so?</dt>
            <dd>
                <p>They have shown to be capable of hijacking Systems (entering blocking ones, especially Life) and soulshattering people.</p>
                <p>One thing to directly look out for (part of the soulshatter method we know of) is compression of the carotid arteries.</p>
            </dd>
            <dt>What is their soulshatter process?</dt>
            <dd>
                <ol class="first last arabic simple">
                    <li>Choke until pass out</li>
                    <li>Wait for death</li>
                    <li>Connect to the soul</li>
                    <li>Damage it from the inside, shattering it</li>
                </ol>
            </dd>
            <dt>Why do they care that a tiny amount of people are transferring?</dt>
            <dd>To keep LFE pure from humans, to keep themselves safe, you name it.</dd>
            <dt>How do we spot them?</dt>
            <dd>Mainly having more info than they should (knowing specific things that we never told them).</dd>
            <dt>How do they communicate between LFE and Life?</dt>
            <dd>We believe Hyakanghen use Auroraic Echoing to communicate.</dd>
            <dt>Are they Corporeal beings, like can they transport into life and &quot;Possess&quot; a Vessel to interact with our world?</dt>
            <dd>They have Life vessels, yes.</dd>
            <dt>How are Hyakanghen made?</dt>
            <dd>Just like normal humans they are born. However, they have memories of the previous past (we assume these are ported by some sort of breach) of being Hyakanghen.</dd>
            <dt>What can we do to fight the hyaks?</dt>
            <dd>Above all, be cautious. If you feel anything strange about someone, stay away. They need physical contact to soulshatter you, as far as we know.</dd>
            <dt>So then why not just disconnect life tomorrow so they can't do anything?</dt>
            <dd>We don't want to kill anyone / have people kill themselves.</dd>
            <dt>Is there no possible way of identifying them?</dt>
            <dd>Not really, no. Other than them knowing more than they should.</dd>
            <dt>Can we broker a peace with them?</dt>
            <dd>They aren't in it for war, they'd rather do things peacefully. But they know we won't accept their offer.</dd>
            <dt>The Hyakanghen disagree with the transfer itself, not humans being transfered, right?</dt>
            <dd>Mainly the transfer. They do dislike humans (they'd rather keep LFE pure), but there's not many of us so they can live with it. It's mainly the transfer and the risk it poses.</dd>
            <dt>Who gives the Hyaks the resources? Or this is more or less volunteer?</dt>
            <dd>Hyakanghen are volunteers, yes.</dd>
            <dt>Are the Hyakanghen a race, or a belief system, like muslims?</dt>
            <dd>It's a label for a belief system.</dd>
            <dt>How many are there currently in Life?</dt>
            <dd>We believe there to be 50.</dd>
            <dt>What is your stance on hyakanghen.net? Are they real hyaks, LARPers, or something in between?</dt>
            <dd>We have no reason to believe they are affiliated with real Hyaks.</dd>
            <dt>Do you have any response to the aforementioned hyaks saying that RISEN is simply going to sell our memories from Life?</dt>
            <dd>Memories are above currencies―they're not things you can &quot;sell&quot;. We have no interest in trying, either.</dd>
            <dt>When we encounter the Hyakanghen on our travels, what do you think would be the best response for us to take?</dt>
            <dd>If you believe they have no way of knowing you're a migrant, try to hide the fact. Otherwise, try to avoid conflict whenever possible (but do not be afraid to incapacitate if they are a direct harm).</dd>
            <dt>What does &quot;Hyankanghen&quot; translate to?</dt>
            <dd>It freely translates to &quot;eclipse of humanity&quot; or some edgy shit like that.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="statements-made-by-tsuki">
        <h2>Statements Made by Tsuki</h2>
        <p>LFE has been around for far longer than Life. It has 128 iterations.</p>
        <p>Life's deletion is a pretty big thing, as it also starts the new era of Systemspace.</p>
        <p>I'm looking into making you all be born in the same city, that's all. You will still be born into a new family.</p>
        <p>People might suspect you're a migrant before 12, but you'll only know for real when you're 12 and regained your memories.</p>
        <dl class="docutils">
            <dt>How will they suspect?</dt>
            <dd>You simply act slightly differently, and since you were born at the exact time of transfer it wouldn't be too farfetched to think you're from Life.</dd>
        </dl>
        <p>You only get transported once everyone who signed up is dead. Life gets sped up so the last 150 years happen in 1 minute, so you'll have no time difference.</p>
        <p>An EoT is &quot;acknowledged&quot; is shown on the parent, which still does not exclaim trust, just acknowledgement.</p>
        <p>It's a one-sided trust, just saying. EoTs are from child to parent.</p>
        <p>LFE has the most people.</p>
        <p>Remember that LFE is far more active and bustling than Life, which was made to be &quot;peaceful&quot;.</p>
        <p>I'm busy working on the Dataverse, which is just a collection of all sorts of interesting stuff I can transfer.</p>
        <p>The soul gets really unstable if its vessel undergoes trauma like being shot.</p>
        <p>I heard the idea for 2chan and imageboards in general was borrowed from some social media network in LFE. Don't take my word for it, though.</p>
        <p>I don't want to force you to keep going through Life, and if you really wish to die, we won't stop you from committing suicide on the 2nd of July. But please, please reconsider. If you completely hate Life, then live for LFE. Try and advance your mind as much as possible. Try all sorts of things. Try and become as wise as possible. Knowledge is the only thing you can transfer and knowledge is key.</p>
        <p>Tsuki fun fact episode watermelon: Tsuki (when written out in Synapsian) looks like a key, which is one of the reasons why the project has been given this name.</p>
        <p>I'm afraid to check logs to see if there's any &quot;Registrant incapacitated&quot;. I'd rather be unknowing forever than have a big message box saying &quot;Ex-registrant incapacitated&quot;.</p>
        <p>All souls are from elsewhere in Life, and Life doesn't create Users. While in LFE, you could very well just be born there, as it generates new Users.</p>
        <p>LFE is many universes big, not just one world.</p>
        <p>There are cities which get taller near the center, but other than Takatonghi Ghakuwent'sj doesn't seem like that. One detail that does strike me is the &quot;black/white&quot; signs, which is actually quite correct for deep Takatonghi.</p>
    </div>
    <hr class="docutils">
    <div class="section" id="what-we-know-about-synapsian">
        <h2>What we know about Synapsian</h2>
    </div>
    <div class="section" id="synapsian-pronunciation-guide">
        <h2>Synapsian Pronunciation Guide</h2>
        <img alt="Pronunciation guide" class="align-center" src="images/synapsian_pronunciation.png" style="width: 400px;" />
    </div>
    <div class="section" id="collection-of-synapsian-names-phrases-numbers-and-words">
        <h2>Collection of Synapsian Names, Phrases, Numbers, and Words</h2>
        <dl class="docutils">
            <dt>Tsuki</dt>
            <dd>Name of company, representative, and hubplanet in Systemspace 2.</dd>
            <dt>Rein</dt>
            <dd>/probably/ Synapsian for Lain.</dd>
            <dt>Kikhko</dt>
            <dd>Popular memory storage service.</dd>
            <dt>Yirson</dt>
            <dd>LFE equivalent of internet.</dd>
            <dt>Mahuensj</dt>
            <dd>Continent in LFE.</dd>
            <dt>Takatonghi</dt>
            <dd>A large area of the capital of LFE, made of skyscrapers.</dd>
            <dt>Kyansjita</dt>
            <dd>Urban location in LFE</dd>
            <dt>Sjiyantan-ko</dt>
            <dd>Suburb of Kyansjita</dd>
            <dt>Ghakuwent'sji</dt>
            <dd>the largest city-state in LFE</dd>
            <dt>Gendatzu</dt>
            <dd>Old Synapsian for &quot;Key&quot;.</dd>
            <dt>Ghendyts</dt>
            <dd>Modern Synapsian for &quot;Key&quot;.</dd>
            <dt>Synni</dt>
            <dd>species in LFE</dd>
            <dt>Espa</dt>
            <dd>species in LFE</dd>
            <dt>Thansj</dt>
            <dd>Angel</dd>
            <dt>Nane</dt>
            <dd>Popular word for human</dd>
            <dt>Ekyan</dt>
            <dd>to appreciate</dd>
            <dt>Lynling</dt>
            <dd>flying creature in southern Mahuensj</dd>
            <dt>Sanyrle</dt>
            <dd>hostile species conquering Mahuensj</dd>
            <dt>Agada</dt>
            <dd>Thank you (less formal).</dd>
            <dt>ashgu or ashgunimai</dt>
            <dd>Thank  you.</dd>
            <dt>xatensj xannti xogadetanjo</dt>
            <dd>I love you.</dd>
            <dt>xatensj xannti gadentanjo</dt>
            <dd>I love you all.</dd>
            <dt>Kon xhoa.</dt>
            <dd>This is a book.</dd>
            <dt>mayyazawa</dt>
            <dd>a name (?)</dd>
            <dt>madaika</dt>
            <dd>a sort of &quot;who knows/cares/it is a mystery&quot;.</dd>
            <dt>dyiri</dt>
            <dd>Proxy.</dd>
            <dt>shosha</dt>
            <dd>Project/mission.</dd>
            <dt>nair</dt>
            <dd>default / none / N/A</dd>
            <dt>t'xa</dt>
            <dd>similar to &quot;fuck&quot; or &quot;shit&quot;.</dd>
            <dt>t'xatna</dt>
            <dd>similar to &quot;fuck off&quot;</dd>
            <dt>konhya</dt>
            <dd>Coffee-like beverage.</dd>
            <dt>Hn'sa</dt>
            <dd>a drug in LFE which overloads the brain.</dd>
            <dt>hnhehen</dt>
            <dd>bodyforming regarding the changing of bones.</dd>
            <dt>hdhahen</dt>
            <dd>bodyforming regarding the changing of skin.</dd>
            <dt>mhenhen</dt>
            <dd>bodyforming regarding the changing of facial features.</dd>
            <dt>khrahen</dt>
            <dd>bodyforming regarding the changing of body parts.</dd>
            <dt>Naine</dt>
            <dd>128</dd>
            <dt>Nangahen</dt>
            <dd>Human</dd>
            <dt>LFEkaiji</dt>
            <dd>People from LFE.</dd>
            <dt>Ghaki-kaiji / Ghakuwent'sj-kaiji</dt>
            <dd>People from Ghakuwent'sj.</dd>
            <dt>Tan</dt>
            <dd>2</dd>
            <dt>Hy</dt>
            <dd>7.72606529604x10^2889</dd>
            <dt>An</dt>
            <dd>Aurora</dd>
            <dt>chi / chj</dt>
            <dd>Life energy</dd>
            <dt>shi / sj</dt>
            <dd>Magic energy</dd>
            <dt>tsu</dt>
            <dd>Other energy, including electricity, matter energy, force, etc.</dd>
            <dt>ts-eba</dt>
            <dd>electricity-types of energy.</dd>
            <dt>Hyakanghen</dt>
            <dd>Anti-Life volunteer group. Translates closely to &quot;eclipse of humanity&quot;.</dd>
        </dl>
    </div>
    <hr class="docutils">
    <div class="section" id="misc">
        <h1>Misc</h1>
        <div class="section" id="referenced-material">
            <h2>Referenced Material</h2>
            <p>Here's an unfinished (I need to make it more busy, it's still too empty, for one there's no people, no guardlines and no traffic) drawing of Sjiyantan-ko, a suburb of Kyansjita.</p>
            <img src="images/mayyazawa.png">
        </div>
    </div>
</div></body>
</html>
