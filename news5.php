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
				<img src="img/gallery1_news5.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Quickplay 1<figcaption>
			</figure>
			<figure id="2">
				<img src="img/gallery2_news5.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Quickplay 2<figcaption>
			</figure>
			<figure id="3">
				<img src="img/gallery3_news5.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Quickplay 3<figcaption>
			</figure>
			<figure id="4">
				<img src="img/gallery4_news5.jpg" alt="title picture 4" title="title picture 4">
				<figcaption>Quickplay 4<figcaption>
			</figure>
		</div>
		<hr>
		<h1>QUICK GAMEPLAY THOUGHTS: 13.16.</h1>
		<figure>
            <img src="img/news5.jpg" alt="news5" title="news5">
        </figure>
		<p>Overall, we’re pretty happy with the current length of games. Right now laning is roughly half of the game while the other half is mid- to late-game, and in games that extend past that we’re seeing a good amount of back and forth that allows for more gameplay options in the mid- and late-game. In Regular brackets of play, game time is slightly longer than Seasons 9, 2020, and 2021 and slightly shorter than Season 2022. For Elite brackets of play, game time has been stable from Season 9.</p>
        <p>Snowballiness in Regular play is in a healthy spot and still lower than pre-Durability Update levels. In Elite play however, snowballiness has increased a bit due to how the changes to dragons and early sustain in patch 12.14 have been optimized by players over time (which was intended to increase the pace of slower Pro games). Unfortunately the trade off was increased snowballing in Elite play, as they are significantly better at taking objectives and utilizing early game advantages to snowball their leads.</p>
        <p>Ideally, lanes are able to snowball a reasonable amount, such that lane play feels rewarding and gives an advantage going into the midgame, but does not completely decide the game. For example, we think that a Darius that comes out of laning 3 kills and 40 cs up should realistically be able to win a 1v2 due to their earned advantage, but they need to then carry that advantage through repeated success in some broader team to team conflict before winning the game.</p>
        <p>We’re not aiming to make significant changes to game time, but are continuing to investigate ways to reduce snowballing in Elite play, while not slowing down the pace in Pro. Things we’re investigating include lowering the impact of early deaths, adjusting the influence junglers currently have on their games and decreasing the impact of early objective rewards. We’re still exploring what these changes would look like, but since design changes in this space are challenging and take time to solve we likely won’t be able to meaningfully address these until after Worlds.</p>
        <p>We’ve been seeing discussion about damage returning to the game now that the durability patch is a year behind us. We agree that damage has been slowly creeping back up, but there are a few reasons for this. Item changes from Midseason this year initially resulted in an increase in damage, but after nerfs in the last few patches have been adjusted to be about neutral damage wise with where we were a year ago. There are some specific champions who lost durability from changes to Shieldbow and Bloodthirster and we’ve been trying to restore that over time (e.g. recent durability increases to Yone and Yasuo).</p>
        <p>We’re working towards a durability level similar to patch 12.12 where each class was viable, combat felt like it was interactive, and many champions were viable. In the original release patches (12.10 and 12.11) assassin and burst champions weren’t viable. If we use Patch 12.9 (the patch right before the durability update) as a baseline, 12.12 was ~10% more durable for squishy champions (like Caitlyn, Viktor, and Soraka) and Patch 13.15 is ~5% more durable, so we’re still better off than where we were, but damage has definitely crept up.</p>
        <p>Top and bot lanes are in a perpetual seesaw of one feeling strong and the other feeling weak. For the vast majority of players in almost all levels of play, top and bot lane are close in power level and agency. The exception here is bot lanes in very high skill brackets where players are able to better coordinate with their teams, absorb pressure without dying, and consistently optimize their damage dealt.</p>
		<p><a href="news.php">Back to news</a></p>
	</main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>