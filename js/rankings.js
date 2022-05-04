window.onload = function init() {
    //loadthe table
    loadRankingTable();
}

//Generate the rankings table 
function loadRankingTable(){

    //table
    let strTable = "<table><tr><th class='yellowBg centerText'>Username</th><th class='centerText'>Score</th></tr>";

    //looping through all the keys of local storage
    for (let key of Object.keys(localStorage)) {
      let usr = JSON.parse(localStorage[key]);
      //display username and high score score of users 
      strTable += "<tr><td class='yellowBg centerText'>" + usr.username + "</td><td class='centerText'>" + usr.topScore + "</td></tr>";
    }

    strTable += "</table>";
  
    //generate the table
    document.getElementById("rankings-table").innerHTML = strTable;
}

