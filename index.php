<?php

require_once 'db.php';

global $db;
$query = $db->prepare('SELECT `location`, `top_dish`, `average_beer_price`, `top_attraction`, `image` FROM `destination`');
$query->execute();

$results = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insider Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bitter:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bitter:ital,wght@0,100..900;1,100..900&family=Dancing+Script:wght@400..700&family=Noto+Sans+SC:wght@100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="insider_travel.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="brand">
        <h1>Insider</h1>
        <h1 class="travel_name">Travel</h1>
    </div>
</header>
<div class="slogan"><h2 class='pink_color'>Know</h2><h2>before</h2></div>
<div class="slogan"><h2>you</h2><h2 class='pink_color'>go</h2><h2>!</h2></div>
<div class='container'>
        <?php
        foreach($results as $destination)
        {
            echo "<div class='destination_container'>"
                    ."<div class='location' style='background-image: url({$destination['image']})'>"
                        ."<div class='destination_name'>".$destination['location']."</div>"
                    ."</div>"
                    ."<div class='stats'>"
                        ."<div class = 'inner_stats'>"
                            ."<div>"
                                ."<h3>Pint of beer:</h3>"
                            ."</div>"
                            ."<div class = 'stats_values'>"
                                ."<img class ='stats_icon' src='images/beer.png'>"
                                ."<h5>"."£".$destination['average_beer_price']."</h5>"
                            ."</div>"
                        ."</div>"
                        ."<div class = 'inner_stats'>"
                            ."<div>"
                                ."<h3>Must try:</h3>"
                            ."</div>"
                            ."<div class = 'stats_values'>"
                                ."<img class ='stats_icon' src='images/meal.png'>"
                                ."<h5>".$destination['top_dish']."</h5>"
                            ."</div>"
                        ."</div>"
                        ."<div class = 'inner_stats'>"
                            ."<div>"
                                ."<h3>Must see:</h3>"
                            ."</div>"
                            ."<div class = 'stats_values'>"
                                ."<img class ='stats_icon' src='images/sightseeing.png'>"
                                ."<h5>".$destination['top_attraction']."</h5>"
                            ."</div>"
                        ."</div>"
                    ."</div>"
                ."</div>";
        }
        ?>
</div>
<div class="user_input">
    <div class="form_header">
        <h1 class="add_destination">Add a</h1>
        <h1 class="add_destination">destination</h1>
    </div>
    <form action="add_location.php" method="POST">
        <input required type='text' name='location' placeholder="Location">
        <input required type='url' name='url' placeholder="Image url">
        <input required type='text' name='dish' placeholder="Favourite dish">
        <input required type='text' name='attraction' placeholder="Favourite attraction">
        <input required type='text' name='beer' placeholder="Cost of Pint of beer">
        <input class=button type="submit">
    </form>
</div>
<footer>
    <div>
        <h4>Contact Us</h4>
        <a href="mailto:merdassi.r@gmail.com">
            <i id='email' class='bx bxs-envelope'></i>
        </a>
    </div>
</footer>
</body>
</html>



