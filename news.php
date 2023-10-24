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
		<div class="news">
			<a href="news1.php"><img src="img/news1.jpg" alt="Everything you need to know about Quickplay, the mode replacing Blind Pick." title="Everything you need to know about Quickplay, the mode replacing Blind Pick."></a>
			<h2>Everything you need to know about Quickplay, the mode replacing Blind Pick.</h2>
			<p>Hey everyone, we’re Tara “Riot Sailormoon” Chen and Jason “CrabDust” Cohen, the Product and Design Leads of Quickplay here with an update! <a href="news1.html">More ...</a></p>
			<p><time datetime="2023-10-12">12 October 2023</time></p>
			<hr>
			<a href="news2.php"><img src="img/news2.jpg" alt="PATCH 13.20 NOTES" title="PATCH 13.20 NOTES"></a>
			<h2>PATCH 13.20 NOTES</h2>
			<p>In this patch we have some pretty big changes, namely to the jungle and snowballing mechanics. For the jungle, our goals are twofold: first, we want to lower the power of the jungle as a role. <a href="news2.html">More ...</a></p>
			<p><time datetime="2023-10-10">10 October 2023</time></p>
			<hr>
			<a href="news3.php"><img src="img/news3.jpg" alt="QUICK GAMEPLAY THOUGHTS: ADDRESSING MYTHICS" title="QUICK GAMEPLAY THOUGHTS: ADDRESSING MYTHICS"></a>
			<h2>QUICK GAMEPLAY THOUGHTS: ADDRESSING MYTHICS</h2>
			<p>As mentioned in the most recent Dev Update, we’re going to be removing the Mythic item class come Season 2024. <a href="news3.html">More ...</a></p>
			<p><time datetime="2023-10-07">07 October 2023</time></p>
			<hr>
            <a href="news4.php"><img src="img/news4.jpg" alt="CHAMPION INSIGHTS: BRIAR" title="CHAMPION INSIGHTS: BRIAR"></a>
			<h2>CHAMPION INSIGHTS: BRIAR</h2>
			<p>Welcome to Noxus. The home of ruthless warlords, expansionist dreams, and quite possibly your new best friend—at least, if she had it her way. <a href="news4.html">More ...</a></p>
			<p><time datetime="2023-10-06">06 October 2023</time></p>
			<hr>
            <a href="news5.php"><img src="img/news5.jpg" alt="QUICK GAMEPLAY THOUGHTS: 13.16" title="QUICK GAMEPLAY THOUGHTS: 13.16"></a>
			<h2>QUICK GAMEPLAY THOUGHTS: 13.16</h2>
			<p>This week I want to talk about three topics that we’ve been seeing pop up lately: game time and snowballing, champion durability, and role balance (primarily bot, top, and jungle). <a href="news5.html">More ...</a></p>
			<p><time datetime="2023-10-04">04 October 2023</time></p>
			<hr>
            
		</div>
    </main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>