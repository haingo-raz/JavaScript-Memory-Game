checkLogin();

function register() {
    
    //access and store entered value from input fields 
    let username = document.getElementById('usernameInput').value;
    let email = document.getElementById('emailInput').value;
    let age = document.getElementById('ageInput').value;
    let pw = document.getElementById('pwInput').value;

    let rgFeedback = document.getElementById('registerFeedback');
  
    //for email validation
    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    //send error to the user if an input field or more are left blank
    if(username.length == 0 || email.length == 0 || age.length == 0 || pw.length == 0){
      rgFeedback.innerHTML = "Please fill in all the details";
    }
  
    //notify users when email address is invalid
    else if (!email.match(validRegex)) {
      rgFeedback.innerHTML ="Email address invalid!";
    }
  
    //Otherwise
    else {
  
      //check if the username entered already exists
      if (username in localStorage) {
        rgFeedback.innerHTML ="Username already exists!";
      } else {
  
      //create a user object and store entered values into the user objects
      var newUser = {
          username: username,
          email: email,
          age: age,
          pw: pw,
          topScore: 0 //initialise topScore 
        };
        
      //store key account details into local storage in JSON format
      localStorage[newUser.username] = JSON.stringify(newUser);
  
      //notify successful account creation to users
      rgFeedback.innerHTML = 'Account created succesfully!';
  
      //clear all input fields only when the account was succesfully created
      document.getElementById("registerForm").reset();
      }     
    }  
} 
  
    
//function used for login
function login() {
  
    //access and store entered value inputs from login form
    let username1 = document.getElementById('userUsernameInput').value;
    let password2 = document.getElementById('userPwInput').value;

    
    let loginFeedback = document.getElementById('loginFeedback');
  
    //if username entered is not stored in local storage
    if (localStorage[username1] == undefined) {
        //alert the user
        loginFeedback.innerHTML = 'Account does not exist.';
    } else {  //if the username entered is found in the local storage
        //retrieve the username 
        let userObj = JSON.parse(localStorage[username1]);
        
        // if the correct password is entered
        if (password2 == userObj.pw) {

          loginFeedback.innerHTML = 'Success';

          //store username in session storage
          sessionStorage.loggedInUsr = userObj.username;
  
          //clear all input fields only when the user has succesfully logged in
          document.getElementById("loginForm").reset();


          setTimeout( () => {
            //redirect to game page
            location.replace('game.php');
          }, "2000")
  
        }else { //if incorrect password entered
          loginFeedback.innerHTML = "Incorrect password.";
      }
    }
}


//Check if a user is logged in 
function checkLogin(){
    //no user logged in
    if (sessionStorage.length == 0) {
      //nothing
    } else {
      //hide information bar
      document.getElementById("loginInfo").style.display="none";
  }
}

