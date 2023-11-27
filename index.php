<?php
define('__APP__', TRUE);
session_start();
include ("connect.php");
# Variables MUST BE INTEGERS
if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

# Variables MUST BE STRINGS A-Z
if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

if (!isset($menu)) { $menu = 1; }
$menu = isset($_GET['menu']) ? $_GET['menu'] : 1; // Set a default value of 1 if 'menu' is not in the URL
include_once("funkcije.php");
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
        include("menu.php"); 
        print '
	</header>

    <main>';

    if (isset($_SESSION['message'])) {
        print $_SESSION['message'];
        unset($_SESSION['message']);
    }

    
    if ($menu == 1) { 
        include("home.php"); 
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
    else if ($menu == 6) {
        include("register.php");
    }
    else if ($menu == 7) {
        include("login.php");
    }
    else if ($menu == 8) {
        include("admin.php");
    }

    print '
    </main>
    <footer>
		<p>Copyright &copy; 2023 Paulina Lalic. <a href="https://github.com/paulinalalic" target="_blank"><img src="img/github.png" title="GitHub" alt="GitHub"></a></p>
	</footer>
</body>
</html>';
?>