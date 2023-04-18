<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htdocs</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>

    <?php

    if (isset($_POST['submit-button'])) {

        $dsn = 'mysql:dbname=menu;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $dbh = new PDO($dsn, $user, $password);


        $titel = $_POST['titel'];
        $prijs = $_POST['prijs'];
        $omschrijving = $_POST['omschrijving'];

        $dbh->prepare("INSERT INTO menu(Titel, Omschrijving, Prijs) VALUES(?, ?, ?)");
        $dbh->exec([$titel, $omschrijving, $prijs]);
    }
    ?>
    <form>
        Titel: <input type="text" name="titel">
        Omschrijving; <input type="text" name="omschrijving">
        Prijs: <input type="text" name="prijs">

        <button type="submit" name="submit_button">Toevoegen</button>
    </form>

</body>

</html>