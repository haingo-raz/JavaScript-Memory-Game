<?php
    //link to external php file
    include 'common.php';

    //ouput the header
    outputHeader("Rankings");

    //output banner at the top of the page-->
    outputBanner();

    //output navigation bar
    outputNavBar("Rankings");
?>

<div class="rankings-container">
    <!--title-->
    <h2>Rankings</h2> 
    
    <!--Table to display usernames and scores-->
    <div id="rankings-table">
        <!--Table content to be generated-->    
    </div>

<!--JavasSript-->
<script src="./js/rankings.js"></script>

<!--footer-->
<?php
    outputFooter();