
<?php
if (!isset($_COOKIE['dane']) && !isset($_POST['nazw'])) {
?>
<!DOCTYPE HTML>
6.9. Pliki cookies i sesje 255
<html>
<head>
<title>Dane_user</title>
<meta charset="UTF-8">
</head>
    <body>
        <form action="" method="post">
            Podaj imię i nazwisko:
            <input type="text" name="nazw" value=" " size="35"> <br>
            Podaj date urodzenia:
            <input type="date" name="urodz">
            <p><input type="submit" value="Wyślij" name="wyslij"></p>

        </form>

        <?php
        } else {
        if (isset($_POST['nazw'])) {
        setcookie('dane', $_POST['nazw'], time()+10);
        setcookie('data', $_POST['urodz'], time()+10);

        echo "<p>Dziękujemy za wprowadzenie danych.</p>";
         } else {
            echo "<p>Witamy po raz kolejny! " .$_COOKIE['dane']. "</p> <br>";
            echo $_COOKIE['data'];
            $data = strtotime($_COOKIE['data']);
            $dzisiaj = getdate();
            var_dump($dzisiaj);
                echo date_diff("2022-01-04", "2005-12-10");
            echo "<br>";

         }
        }
        ?>
    </body>
</html>
