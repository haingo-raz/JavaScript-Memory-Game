<?php
    //link to external php file
    include 'common.php';

    //ouput the header
    outputHeader("Login");

    //output banner-->
    outputBanner();

    //output navigation  bar
    outputNavBar("Login");
?>

<!--Login form-->
<form id="loginForm" onsubmit="return false">    
    <div class="login-container">
        <!--title-->
        <h2 class="centerText">Login</h2>

        <hr>
           
        <!--Input username-->
        <div class="line">
            <label for="userUsername">Username<span>*</span></label>
            <input type="text" id="userUsernameInput">
        </div>

        <!--Input password-->
        <div class="line">
            <label for="userPw">Password<span>*</span></label>
            <input type="password" id="userPwInput">
        </div>

        <!--Login button-->
        <div class="centerText">
            <button type="submit" class="accountBtn" onClick="login()"> &#x276C; Login</button>
        </div>

        <!--Feedback-->
        <span><p id="loginFeedback" class="centerText"></p></span>

        <hr>

        <p class="centerText"><b>Don't have an account yet? <a class="redirectLink" href="registration.php">Register</b></a></p>

    </div>
</form>

<script type="text/javascript" src="./js/account.js"></script>
    
<!--footer-->
<?php
    outputFooter(); 