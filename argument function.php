<?php
function lastname($firstname, $middlename,$DOB, $gender){
    echo " Call me $firstname $middlename Maina $DOB $gender.<br />";
}
lastname("Nick","Karanja", 2003,"Male");
lastname("Phaita","Maina",2003,"Male");
lastname("Njeri", "Phaita", 2000, "Female");
echo "<br />";

function UEFA($team, $country, $league){
    echo "We are $team from $country participating in $league.<br />";
}
UEFA("Man City", "England", "EPL");
UEFA("Barcelona", "Spain","La Liga");
UEFA("PSG","France","Ligue 1");
UEFA("Juventus","Italy","Serie A");