<?php
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>
            MOVIE
        </h1>
    </header>
    <form action="" method="get">
        <input type="text" name="search" id="search" placeholder="Search Movie" class="bar">
        <input type="submit" value="Search" name="btn-search" class="btn">
    </form>
    <div class="content" id="content">
        <?php 
            display();
        ?>
    </div>
</body>
</html>