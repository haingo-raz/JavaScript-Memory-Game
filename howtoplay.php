<?php
    //link to the external php file
    include 'common.php';

    //ouput header
    outputHeader("How To Play");

    //output banner at the top of the page-->
    outputBanner();

    //output navigation  bar
    outputNavBar("How To Play");
?>


<div class="rules-container">
    <!--title-->
    <h2>Rules of the game:</h2>

    <!--Display instructions for the game in bullet points-->
    <ul id="tutorials">
        <li><a href="registration.php">Register</a> with your details.</li>
        <li><a href="login.php">Login</a> to your account with your username and password to save highscores.</li>
        <li>Go on the <a href="index.php">game</a> page.</li>
        <li>Click on the play button to play the game.</li>
        <li>The game has 3 different levels (Easy / Medium / Difficult) and you have to play all 3 at once. The 3 levels have respectively 8,12 and 16 cards.</li>
        <li>Find all the pairs by clicking on the cards and combine them together.</li>
        <li>You will receive a score of 10 points for each right pair guess.</li>
        <li>Complete the game within the time limit (2:00mn).</li>
        <li>Your final score will be stored if you complete the game within the time limit or not.</li>
        <li>Check your score in the <a href="rankings.php">rankings</a> page.</li>
        <li>You can logout in the <a href="index.php">game</a> page by clicking on the logout link in the top right corner</li>
    </ul>
</div>

<!--output the footer from the common.php file-->
<?php
    outputFooter();
