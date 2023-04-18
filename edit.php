<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htdocs</title>
    <link rel="stylesheet" href="style.css">

</head>

<body class="body-edit">
    <nav>
        <div class="banner-container">
            <div class="nav-banner-container">
                <div class="navigatie-menu-container">
                    <li class="text-none">
                        <a class="navigatie-menu" href="index.php">Menu</a>
                    </li>
                </div>
                <div class="navigatie-reviews-container">
                    <li class="text-none">
                        <a class="navigatie-reviews" href="https://nl.trustpilot.com/review/sushipoint.nl">Reviews</a>
                    </li>
                </div>
            </div>
            <div class="logo-container-wit">
                <img class="sushipoint-logo" src="media/sushipoint-logo.png">
            </div>
            <h1 class="banner-text-jap">寿司ポイント</h1>
        </div>
        <img class="sushi-banner-menu" src="media/sushi-banner.png">
    </nav>
    <?php
    $dsn = 'mysql:dbname=menu;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = $_GET['id'];

    if (isset($_POST['knop'])) {
        $beschrijving = $_POST['invoerveld'];
        $stmt = $dbh->prepare("UPDATE menu_ SET beschrijving = :beschrijving WHERE id = :id");
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "ik heb de update uit gevoerd";
    } else {
        echo 'huh';
    }

    $stmt = $dbh->prepare("SELECT * FROM menu_ WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $menuItem = $stmt->fetch();
    ?>
    <div class="form-edit-container">
        <form method="post" action="edit.php?id=<?php echo $id ?>">
            <input style="margin-left: 75px;" type="text" name="invoerveld" placeholder="Beschrijving gerecht..."
                <?php echo $menuItem['beschrijving'] ?>>
            <input class="edit-input" type="submit" name="knop" value="Wijzig gerecht!">
            <p class="edit-button-admin-3">
                <a class="text-none-3" href="adminpannel.php">Terug</a>
        </form>
    </div>
</body>