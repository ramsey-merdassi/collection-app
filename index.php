<?php
global$results;
require_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insider Travel</title>
    <link href="insider_travel.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<header>
    <div>
        <h1>Insider Travel</h1>
    </div>
</header>
<section>
    <div>
      <?php
           foreach($results as $destination)
           {
             echo "<h2>".$destination['location']."</h2>".
             "<img src={$destination['image']}>".
             "<h3>"."Pint of beer(average): £".$destination['average_beer_price']."</h3>".
             "<h3>"."Must try: ".$destination['top_dish']."</h3>".
             "<h3>"."Must see: ".$destination['top_attraction']."</h3>";
           }
           ?>
    </div>
</section>
<footer>
    <div>
        <h4>Provide feedback</h4>
        <a href="mailto:merdassi.r@gmail.com">
            <i id='email' class='bx bxs-envelope'></i>
        </a>
    </div>
</footer>
</body>
</html>





