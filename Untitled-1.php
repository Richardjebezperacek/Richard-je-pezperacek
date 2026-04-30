<!DOCTYPE html>
<html>
<head>
    <title>Kvíz</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .box {
            margin: 20px auto;
            padding: 20px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">

<?php
$body = 0;

if (isset($_GET["otazka1"])) {

    if ($_GET["otazka1"] == "Praha") {
        $body++;
    }

    if ($_GET["otazka2"] == "8") {
        $body++;
    }

    if ($_GET["otazka3"] == "modra") {
        $body++;
    }

    echo "<h2>Máš $body správné odpovědi ze 3</h2>";

    if ($body == 3) {
        echo "<p>Génius! 😎</p>";
        echo "<img src='obrazek1.jpg' width='200'>";
    } elseif ($body == 2) {
        echo "<p>Docela dobrý 👍</p>";
        echo "<img src='obrazek2.jpg' width='200'>";
    } else {
        echo "<p>Zkus to znovu 😅</p>";
        echo "<img src='obrazek3.jpg' width='200'>";
    }
}
?>

<h1>Kvíz</h1>

<form>
    <label>1) Hlavní město ČR?</label><br>
    <input type="text" name="otazka1"><br><br>

    <label>2) Kolik je 5 + 3?</label><br>
    <input type="text" name="otazka2"><br><br>

    <label>3) Jaká je barva nebe?</label><br>
    <input type="text" name="otazka3"><br><br>

    <button>Odeslat</button>
</form>

</div>

</body>
</html>