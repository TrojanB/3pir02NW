<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Zadanie 8</h1>
<h2>Trojan Bogacki 3pir</h2>
<p>
    Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy. Program zadziała dla s większego od 0.
    Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s
</p>

    <form action="" method="post">
        <label for="sekundy">Podaj sekundy:</label>
        <input type="text" name="sekundy">
        <input type="submit">
    </form>

    <article>
        <?php
        function godziny($s)
        {
            if ($s > 0)
            {
                $g = 0;
                $m = 0;
                while ($s - 3600 > 0) {
                    $s -= 3600;
                    $g++;
                }
                while ($s - 60 > 0) {
                    $s -= 60;
                    $m++;
                }

                echo $g;
                echo "g";
                echo $m;
                echo "m";
                echo $s;
                echo "s";
            }
        }
        if(isset($_POST['sekundy']) && is_numeric($_POST['sekundy'])){
            $sekundy = $_POST['sekundy'];
            godziny($sekundy);
        }
        ?>
    </article>

</body>

</html>