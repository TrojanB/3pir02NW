<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T084</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
    <tr>
        <td>Imię i nazwisko:</td>
        <td>Klasa/grupa:</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Trojan Bogacki</td>
        <td>3pir_02</td>
        <td>29.11.2022</td>
    </tr>
</table>

<h1>Zadanie T084</h1>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>
<form method="post" action="">
    <label for="x">x: </label>
    <input type="text" name="x">
    <label for="y">y: </label>
    <input type="text" name="y">
    <input type="submit" value="oblicz">
</form>

<?php
function kolor($x, $y){
    if($x<$y)      echo "<span style='color: green'>$x</span> < <span style='color: red'>$y</span>";
    else if($x>$y) echo "<span style='color: red'>$x</span> > <span style='color: green'>$y</span>";
    else           echo "<span style='color: blue'>$x</span> = <span style='color: blue'>$y</span>";
}
if(isset($_POST['x']) && is_numeric($_POST['x']))
{
    $x = $_POST['x'];
    $y = $_POST['y'];
    kolor($x, $y);
}
?>

</body>
</html>