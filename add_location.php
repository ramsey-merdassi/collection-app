<?php

require_once 'db.php';
global $db;

if(isset($_POST['location'], $_POST['url'], $_POST['dish'], $_POST['attraction'], $_POST['beer']))
{
    $location = $_POST['location'];
    $url = $_POST['url'];
    $dish = $_POST['dish'];
    $attraction = $_POST['attraction'];
    $beer = $_POST['beer'];

    $addToDB = $db->prepare('INSERT INTO `destination`(`location`, `top_dish`, `average_beer_price`, `top_attraction`, `image`)
                        VALUES (:location, :top_dish, :average_beer_price, :top_attraction, :image)');

    $addToDB->bindParam(':location', $location);
    $addToDB->bindParam(':top_dish', $dish);
    $addToDB->bindParam(':average_beer_price', $beer);
    $addToDB->bindParam(':top_attraction', $attraction);
    $addToDB->bindParam(':image', $url);

    $addToDB->execute();
}

header('Location: index.php');

