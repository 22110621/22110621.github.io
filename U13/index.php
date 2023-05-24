<?php
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Mobile World Station</title>
</head>
<body>
   <?php 
   include("./header.php");
   ?>
   <section class="main">
    <?php
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        if ($parsed_url['path'] === '/') {
            include(__DIR__ . "/home.php");

        } else if ($parsed_url['path'] === '/contact') {
            include(__DIR__ . "/contact.php");

        } else if ($parsed_url['path'] === '/phones') {
            include(__DIR__ . "/phones.php");

        } else if ($parsed_url['path'] === '/help') {
            include(__DIR__ . "/help.php");

        }  else if ($parsed_url['path'] === '/information') {
            include(__DIR__ . "/useful-information.php");
        }

        include("./footer.php");
    ?>
</section>
</body>
</html>