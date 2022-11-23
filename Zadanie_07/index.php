<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Zadanie 7</h1>
    <h2>Trojan Bogacki 3pir</h2>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>

    <form method="post" action="">
        <label for="inputc">Podaj w stopniach Celsjusza</label>
        <input type="text" name="inputc">

        <input type="submit" value="przelicz" onclick="wyslij()">
    </form>

    <article>
        <?php
        $C = $_POST['inputc'];
        function kelwin($C)
        {
            if($C<-273.15) return 0;
            return $C+273.15;
        }
        function farenheit($C)
        {
            return $C * (9 / 5) + 32;
        }
        if(isset($_POST['inputc']) && is_numeric($_POST['inputc'])) {
            echo "$C stopni Celsjusza w stopniach Kelwina to: "; echo kelwin($C);
            echo "<br>";
            echo "$C stopni Celsjusza w stopniach Farenheita to: "; echo farenheit($C);
        }
        ?>
    </article>


</body>
</html>