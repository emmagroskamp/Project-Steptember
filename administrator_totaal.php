<!--
Author: Emma Groskamp
Klas: SD1B
Datum: Datum: 03-02-'23
Project Steptember -->

<html>
    <head><title></title>
    <link rel="stylesheet" href="administrator_style.css"></head>
    <body>
        <div class="opmaakAdministratie">

<?php
echo "<body style='background-color:rgb(208, 221, 160)'>";

//gegevens van alle teams
$team = array (
    array("Team1", 26741, 28144, 37602, 38934, 28542, 29964, 25928),
    array("Team2", 35163, 27980, 28553, 38960, 32398, 38771, 28409),
    array("Team3", 25546, 35507, 32767, 33419, 28494, 35045, 25593),
    array("Team4", 38864, 39374, 33624, 35097, 27457, 29002, 39182),
    array("Team5", 25339, 26028, 34077, 25956, 39611, 28210, 29144)
);
echo "<br><h4>Gegevens teams</h4>";
echo "<table border='1'>";
for ($rij = 0; $rij < 5; $rij++)
{
    echo "<tr>";
    for ($kolom = 0; $kolom < 8; $kolom++)
    {
        echo "<td>".  $team[$rij][$kolom]. "</td>";
    }
    echo "<tr>";
}
echo "</table>";

$team1 = array("Team1", 26741, 28144, 37602, 38934, 28542, 29964, 25928);
$totaal_team1 = 0;
$totaal = array();
for($i = 1; $i < 7; $i++)
{
    $totaal_team1 += $team1[$i];
}

array_push($totaal, $totaal_team1);

$team2 = array("Team2", 35163, 27980, 28553, 38960, 32398, 38771, 28409);
$totaal_team2 = 0;
for($i = 1; $i < 7; $i++)
{
    $totaal_team2 += $team2[$i];
}

array_push($totaal, $totaal_team2);

$team3 = array("Team3", 25546, 35507, 32767, 33419, 28494, 35045, 25593);
$totaal_team3 = 0;
for($i = 1; $i < 7; $i++)
{
    $totaal_team3 += $team3[$i];
}

array_push($totaal, $totaal_team3);

$team4 = array("Team4", 38864, 39374, 33624, 35097, 27457, 29002, 39182);
$totaal_team4 = 0;
for($i = 1; $i < 7; $i++)
{
    $totaal_team4 += $team4[$i];
}
array_push($totaal, $totaal_team4);

$team5 = array("Team5", 25339, 26028, 34077, 25956, 39611, 28210, 29144);
$totaal_team5 = 0;
for($i = 1; $i < 7; $i++)
{
    $totaal_team5 += $team5[$i];
}

array_push($totaal, $totaal_team5);

echo "<h4>Totaal aantal stappen van alle teams</h4>";

echo "<br><table border='1'>";
echo "<tr><th></th><th>Totaal</th></tr>";
$t = 1;

for($i = 0; $i < 5; $i++)
{
    //team ... nog werkend krijgen
    echo "<tr><td>Team $t</td>";
    echo "<td>$totaal[$i]</td></tr>";
    $t++;
}
echo "</table>";

?>
</div>
</body>
</html>