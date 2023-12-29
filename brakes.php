<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Engine</title>
    <link rel="stylesheet" href="aston.css">
</head>
<body>
    <nav class="transparent-navbar">
        <span class="logo">
            <img src="logo.png"/>
        </span>
        <ul>
            <li><a href="#">REGISTER</a></li>
            <li><a href="#">SIGN IN</a></li>
            <li><a href="#">SIGN OUT</a></li>
        </ul>
    </nav>
    <div class="text">
        <h2>Brakes</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores commodi molestias voluptatem aliquam hic rerum. Ratione minima pariatur maxime debitis, necessitatibus dolore rem sapiente voluptates a ad. Fugiat officiis quos quaerat asperiores? Sit vero officiis iure vel unde praesentium ratione magnam quos accusamus autem officia consequatur illo modi voluptas sequi voluptatem, adipisci reprehenderit natus dolores! Quibusdam soluta laborum sit ad minima nam ut? Eius a dicta vitae molestias minus impedit. Rerum unde debitis ullam dolores corrupti! At soluta eaque illum asperiores velit incidunt repellat repellendus, maiores natus delectus excepturi error molestiae qui quibusdam sit ratione assumenda. Doloremque iusto cupiditate modi?
        </p>
    </div>
    
</body>
</html>