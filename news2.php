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
				<img src="img/gallery1_news2.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Quickplay 1<figcaption>
			</figure>
			<figure id="2">
				<img src="img/gallery2_news2.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Quickplay 2<figcaption>
			</figure>
			<figure id="3">
				<img src="img/gallery3_news2.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Quickplay 3<figcaption>
			</figure>
			<figure id="4">
				<img src="img/gallery4_news2.jpg" alt="title picture 4" title="title picture 4">
				<figcaption>Quickplay 4<figcaption>
			</figure>
		</div>
		<hr>
		<h1>PATCH 13.20 NOTES</h1>
		<figure>
            <img src="img/news2.jpg" alt="news2" title="news2">
        </figure>
		<p>In this patch we have some pretty big changes, namely to the jungle and snowballing mechanics. For the jungle, our goals are twofold: first, we want to lower the power of the jungle as a role. Junglers are of supreme importance in the mid and late game due to their exceptional control over epic monsters, which means they do not need to be as dominant as they are in PvP interactions. Second, we want to ensure the role is satisfying to play. Lowering some of the stress around Smiting epic monsters with targeting forgiveness and protecting camps from non-jungle poaching should ensure they're able to perform. With regards to snowballing in League, our main goal is to decelerate how quickly teams can snowball early leads so that everyone can access other fun parts of the mid to late game like team fighting and objective planning that should have a bigger role in deciding games. We've got quite a few changes on these topics, so make sure you read more down below! We also have our usual balance adjustments as well, with some larger changes to K'Sante and more moderate ones for champs like Morgana and Bel'Veth.</p>
        <p>We also have a lot of drops that you won\'t want to miss out on in this patch as well, like the Jax visual update, another round of additions to the Coven skin line, and last, but certainly not least, the much requested adaptation of Redeemed Xayah and Rakan for League! We'll also be updating the loading screen on Summoner's Rift to a new one celebrating the 2023 Worlds Championship.        </p>
        <p>Lastly we have some follow up adjustments to the ranked restrictions and ping adjustments from the last patch based on player feedback, so make sure to check those out as well.</p>
        <p>Redeemed Star Guardian Xayah and Rakan will be made available for purchase this patch for 1820 RP each. If you own the original Star Guardian skin, you can get the Redeemed version of the same champion for 45% off (1001 RP). If you get the Redeemed version first, you can get the original for 45% off as well. They will be available for purchase until December 31, 2023 at which point they will be removed.</p>
        <img src="img/news2_1.jpg" alt="news2" title="news2">
		<p><a href="news.php">Back to news</a></p>
	</main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>