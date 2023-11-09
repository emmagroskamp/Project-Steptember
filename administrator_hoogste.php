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
$team2 = array("Team2", 35163, 27980, 28553, 38960, 32398, 38771, 28409);
$team3 = array("Team3", 25546, 35507, 32767, 33419, 28494, 35045, 25593);
$team4 = array("Team4", 38864, 39374, 33624, 35097, 27457, 29002, 39182);
$team5 = array("Team5", 25339, 26028, 34077, 25956, 39611, 28210, 29144);

//eerste element wordt uit de array verwijderd
unset($team1[0]);
unset($team2[0]);
unset($team3[0]);
unset($team4[0]);
unset($team5[0]);

//gesorteerd van groot naar klein
rsort($team1);
rsort($team2);
rsort($team3);
rsort($team4);
rsort($team5);

//hoogste aantal stappen van alle teams in tabel 
echo "<h4>Hoogste aantal stappen van alle teams</h4>";
echo "<table border= '1'>";
echo "<tr><th></th><th>Hoogste stappen</th></tr>";
echo "<tr><td>Team 1</td><td>$team1[0]</td></tr>";
echo "<tr><td>Team 2</td><td>$team2[0]</td></tr>";
echo "<tr><td>Team 3</td><td>$team3[0]</td></tr>";
echo "<tr><td>Team 4</td><td>$team4[0]</td></tr>";
echo "<tr><td>Team 5</td><td>$team5[0]</td></tr>";
echo "</table>";
?>
</div>
</body>
</html>