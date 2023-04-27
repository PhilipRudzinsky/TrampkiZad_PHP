<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h1>Dane osobowe klienta:</h1>
<hr>
<?php
    echo "Imię i nazwisko: " . trim($_POST['im']) . "<br>";
    echo "Adres e-mail: " . trim($_POST['adr']) . "<br>";
    echo "Numer telefonu: " . trim($_POST['zaw']) . "<br>";
    echo "<hr><br>";
    echo "Wiadomość: " . trim($_POST["wiad"])."<br>";
    echo "<hr><br>";

    echo "<h1>Wybrałeś dla swoich butów: </h1> <br>";
    $radio = $_POST['wykszt'];
    echo"Kolor trampek: $radio<br>";
    $rozm = $_POST['rozmiar'];
    echo"Rozmiar trampek: $rozm<br>";
    echo"Dodatki:<br>";
    $dod = array($_POST['interest']);
    foreach ($_POST['interest'] as $wartosc) {
        echo "$wartosc<br>";
    }
?>
</body>
</html>
<style>
    <?php include 'style.css'; ?>
</style>
