<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T081</title>
    <style>
        td{
            border: 1px black solid;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <td>Imię i nazwisko:</td>
            <td>Klasa/grupa:</td>
            <td>Data:</td>
        </tr>
        <tr>
            <td>Trojan Bogacki</td>
            <td>3pir_02</td>
            <td>23.11.2022</td>
        </tr>
    </table>

    <h1>Zadanie T081</h1>
    <form method="post" action="">
        <label for="bezw">Wartość bezwzględna: </label>
        <input type="text" name="bezw">
        <input type="submit" value="oblicz">
    </form>

    <?php
        function wartosc_bez($x){
            $x>=0 ? $x : $x=-$x;
            return $x;
        }
        if(isset($_POST['bezw']) && is_numeric($_POST['bezw']))
        {
            $war = $_POST['bezw'];
            echo "Wartość bezwględna to: ";
            echo wartosc_bez($war);
        }
    ?>

</body>
</html>