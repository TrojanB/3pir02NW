<?php
    function suma($tab){
        sort($tab);
        echo "$tab[0] + $tab[1] = ";
        return $tab[0] + $tab[1];
    }

    echo "Zadanie X91 <br>";
    echo "Trojan Bogacki 3pir <br>";
    echo "Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch najmniejszych liczb zapisanych w tablicy. <br>";

    $tablica= array(10,12,9,7,4,1);

    echo suma($tablica);
?>