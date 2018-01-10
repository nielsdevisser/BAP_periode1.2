<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3</title>
</head>
<body>
<h1>Opdracht 3 - Niels de Visser</h1>
<?php
// 5 variables
$voornaam = 'Niels';
$achternaam = 'de Visser';
$woonplaats = 'Breezand';
$leeftijd = 18;
$geslacht = 'man';
// creating echo and concatenation
echo '<p>Hoi, mijn naam is ' . $voornaam . ' ' . $achternaam . '. Ik ben een ' . $geslacht . '. Ik ben ' . $leeftijd . ' jaar oud, en ik kom uit ' . $woonplaats . '.</p>';
// if - else statement
if ($leeftijd == 18) {
    echo 'Jij bent 18 jaar oud.';
} else {
    echo 'Jij bent geen 18 jaar oud.';
}
?>
<br>
<br>
<?php
// function one
function bericht()
{
    echo "Hello world!<br><br>";
}
bericht();
// function two
function naamGeboortejaar($naam, $geboortejaar)
{
    echo "" . $naam . ", geboren in " . $geboortejaar . ". <br>";
}
naamGeboortejaar("Niels", "1999");
naamGeboortejaar("Bas", "1992");
naamGeboortejaar("Frenk", "1995");
naamGeboortejaar("Rene", "1965");
?>
<br>
<?php
// arrays
$supermarkt = array("Jumbo", "Deen", "Vomar", "C1000", "Lidl");
echo "In Nederland heb je verschillende supermarkten: " . $supermarkt[0] . ", " . $supermarkt[1] . ", " . $supermarkt[2] . ", " . $supermarkt[3] . " en " . $supermarkt[4] . ".";
?>


</body>
</html>
