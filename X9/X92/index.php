<?php
    function imiona($tab){
        $liczba_imion_zenskich = 0;
        for($i=0;$i<count($tab);$i++){
            if(str_ends_with($tab[$i], 'a'))  $liczba_imion_zenskich++;
        }
        echo "Liczba imion żeńskich to: $liczba_imion_zenskich";
    }

    echo "Zadanie X92 <br>";
    echo "Trojan Bogacki 3pir <br>";
    echo "Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy. Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę a. <br>";

    $tablica = array("Karolina", "Justyna", "Jula", "Jula", "Marek", "Jarek", "Darek");
    imiona($tablica);
?>