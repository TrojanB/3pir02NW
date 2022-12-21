<?php
    $imie = $_POST['i'];
    $nazwisko = $_POST['n'];
    $klasa = $_POST['klasa'];
    $op = $_POST['op'];

    echo "<h1>Podane dane to: </h1> <br>";
    echo "Imię: $imie <br>";
    echo "Nazwisko: $nazwisko <br>";
    echo "Klasa: $klasa <br>";
    echo "Opinia: "; echo $_POST['opinia']; echo "<br>";
    echo"<br>";

    echo "Ocena organizacji to: $op <br>";
    echo "Wybrane nagrody to: "; echo $_POST['co_wygrac'];

?>