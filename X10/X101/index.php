<?php
    touch('nazwisko_i_imie');
    touch('doSkasowania');
    unlink('doSkasowania');
    mkdir('Bogacki');
    touch('.\Bogacki\nazwisko_i_imie');
?>