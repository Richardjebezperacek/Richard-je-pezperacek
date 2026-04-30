<?php

echo "<h2>ÚLOHA 1</h2>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}

echo "<hr>";

echo "<h2>ÚLOHA 2</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i <= 50) {
        echo $i . "<br>";
    } else {
        echo "hodně<br>";
    }
}

echo "<hr>";

echo "<h2>ÚLOHA 3</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

echo "<hr>";

echo "<h2>ÚLOHA 4</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}

echo "<hr>";

echo "<h2>ÚLOHA 5</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "BUM PRÁSK<br>";
    } elseif ($i % 3 == 0) {
        echo "BUM<br>";
    } elseif ($i % 5 == 0) {
        echo "PRÁSK<br>";
    } else {
        echo $i . "<br>";
    }
}

echo "<hr>";

echo "<h2>ÚLOHA 6</h2>";
$ovoce = ["jablko", "banán", "hruška", "pomeranč", "švestka", "kiwi", "mango", "meloun"];
foreach ($ovoce as $item) {
    echo $item . "<br>";
}

echo "<hr>";

echo "<h2>ÚLOHA 7</h2>";
$slova = ["auto", "slon", "programovani", "pes", "kočka", "elektrina"];
foreach ($slova as $slovo) {
    if (strlen($slovo) > 5) {
        echo strtoupper($slovo) . "<br>";
    } else {
        echo $slovo . "<br>";
    }
}

echo "<hr>";

echo "<h2>ÚLOHA 8</h2>";
$jmeno = "Petr";
$vek = 20;
echo "Ahoj, jmenuji se " . $jmeno . " a je mi " . $vek . " let.<br>";

echo "<hr>";

echo "<h2>ÚLOHA 9</h2>";
echo "Hod kostkou: " . rand(1, 6);

?>

echo "<hr>";


<?php
$podmety = ["Pes", "Kočka", "Student", "Programátor", "Richard"];
$prisudky = ["jí", "vidí", "programuje", "nemá", "hledá"];
$predmety = ["kost", "myš", "aplikaci", "péro", "řešení"];

$nahodnyPodmet = $podmety[rand(0, count($podmety) - 1)];
$nahodnyPrisudek = $prisudky[rand(0, count($prisudky) - 1)];
$nahodnyPredmet = $predmety[rand(0, count($predmety) - 1)];

$veta = $nahodnyPodmet . " " . $nahodnyPrisudek . " " . $nahodnyPredmet . ".";

echo $veta;
?>