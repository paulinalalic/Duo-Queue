<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summoner Search</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Additional CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .player-info {
            text-align: center;
        }
        .player-info img {
            max-width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .player-info table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
            max-width: 400px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .player-info th,
        .player-info td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .player-info th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<header>
    <div class="banner"></div>
    <nav>
        <?php include("menu.php"); ?>
    </nav>
</header>

<body>
    <div class="container">
        <h1>Summoner Search</h1>
        <form action="" method="POST">
            <label for="summonerName">Summoner Name:</label>
            <input type="text" id="summonerName" name="summonerName" required>
            <button type="submit">Search</button>
        </form>

        <?php
        if (isset($_POST['summonerName'])) {
            // Set your API key here
            $apiKey = 'RGAPI-c2fc8af2-6dda-41b7-9deb-971e28808379';

            // Function to fetch player info by summoner name
            function getPlayerInfo($summonerName, $apiKey) {
                $url = 'https://na1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . urlencode($summonerName) . '?api_key=' . $apiKey;
                $response = file_get_contents($url);
                return json_decode($response, true);
            }

            // Example usage
            $summonerName = $_POST['summonerName'];
            $playerInfo = getPlayerInfo($summonerName, $apiKey);

            // Exclude id, accountId, and puuid fields
            unset($playerInfo['id'], $playerInfo['accountId'], $playerInfo['puuid']);

            // Display the player info
            echo '<div class="player-info">';
            echo '<img src="http://ddragon.leagueoflegends.com/cdn/13.12.1/img/profileicon/' . $playerInfo['profileIconId'] . '.png" alt="Summoner Icon">';
            echo '<table>';
            foreach ($playerInfo as $key => $value) {
                echo '<tr>';
                echo '<th>' . ucfirst($key) . '</th>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
