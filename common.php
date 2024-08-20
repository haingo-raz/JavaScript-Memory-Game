<?php
session_start();

function outputHeader($title){
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>'.$title.'</title>
            <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
            <link rel="stylesheet" href="./css/index.css">
            <link rel="stylesheet" href="./css/nav.css">
            <link rel="stylesheet" href="./css/game.css">
            <link rel="stylesheet" href="./css/rules.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>';
}

function outputBanner(){
    echo '
    <div id="banner" class="centerText">
        <a href="index.php"><h1>Memory Game</h1></a>
    </div>
    ';
}

function outputNavBar($currentPage){
    echo '
    <nav>
        <ul class="nav-links">'; 

        $linkNames = array("Login", "Rankings", "How To Play", "Logout");
        $linkAddresses = array("login.php", "rankings.php", "howtoplay.php", "logout.php");

        // Check if the user is logged in
        $isLoggedIn = isset($_SESSION['username']);

        if ($isLoggedIn) {
            echo '<li class="nav-username">Hi ' . $_SESSION['username'] . '!</li>';
        }
        //Output the links
        for ($x = 0; $x < 4; $x++) {
            if ($isLoggedIn && $linkNames[$x] == "Login") {
                continue;
            }
            if (!$isLoggedIn && $linkNames[$x] == "Logout") {
                continue;
            }
            echo '<li><a ';
            if ($linkNames[$x] == $currentPage) {
                echo 'class="selected"';
            }
            echo 'href="' . $linkAddresses[$x] . '"';
            if ($linkNames[$x] == "Logout") {
                echo ' onclick="logout()"';
            }
            echo '>' . $linkNames[$x] . '</a></li>';
        }
        echo '
        </ul>  
    </nav>';
    if (!$isLoggedIn) {
        echo '<div class="loginInfo" id="loginInfo">';
            echo '<a href="login.php"><i class="fa fa-info-circle" style="font-size:24px"></i> Not signed in. No scores are saved.</a>';
        echo '</div>';
    }
}

function outputFooter(){
    echo '
        </body>
        <footer class="centerText">
            <p><b> Made with 💖 by <a href="https://github.com/haingo-raz">HR<a> || Memory Game || 2021</b></p>
        </footer>
    </html>';
}