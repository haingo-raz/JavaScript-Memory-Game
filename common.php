<?php
    
    function outputHeader($title){
        echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="./css/game.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>
            <body>';
    }
 
    function outputBanner(){
        echo '
        <div id="banner" class="centerText">
            <a href="index.php"><h1>Memory Game</h1><a>
        </div>
        ';
    }

    function outputNavBar($currentPage){
        echo '
        <nav>
            <ul class="nav-links">'; 

            $linkNames = array("Login", "Rankings", "How To Play", "Logout");
            $linkAddresses = array("login.php", "rankings.php", "howtoplay.php", "logout.php");

            //Output the links
            for($x=0; $x<4; $x++){
                echo '<li ><a ';
                if($linkNames[$x] == $currentPage){
                    echo 'class="selected"';
                }
                echo 'href="'.$linkAddresses[$x].'">'.$linkNames[$x].'</a></li>';
            }
        echo '
            </ul>  
        </nav>';
    }

    function outputFooter(){
        echo '
        </body>
        <footer class="centerText">
            <p><b>Haingo Razafindranto || Memory Game || 2021</b></p>
        </footer>
        </html>';
    }
