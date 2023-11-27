<?php 
session_start();
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
		
		<h1>Gallery</h1>
		<div id="gallery">
			<figure id="1">
                <a href="img/player1.jpg" target="_blank">
				<img src="img/player1.jpg" alt="Deft" title="Deft">
                </a>
				<figcaption>ADC “Deft”. Always considered a strong ADC player and one of the best-performing players in the teams he played in, he was never able to make great international results.<figcaption>
			</figure>
			<figure id="2">
                <a href="img/player2.jpg" target="_blank">
				<img src="img/player2.jpg" alt="Ruler" title="Ruler">
                </a>
				<figcaption>One of the best players on any team he went to. He went from Challengers Korea to the Worlds finals in less than a year, and then beat Faker the following year to become World champion.
                    <figcaption>
			</figure>
			<figure id="3">
                <a href="img/player3.jpg" target="_blank">
				<img src="img/player3.jpg" alt="Faker" title="Faker">
                </a>
				<figcaption>Results aside, there isn’t a pro that even comes close to him, especially when we refer to being at the pinnacle of professional League of Legends.<figcaption>
			</figure>
            <div style="clear: both;"></div>
			<figure id="4">
                <a href="img/player4.jpg" target="_blank">
				<img src="img/player4.jpg" alt="Yike" title="Yike">
                </a>
				<figcaption>He was one of the most consistent players on the roster and showcased different playstyles and great adaptability, depending on the meta.<figcaption>
			</figure>
			<figure id="5">
                <a href="img/player5.jpg" target="_blank">
				<img src="img/player5.jpg" alt="Rekkles" title="Rekkles">
                </a>
				<figcaption>When he joined Fnatic in 2014, the team found immediate success by winning the EU LCS Spring Split.<figcaption>
			</figure>
            <figure id="6">
                <a href="img/player6.jpg" target="_blank">
				<img src="img/player6.jpg" alt="Perkz" title="Perkz">
                </a>
				<figcaption>Beyond his nine domestic titles, he is on the very short list of players (alongside his one-time teammate Zven) to win both the LEC and LCS.<figcaption>
			</figure>
            <div style="clear: both;"></div>
            <figure id="7">
                <a href="img/player7.jpg" target="_blank">
				<img src="img/player7.jpg" alt="Ruler" title="Ruler">
                </a>
				<figcaption>Ruler made the iconic play to clinch the World Championship for Samsung Galaxy, catching Faker out of position to initiate the series-winning teamfight.<figcaption>
			</figure>
            <figure id="8">
                <a href="img/player8.jpg" target="_blank">
				<img src="img/player8.jpg" alt="Xiaohu" title="Xiaohu">
                </a>
				<figcaption>A five-time domestic champion and three-time international winner, Xiaohu’s longevity is particularly impressive, while his strength as a player is impossible to ignore. <figcaption>
			</figure>
            <figure id="9">
                <a href="img/player9.jpg" target="_blank">
				<img src="img/player9.jpg" alt="Rookie" title="Rookie">
                </a>
				<figcaption>Rookie spent the strong majority of his career in China and has blossomed into the greatest mid laner in the history of the region over the span of his career. <figcaption>
			</figure>
            <div style="clear: both;"></div>
            <figure id="10">
                <a href="img/player10.jpg" target="_blank">
				<img src="img/player10.jpg" alt="Uzi" title="Uzi">
                </a>
				<figcaption>With back-to-back Worlds final appearances to start his career and an eventual international title at MSI 2018, Uzi is one of the most accomplished-over-time players in League history. <figcaption>
			</figure>
		</div>

    </main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>