<?php 
print '
<!DOCTYPE HTML>
<html>
	<head>
        <link rel="stylesheet" href="style.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Stranica za pronalazak Duo Queue partnera u igrici League of Legends.">
		<meta name="keywords" content="League of Legends, LoL, Champions, Esports, League of Legends Gameplay">
		<meta name="author" content="Paulina Lalic">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Duo Queue</title>
	</head>
<body>

    <header>
		<div class="banner"></div>
        <nav>';
        include("menu.php"); 
        print '
	</header>
    <main>
		<h1>NEWS</h1>
		<div id="news_gallery">
			<figure id="1">
				<img src="img/gallery1_news1.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Quickplay 1<figcaption>
			</figure>
			<figure id="2">
				<img src="img/gallery2_news1.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Quickplay 2<figcaption>
			</figure>
			<figure id="3">
				<img src="img/gallery3_news1.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Quickplay 3<figcaption>
			</figure>
			<figure id="4">
				<img src="img/gallery4_news1.jpg" alt="title picture 4" title="title picture 4">
				<figcaption>Quickplay 4<figcaption>
			</figure>
		</div>
		<hr>
		<h1>Everything you need to know about Quickplay, the mode replacing Blind Pick.</h1>
		<figure>
            <img src="img/news1.jpg" alt="news1" title="news1">
        </figure>
		<p>Hey everyone, we are Tara “Riot Sailormoon” Chen and Jason “CrabDust” Cohen, the Product and Design Leads of Quickplay here with an update! That’s right, we haven’t forgotten about it since Riot Auberaun initiated this project months ago. It’s coming this year! A few months back Pu “Riot Pupulasers” Liu, our Game Director, mentioned that we were looking to solve some issues that we were seeing with Blind Pick by replacing it with a new format called Quickplay. Today we want to dig into that a little more and tell you why we’re making this change, how it works, and when it’s coming out.</p>
		<p>What is Quickplay? Quickplay is a new queue that will replace Blind Pick and give you faster access to the game, with a faster process that asks players to make their choices up-front and then goes directly from the lobby to the game. Meaning, there is no champ select in this mode.</p>
		<p>Moving champion and position choices to the lobby gets you in game faster, with higher agency over what (and who) you play, and cutting out some of the collisions, toxicity, and complexity that comes with Blind Pick.</p>
		<p>What’s wrong with Blind Pick?</p>
        <p>BP = Blood Pressure? Blind Pick was designed and optimized for fast queue times. It pushes player choice into champ select, which makes the queue pop quickly. But, there are only so many lanes. Asking players to negotiate a functional team comp with strangers, against the clock, and with limited communication tools is a recipe for friction. This is fine for players with an auto-fill mindset, but imagine: You get home from work and just want to try out the new champ, or maybe you’re getting back into League after a long break and want to ease back in on a comfort pick. For a queue with no bans, it’s tough to play what you want in Blind Pick. Some players bypass the negotiation altogether by locking in first. This gives an unfair advantage to those with the fastest fingers and it forces everyone else to fill in what’s left or leave.</p>
        <p>Trust Experimental players and folks who just want to practice have multiple hurdles to overcome in Blind Pick. Say they want to try out Warwick mid—not only do they need to get lucky in champ select with both position and champion choices, but they also risk queue dodges for their unorthodox pick. Get right onto the Rift and show `em who’s a good boy.</p>
        <p>Not-so-welcome to Summoner’s Rift Players who are newer to the game have an even harder time with this setup. They have limited champion pools and narrow positional flexibility. If they get forced into jungle because their teammates lock in everything else, we can\'t be too surprised when they end up in lane because they don’t know where to go.</p>
		<p><a href="news.php">Back to news</a></p>
	</main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>