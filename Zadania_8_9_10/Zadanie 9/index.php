<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Zadanie 9</h1>
   <h2>Trojan Bogacki 3pir</h2>
    <p>
        Napisz program, który zamienia długość podaną w calach na mm.
        (1cal=25,3995 mm)
    </p>

<form action="" method="post">
    <label for="cale">Podaj cale:</label>
    <input type="text" name="cale">
    <input type="submit">
</form>

<article>
    <?php
    function cale_to_mm($s)
    {
        if ($s > 0)
        {
            $cal = 25.3995;
            echo (double)$s*$cal;
        }
    }
    if(isset($_POST['cale']) && is_numeric($_POST['cale'])){
        $cale = $_POST['cale'];
        cale_to_mm($cale);
    }
    ?>

</body>
</html>