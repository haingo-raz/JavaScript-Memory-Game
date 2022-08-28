<?php
    //link to external php file
    include 'common.php';

    //output the header
    outputHeader("Register");

    //output banner at the top of the page-->
    outputBanner();

    //output navigation  bar
    outputNavBar("Registration");
?>

<!--Registration form-->
<form id="registerForm" onsubmit="return false">
        
    <div class="register-container">
        <!--title-->
        <h3 class="centerText">Register</h3>

        <hr> 
        
        
        <!--Username input-->
        <div class="line">
            <label for="username">Username<span>*</span></label>
            <input type="text" id="usernameInput">
        </div>


        <!--Email input-->
        <div class="line">
            <label for="email">Email<span>*</span></label>
            <input type="text" id="emailInput">
        </div>

        <!--Age input-->
        <div class="line">
            <label for="age">Age<span>*</span></label>
            <input type="number" id="ageInput">
        </div>

        <!--Password input-->
        <div class="line">
            <label for="pw">Password<span>*</span></label>
            <input type="password" id="pwInput">
        </div>


        <!--Register button-->
        <div class="centerText">
            <button type="submit" class="accountBtn" onClick="register()"> &#x276C; Register</button>
        </div>

        <!--Feedback-->
        <span><p id="registerFeedback" class="centerText"></p></span>
            
        <hr>

        <p class="centerText"><b>Already have an account? <a class="redirectLink" href="login.php">Sign in</b></a></p>
        <hr>
        <p class="centerText"><b>By clicking "Register", I agree to the <a class="redirectLink" href="">Terms of Use</a> and <a class="redirectLink" href="">Privacy Policy</a></b></p>
       
    </div>
</form>   

<script type="text/javascript" src="./js/account.js"></script>

<!--footer-->
<?php
    outputFooter(); 