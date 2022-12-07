<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Zadanie 10</h1>
<h2>Trojan Bogacki 3pir</h2>
<p>
    Napisz program, który dla danego x będącego liczbą rzeczywistą oblicza wartość wyrażenia <br>
    <img src="http://graczyk.pwsz.glogow.pl/Zadania/Zadania_z_programowania_2_pliki/image005.png">
</p>

<form action="" method="post">
    <label for="war">Podaj x:</label>
    <input type="text" name="war">
    <input type="submit">
</form>

<article>
    <?php
    function rowannie($s)
    {
        if($s<0) $x = -$s;
        else $x = $s;
        (double)$row = $s*$s/(pow(1+$x,2));
        echo "Wynik to: ";
        echo $row;
    }
    if(isset($_POST['war']) && is_numeric($_POST['war'])){
        $x = $_POST['war'];
        rowannie($x);
    }
    ?>

</body>
</html>