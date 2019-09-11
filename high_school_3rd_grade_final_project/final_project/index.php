<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="cs">

<head>
    <title>Projekt PVY1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="HTML, CSS, webdesign, projekt, PHP, MySQL">
    <meta name="author" content="Jakub Král">
    <meta name="editor" content="VSCode">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="nav">
        <div class="nav__title"><a href="index.php?page=home">Projekt PVY</a></div>
        <ul class="nav__list">
            <li class="nav__item"><a href="index.php?page=ar15">AR-15</a></li>
            <li class="nav__item"><a href="index.php?page=acr">ACR</a></li>
            <li class="nav__item"><a href="index.php?page=vyber">Hra</a></li>
        </ul>
    </nav>

    <?php
    $main = $_GET["page"];
    switch ($main) {
        case "home":
            include "home.php";
            break;
        case "ar15":
            include "ar15.php";
            break;
        case "acr":
            include "acr.php";
            break;
        case "home2":
            include "home2.php";
            break;
        case "vyber":
            include "vyber.php";
            break;
        case "reg":
            include "registrace.php";
            break;
        case "info":
            include "info.php";
            break;
        case "game":
            include "game.php";
            break;
        default:
            include "home.php";
            break;
    }
    ?>
</body>

</html>