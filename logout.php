<script>
    
    //The button doesn't work if no user is logged in
    if (sessionStorage.length == 0){
        alert("No user is logged in!");
        
        //redirect to home
        location.replace("game.php");

    } else{

        //show logout  button
        document.get

        //clean session storage
        sessionStorage.clear();

        alert("Logout succesful!")

        //redirect to home
        location.replace("game.php");
    }

</script>