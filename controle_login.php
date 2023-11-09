<!--
Author: Emma Groskamp
Klas: SD1B
Datum: 03-02-'23
Project Steptember -->

<?php

//waarden ophalen en declareren
$gebruikersNaam = $_POST['gnaam'];
$wachtwoord = $_POST['wachtwoord'];

//controle of inlog gegevens kloppen voor Team2
if($gebruikersNaam == "SteptemberTeam2" && $wachtwoord == "Team2")
{
    //Wanneer de inloggegevens correct zijn wordt de gebruiker naar een nieuwe pagina geleid
    header("Location: team2.php");
}

//controle of inlog gegevens kloppen voor de administrator
else if($gebruikersNaam == "SteptemberAdmin" && $wachtwoord == "Administrator")
{
    //Wanneer de inloggegevens correct zijn wordt de gebruiker naar een nieuwe pagina geleid
    header("Location: administrator.php");
}

else
{
    /*Wanneer de inloggegevens niet correct zijn wordt er een error getoond en kan de gebruiker
    op een link klikken om opnieuw naar het inlogscherm te gaan.*/
    echo "Let op! De ingevoerde gegevens komen niet <br> met elkaar overeen. Probeer het opnieuw!<br>";
    echo "<a href='Steptember-inlogscherm.html'>Inloggen</a>";
}

?>