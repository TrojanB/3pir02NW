<?php

    function data($mm, $dd, $YY){
        if(checkdate($mm, $dd, $YY)){
            if(strtotime("$mm.$dd.$YY") < time()) {
                echo "historia";
            }
            else echo "teraźniejszość lub przyszłość";

        }
        else echo "Nie poprawna data";
    }

    echo"Zadanie X94 <br>";
    echo "Trojan Bogacki 3pir <br>";
    echo "Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej dacie. <br>";

    $m = 10;
    $d = 12;
    $r = 2005;
    echo "Miesiąc: $m <br>";
    echo "Dzień: $d <br>";
    echo "Rok: $r <br>";
    data($m, $d, $r);
?>