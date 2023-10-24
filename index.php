<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : 1; // Set a default value of 1 if 'menu' is not in the URL

print '
<!DOCTYPE HTML>
<html>
	<head>
        <link rel="stylesheet" href="style.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Stranica za pronalazak Duo Queue partnera u igrici League of Legends.">
		<meta name="keywords" content="League of Legends, LoL, Champions, Esports, League of Legends Gameplay">
		<meta name="author" content="gPaulina Lalic">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Duo Queue</title>
	</head>
<body>

    <header>
    <div class="banner"></div>
        <nav>';
        include("menu.php"); // You should include the menu here, not in the main section
        print '
	</header>

    <main>';
    
    if ($menu == 1) { // Correctly compare the menu value
        include("home.php"); // Include the content for menu item 1
    }
    else if ($menu == 2) {
        include("about.php");
    }
    else if ($menu == 3) {
        include("contact.php");
    }
    else if ($menu == 4) {
        include("gallery.php");
    }
    else if ($menu == 5) {
        include("news.php");
    }

    print '
    </main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>