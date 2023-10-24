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
				<img src="img/gallery1_news4.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Quickplay 1<figcaption>
			</figure>
			<figure id="2">
				<img src="img/gallery2_news4.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Quickplay 2<figcaption>
			</figure>
			<figure id="3">
				<img src="img/gallery3_news4.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Quickplay 3<figcaption>
			</figure>
			<figure id="4">
				<img src="img/gallery4_news4.jpg" alt="title picture 4" title="title picture 4">
				<figcaption>Quickplay 4<figcaption>
			</figure>
		</div>
		<hr>
		<h1>CHAMPION INSIGHTS: BRIAR</h1>
		<figure>
            <img src="img/news4.jpg" alt="news4" title="news4">
        </figure>
		<p>Most of the Noxians we know (looking at you, Swain and Sion) want nothing more than to dominate their opponents. But killing things has always come easily to Briar. A little too easily. That’s because she was made for it.</p>
        <p>The Black Rose made her sentient so that she could understand and execute orders, but there was one flaw. In order to kill her targets, the Black Rose kept Briar in a frenzied state. She was in a perpetual bloodthirsty rage. In this state of mind, Briar’s intelligence and vocabulary basically dwindled down to, “AHHHH! MORE BLOOD!”</p>
        <p>“She really only went out on two missions,” reveals narrative lead Max “TwoWeevils” Folkman. “And both times she failed by the Black Rose’s standards because she was uncontrollable. She actually killed too many other people. So Briar knows that she was a failed experiment. That’s part of her burden now. She’s redefining herself.”</p>
        <p>Briar not only killed her targets, but anyone who stood in her path. For the calculated and discrete Black Rose, she proved to be more of a liability than an asset.        </p>
        <p>After Briar failed her first mission, the Black Rose put her in a pillory until they knew her next target. And after failing that mission, she was captured by Swain’s forces and confined to a cell in a holding facility. Needless to say, the pillory stays on. The device was locked by a hemolith—a gemstone with magical properties that helps restrain Briar and refocus her mind. The pillory was meant to be a permanent fixture after she was confined to her cell. But after some time, Briar figured out how to loosen the hemolith and unlock the restraint. Lucky for those around her, Briar enjoys the presence of mind that the pillory brings.</p>
        <p>“Prior to being in the pillory, she was on autopilot with her sensations. Especially with her hunger,” explains narrative editor Elan “Qulani” Stimmel. “Her violence was essentially created to be a part of her existence, and after having that pillory put on her, she realized that this device was sort of a cursing and a blessing. Yes, a cursing [laughs]. You can quote me on that.”</p>
        <p>She was no longer bound by her frenzy. Instead, she was bound by the pillory. She quickly learned to enjoy the mental clarity that restraint brought with it. With the combination of prison and pillory, Briar had time to reflect, but also to learn. She internalized her cell guards’ conversations, chatted with other captives in holding, and studied the strange insects that crawled into her cell. All of these outside influences revealed to her that there was so much more to be discovered.</p>
		<p><a href="news.php">Back to news</a></p>
	</main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>