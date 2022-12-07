<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szachownica</title>

</head>
<body>

    <h1>Zadanie 08.2N (8.7) Zadanie nieobowiązkowe - szachownica</h1>
    <h1>Trojan Bogacki 3pir</h1>
    <p>Napisz kod php z funkcją szachownica($a). Funkcja przyjmuje jeden parametr. który określa ilość kratek w wierszu i kolumnie.</p>

    <form method="post" action="">
        <label for="szach">Podaj wielkość szachownicy:</label>
        <input type="text" name="szach">
        <input type="submit" value="wyświetl">
    </form>

    <?php
    function szachownica($a){
        $kolor = false;

        echo "<table>";
        for($i=0;$i<$a;$i++){
            echo "<tr>";
            for($j=0;$j<$a;$j++){
                if($kolor==false) echo "<td width='100px' height='100px' style='background-color: blue'></td>";
                else  echo "<td width='100px' height='100px' style='background-color: yellow'></td>";
                $kolor = !$kolor;
            }
            echo "</tr>";
            $kolor = !$kolor;
        }
        echo "</table>";
    }
    if(isset($_POST['szach']) && is_numeric($_POST['szach']))
    {
        $pola = $_POST['szach'];
        szachownica($pola);
    }
    ?>

</body>
</html>