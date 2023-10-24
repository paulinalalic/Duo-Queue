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
				<img src="img/gallery1_news3.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Quickplay 1<figcaption>
			</figure>
			<figure id="2">
				<img src="img/gallery2_news3.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Quickplay 2<figcaption>
			</figure>
			<figure id="3">
				<img src="img/gallery3_news3.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Quickplay 3<figcaption>
			</figure>
			<figure id="4">
				<img src="img/gallery4_news3.jpg" alt="title picture 4" title="title picture 4">
				<figcaption>Quickplay 4<figcaption>
			</figure>
		</div>
		<hr>
		<h1>QUICK GAMEPLAY THOUGHTS: ADDRESSING MYTHICS</h1>
		<figure>
            <img src="img/news3.jpg" alt="news3" title="news3">
        </figure>
		<p>While the Mythic item system works reasonably well for some classes like assassins, for other classes with more divergent needs it’s been difficult to satisfy all of the users across each of the subclasses.</p>
        <p>As an example, fighters have many different subclasses (divers, juggernauts, skirmishers, etc.), so trying to fulfill the needs of all those different champions with only four items has proven to be extremely difficult.</p>
        <p>While theoretically we could solve the Mythic needs of these champions by creating ~10 Mythics split across each of the subclasses of fighter, every item we add to the Mythic pool adds an additional item’s worth of complexity to the game. There is a maximum number of items that League can have before it gets too complicated, and for every Mythic item that we add, an item slot is taken up and there is one less in the Legendary item pool.</p>
        <p>Going into Mythic items, we knew that adding them would mean less itemization options for item slots 2-5. We did increase the total item pool to compensate for this since we knew the Legendary space would be more pinched, but it still wasn’t enough. We initially thought that the excitement Mythics were bringing as a new tier of items would overcome this, but while ~50% of champions were satisfied with their Mythic items, the other ~50% were left feeling like they didn’t have items that felt right for them. To fully satisfy the needs of all champions, we would need to add ~30% more items (and the complexity associated with each) to the item system, which we don’t want to do, as that will make League significantly harder to learn.</p>
        <p>When we started out with Mythic items, they were intended to be high excitement with unique outputs, similar to getting really awesome unique items in MMOs and ARPGs. Dashes (Stridebreaker, Prowlers, Galeforce), big heals, and hard CC were previously few and far between. For example, a Fiddlesticks or Morgana feels like their gameplay gets transformed for the better when they complete Zhonya’s Hourglass and we were interested in exploring a version of League that had more kit warping effects that augmented champion fantasies for other classes.</p>
        <p>Balancing a champion’s total power budget is done by considering their kit, items, summoner spells, runes, etc. This innately means that if an item takes up a significant portion of this power budget, then other aspects like abilities need to take up a smaller amount. After observing the past few years, we think even unique item effects in the Legendary item system are overriding champions’ gameplay too much and would like to reduce it by some amount. This will allow more of the champions’ unique gameplay to shine, rather than being a champion delivery system for up-front burst damage procs as an example.</p>
        <p>Elegant design that is still satisfying is the holy grail that we aspire for. Simple items with a clear purpose reduce the barrier to entry of learning League and reduce the unnecessary complexity in making choices between competing itemization options. But having a single unique item that creates balanced choices across users, is satisfying, and makes good use of an item slot is incredibly difficult to achieve in actuality. Where possible, we would like to reduce item complexity to have one clear unique effect and a maximum of 3 stats. We also want items to have at least ~5 users, but with as diverse of a champion roster as we have in League, we know we will need to make exceptions in some places.</p>
		<p><a href="news.php">Back to news</a></p>
	</main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>