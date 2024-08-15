<?php
session_start();
session_destroy();
?>

<script>
    // The button doesn't work if no user is logged in
    if (sessionStorage.length == 0) {
        alert("No user is logged in!");
        // Redirect to home
        location.replace("index.php");
    } else {
        // Clean session storage
        sessionStorage.clear();

        alert("Logout successful!");
        // Redirect to home
        location.replace("index.php");
    }
</script>