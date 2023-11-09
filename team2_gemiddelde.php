<!--
Author: Emma Groskamp
Klas: SD1B
Datum: Datum: 03-02-'23
Project Steptember -->
<html>
    <head><title></title>
    <link rel="stylesheet" href="resultaten_style.css"></head>
    <body>
        <div class="opmaakResultaat">

<?php
echo "<body style='background-color:rgb(208, 221, 160)'>";

//gegevens voor team 2
$team = array ("Team2", 35163, 27980, 28553, 38960, 32398, 38771, 28409);
$totaal = 0;

//berekenen van gemiddelde en de gegevens worden in een tabel gezet
echo "<table border='1'>";
for($i = 0; $i < 1; $i++)
{
    echo "<tr><th></th><th>$team[$i]</th></tr>";
}
for($i = 1; $i < 7; $i++)
{
    echo "<tr><td>Dag $i</td><td>$team[$i]</td></tr>";
    $totaal += $team[$i];
}
echo "</table><br>";

$gemiddelde = round($totaal / 7);
echo "Het gemiddelde aantal stappen van deze week: $gemiddelde";
?>
</div>
</body>
</html>