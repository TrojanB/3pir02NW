<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T085</title>
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

<h1>Zadanie T085</h1>
<p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm Euklidesa).</p>
<form method="post" action="">
    <label for="x">x: </label>
    <input type="text" name="x">
    <label for="y">y: </label>
    <input type="text" name="y">
    <input type="submit" value="oblicz">
</form>

<?php
function dzielnik($x, $y){
   while($x!=$y){
       if($x>$y) $x -= $y;
       else $y -= $x;
   }
   echo $x;
}
if(isset($_POST['x']) && is_numeric($_POST['x']))
{
    $x = $_POST['x'];
    $y = $_POST['y'];
    dzielnik($x, $y);
}
?>

</body>
</html>