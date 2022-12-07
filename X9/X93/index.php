<?php
    function sortowanie($tab1 , $tab2){
        $table = array_merge($tab1, $tab2);
        sort($table);
        return $table;
    }

    echo "Zadanie X93 <br>";
    echo "Trojan Bogacki 3pir <br>";
    echo "Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę zawierającą wszystkie elementy z pierwszej i drugiej tablicy. <br>";

    $tablica1 = array(1,8,2,76,21);
    foreach ($tablica1 as $value) echo "$value ";
    echo "<br>";

    $tablica2 = array(1,2,10,66,121);
    foreach ($tablica2 as $value) echo "$value ";
    echo "<br>";

    foreach (sortowanie($tablica1,$tablica2) as $value) echo "$value  ";
?>