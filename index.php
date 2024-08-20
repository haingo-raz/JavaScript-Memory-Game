<?php
    //link to external php file
    include 'common.php';
    //output the banner
    outputHeader("Play the Memory Game");  
    //output banner at the top of the page-->
    outputBanner();
    //output navigation  bar
    outputNavBar("Game");
?>

<!--descriptive text on the home page-->
<div class="content" id="content">
    <div class="imgDemoContainer">
        <img id="imgDemo" src="./assets/ImageDemo.png" alt="imgDemo" title="Game Demo">
    </div>

    <div class="text">
        <div class="text-container">
            <div class="welcome" id="welcomeText">
                <p>Do you want to have fun while training your brain? Are you looking for an activity to pass your free time at home? 
                 Do you want to play a cardgame? Either way, you are at the right place. Welcome to the 
                popular Memory Game! If you are new here, we have a suitable <a href="howtoplay.php">guide</a> for you. Otherwise, you can play by clicking on the play button below.</p> 
            </div>

            <div class="btnlist">
                <button id="playbtn" onclick="startGame(); displayEasyLevel();">Play</button>
            </div>
        </div>
    </div>

</div>


<!--Display information / details about the game-->
<div class="gameInfo" id="gameInfo">
    <ul>
        <li class="centerText" >Time left: <span id="countdown">2: 00</span></li>
        <li class="centerText">Moves: <span class="moves-counter">0</span></li>
        <li class="centerText">SCORE: <span class="score-counter">0</span></li>
    </ul>
</div>


<!--Easy mode : 8 cards -->
<div class="easy-mode" id="easy-mode">

    <!--Wrap the 8 cards-->
    <div class="easy-card-container">

        <!--single card container-->
        <div class="card" data-framework="Moon">
            <!--Image: front of the card-->
            <img class="front-card" src="./assets/Moon.png" alt="Moon"/>
            <!--Logo: back of the card-->
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Sun">
            <img class="front-card" src="./assets/Sun.png" alt="Sun"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Rainbow">
            <img class="front-card" src="./assets/Rainbow.png" alt="Rainbow"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Sun">
            <img class="front-card" src="./assets/Sun.png" alt="Sun"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Rainbow">
            <img class="front-card" src="./assets/Rainbow.png" alt="Rainbow"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Cloud">
            <img class="front-card" src="./assets/Cloud.png" alt="Cloud"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Moon">
            <img class="front-card" src="./assets/Moon.png" alt="Moon"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Cloud">
            <img class="front-card" src="./assets/Cloud.png" alt="Cloud"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>
    </div>   
</div>

<!--Medium mode : 12 cards -->
<div class="medium-mode" id="medium-mode">

    <!--Wrap the 12 cards-->
    <div class="med-card-container">

        <!--single card container-->
        <div class="card" data-framework="Elephant">
            <!--Image: front of the card-->
            <img class="front-card" src="./assets/Elephant.png" alt="Elephant"/>
            <!--Logo: back of the card-->
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Panda">
            <img class="front-card" src="./assets/Panda.png" alt="Panda"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Tiger">
            <img class="front-card" src="./assets/Tiger.png" alt="Tiger"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Elephant">
            <img class="front-card" src="./assets/Elephant.png" alt="Elephant"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Cow">
            <img class="front-card" src="./assets/Cow.png" alt="Cow"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Flamingo">
            <img class="front-card" src="./assets/Flamingo.png" alt="Flamingo"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Turtle">
            <img class="front-card" src="./assets/Turtle.png" alt="Turtle"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Tiger">
            <img class="front-card" src="./assets/Tiger.png" alt="Tiger"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Flamingo">
            <img class="front-card" src="./assets/Flamingo.png" alt="Flamingo"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Turtle">
            <img class="front-card" src="./assets/Turtle.png" alt="Turtle"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Cow">
            <img class="front-card" src="./assets/Cow.png" alt="Cow"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Panda">
            <img class="front-card" src="./assets/Panda.png" alt="Panda"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>
    </div>   
</div>

<!--Difficult mode : 16 cards-->

<div class="difficult-mode" id="difficult-mode">

    <!--Wrap the 16 cards-->
    <div class="diff-card-container"> 

        <!--single card container-->
        <div class="card" data-framework="Ball">
            <!--Image: front of the card-->
            <img class="front-card" src="./assets/Ball.png" alt="Ball"/>
            <!--Logo: back of the card-->
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Dinosaur">
            <img class="front-card" src="./assets/Dinosaur.png" alt="Dinosaur"/> 
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Ball">
            <img class="front-card" src="./assets/Ball.png" alt="Ball"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Blocks">
            <img class="front-card" src="./assets/Blocks.png" alt="Blocks"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Blocks2">
            <img class="front-card" src="./assets/Blocks2.png" alt="Blocks2"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card" /> 
        </div>

        <div class="card" data-framework="TeddyBear">
            <img class="front-card" src="./assets/TeddyBear.png" alt="Teddy Bear"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Doll">
            <img class="front-card" src="./assets/Doll.png" alt="Doll"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Car">
            <img class="front-card" src="./assets/Car.png" alt="Car"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="TeddyBear">
            <img class="front-card" src="./assets/TeddyBear.png" alt="Teddy Bear"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Blocks2">
            <img class="front-card" src="./assets/Blocks2.png" alt="Blocks2"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Blocks">
            <img class="front-card" src="./assets/Blocks.png" alt="Blocks"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="WoodenHorse">
            <img class="front-card" src="./assets/WoodenHorse.png" alt="Wooden Horse"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Car">
            <img class="front-card" src="./assets/Car.png" alt="Car"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Doll">
            <img class="front-card" src="./assets/Doll.png" alt="Doll"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="Dinosaur">
            <img class="front-card" src="./assets/Dinosaur.png" alt="Dinosaur"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>

        <div class="card" data-framework="WoodenHorse">
            <img class="front-card" src="./assets/WoodenHorse.png" alt="Wooden Horse"/>
            <img class="back-card" src="./assets/back-card.png" alt="Haingo Card"/> 
        </div>
    </div>
</div>


<!-- Win Modal -->
<div class="win-modal-overlay" id="win-modal-overlay">
	<!--Content of the modal-->
	<div class="modal-content">
		<h2 class="centerText">Congratulations!</h2>
		<p class="centerText">You succesfully completed the game.</p>
		<img class="modal-img" src="./assets/Congrats.png">
        <div class="outer-btn">
            <!--Link to the rankings page--> 
            <button class="modal-btn" onclick="location.href='rankings.php';">Check my score</button>
            <!--Button that closes the win modal-->
            <button class="modal-btn" onclick="closeWinModal()">Close</button>
        </div>
	</div>
</div>


<!--Loose modal for finished countdown -->
<div class="time-up-modal-overlay" id="time-up-modal-overlay">
    <!--Content of the modal-->
    <div class="modal-content">
        <h2 class="centerText">Better luck next time!</h2>
        <p class="centerText">You ran out of time. Your final score has still been registered on the ranking board.</p>
        <img class="modal-img" src="./assets/SadSmile.png">
        <div class="outer-btn">
            <!--Link to the rankings page-->
            <button class="modal-btn" onclick="location.href='rankings.php';">Check my score</button>
            <!--Link to the game page to play again-->
            <button class="modal-btn" onclick="location.href='index.php';">Play again</button>   
        </div>
    </div>
</div>

<script src="./js/app.js"></script>
<script src="./js/account.js"></script>
<script src="./js/display.js"></script>

<?php
    outputFooter();   