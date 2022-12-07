<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T083</title>
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

<h1>Zadanie T083</h1>
Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W przypadku podania innej wartości zwraca informację o błędzie.</p>
<form method="post" action="">
    <label for="x">x: </label>
    <input type="text" name="x">
    <input type="submit" value="oblicz">
</form>

<?php
function zakres($x){
    switch ($x){
        default: return "Liczba musi być w zakresie od 1 do 12";
        case 1: return "jeden";
        case 2: return "dwa";
        case 3: return "trzy";
        case 4: return "cztery";
        case 5: return "pięć";
        case 6: return "sześć";
        case 7: return "siedem";
        case 8: return "osiem";
        case 9: return "dziewięć";
        case 10: return "dziesięć";
        case 11: return "jedenaście";
        case 12: return "dwanaście";



    }
}
if(isset($_POST['x']) && is_numeric($_POST['x']))
{
    $x = $_POST['x'];
    echo zakres($x);
}
?>

</body>
</html>