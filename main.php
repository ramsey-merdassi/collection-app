<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insider Travel</title>
    <link href="insider_travel.css" rel="stylesheet">
</head>
<body>
<header>
    <div>
        <h1>Insider Travel</h1>
    </div>
</header>
</body>




</html>







<?php

// connect to the database
$db = new PDO('mysql:host=db; dbname=destination', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

$query = $db->prepare('SELECT `location`, `top_dish`, `average_beer_price`, `top_attraction` FROM `destination`');
$query->execute();

$results = $query->fetchAll();

var_dump($results);

