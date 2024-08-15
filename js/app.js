//The game has been inspired from 'https://www.youtube.com/watch?v=ZniVgo8U7ek'
//Access the cards 
const cards = document.querySelectorAll('.card');

//creating variables
let hasTurnedCard = false;
let cardOne, cardTwo;
let lockCardsBoard = false; 
var matchSound; //sound


//access score
const scoreCount = document.querySelector(".score-counter");
let score = 0; 
var CORRECT_BONUS = 10; //points added for each correct match

//select element of class moves-counter
const movesCount = document.querySelector(".moves-counter");
let moves = 0;

//function that starts the game
function startGame(){

  //start the timer
  startTimer();

  //disable the play button after click
  let button = document.getElementById('playbtn');
  button.style.display ="none";

  //define the sound when cards are matching
  matchSound = new sound("./assets/winSound.wav");

  //hide descriptive text 
  document.getElementById("content").style.display="none";

  //show game details information
  document.getElementById("gameInfo").style.display="block";
}

//allow card flipping 
function turnCard() { 

    if(lockCardsBoard) return; //disable clicking on more than 2 cards 

    if(this == cardOne) return; //enable double clicking on the same card without error

    //add the class turn to the element
    this.classList.add('turn');

    if (!hasTurnedCard) {
        
        //first click
        hasTurnedCard = true;
        cardOne = this;

        return; 
    } 
        //second click
        hasTurnedCard= false;
        cardTwo = this;

        //function to check if the two flipped cards have the same framework 
        checkMatchingCards();
}

//compare cards to see if they match 
function checkMatchingCards(){

    //if same data framework
    if (cardOne.dataset.framework === cardTwo.dataset.framework){

        //play matching sound for each right guess
        matchSound.play(); 

        //call function to freeze the matched cards
        disableMatchingCards();

        //call function to increase the number of moves 
        incrementMoves();

        //increment the score when matching cards
        incrementScore(CORRECT_BONUS);
        
    } else {
        //if false, put the cards back in their original state   
        unflipCards();
        
        //call function to increase the number of moves 
        incrementMoves();
    }
}

//freeze matching cards 
function disableMatchingCards(){

  //disable the event listner
  cardOne.removeEventListener('click', turnCard);
  cardTwo.removeEventListener('click', turnCard);

  resetCardsBoard();
}

//unflip unmatching cards
function unflipCards(){

  lockCardsBoard = true;

  //add delay to see the flipping 
  setTimeout(() => {
    //remove the turn class from the flipped cards
    cardOne.classList.remove('turn');
    cardTwo.classList.remove('turn');

    lockCardsBoard = false; 

    resetCardsBoard();
  }, 1500); //delay of 1.5 seconds
}


//reset the cardboard
function resetCardsBoard(){
    [hasTurnedCard, lockCardsBoard] = [false, false];
    [cardOne, cardTwo] = [null, null];
}


//attach an event listner to each one of the cards : flip the cards 
cards.forEach(card => card.addEventListener('click', turnCard));


//Countdown timer
function startTimer(){

  //set the initial time for 2minutes
  const startTime = 2;
  
  let time = startTime * 60;

  //access the countdown timer
  const countdownEl = document.getElementById("countdown");

  //update the timer every second 
  setInterval(updateCountdown, 1000);

  //nested function : update the timer
  function updateCountdown(){

    const minutes = Math.floor(time/60);
    let seconds = time % 60;

    //format the timer
    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdownEl.innerHTML = `${minutes} : ${seconds}`;

    time--; 

    //stop the timer at 0:00 
    time = time < 0 ? 0 : time;

    //when high score reached, stop the timer
    if (score == 180){
      //set the timer to none
      countdownEl.innerHTML = "-"; 
    }

    //display time up modal in case countdown has reached to 00:00 
    if(seconds == 0 && minutes == 0) {
      document.getElementById("time-up-modal-overlay").style.display= "block";
    }
  }
}

//close the win modal
function closeWinModal(){
  document.getElementById("win-modal-overlay").style.display = "none";
}

//Display the easy level
function displayEasyLevel(){  

  //show the easy level
  document.getElementById("easy-mode").style.display = "block";

  //hide the medium level
  document.getElementById("medium-mode").style.display = "none";

  //hide the difficult mode
  document.getElementById("difficult-mode").style.display = "none";
}


//Scoring: increment score for each correct match 
function incrementScore(num) {

  score += num;
  //update the score text
  scoreCount.innerText = score; 

  //display the medium level when score hits 40
  if (score == 40){
    
    //hide the easy level
    document.getElementById("easy-mode").style.display = "none";

    //show the medium level
    document.getElementById("medium-mode").style.display = "block";

    //hide the difficult mode
    document.getElementById("difficult-mode").style.display = "none";
  }

  //display the difficult model when score hits 100
  if (score == 100){

    //display the hard level
    document.getElementById("difficult-mode").style.display = "block";

    //hide the medium level
    document.getElementById("medium-mode").style.display = "none";  
  }

  //when high score of reaches 
  if (score == 180){
    //display win modal 
    document.getElementById("win-modal-overlay").style.display= "block";
  }

  //call the function which update the high score in local storage when the game is completed
  updateScore();
}

//function to increment the number of moves
function incrementMoves(){

  //update the written number of moves
  movesCount.innerHTML ++;

  //increment moves
  moves++;
}

//Sounds effect
function sound(src) {
  this.sound = document.createElement("audio");
  this.sound.src = src;
  this.sound.setAttribute("preload", "auto");
  this.sound.setAttribute("controls", "none");
  this.sound.style.display = "none";
  document.body.appendChild(this.sound);
  this.play = function(){
    this.sound.play();
  }
  this.stop = function(){
    this.sound.pause();
  }
}

//function to update score and save high score
function updateScore(){

  //if there is a logged in user
  if (sessionStorage.loggedInUsr !== undefined){

    //parse local storage based on the user which is logged in
    let user = JSON.parse(localStorage[sessionStorage.loggedInUsr])

    if(user.topScore < score){
      user.topScore = score; //set new top score
      localStorage[user.username] = JSON.stringify(user) //save in JSON format
    }
  }
}