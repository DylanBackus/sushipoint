<?php
session_start();

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=menu;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $connectie = new PDO($dsn, $user, $password);
    echo "Verbinding wel gelukt";
} catch (PDOException $e) {
    echo "Verbinding niet gelukt: " . $e;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htdocs</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main class="main-admin">
        <nav>
            <div class="banner-container">
                <div class="nav-banner-container-admin">
                    <div class="navigatie-menu-container">
                        <li class="text-none">
                            <a class="navigatie-menu" href="index.php">Menu</a>
                        </li>
                    </div>
                    <div class="navigatie-reviews-container">
                        <li class="text-none">
                            <a class="navigatie-reviews"
                                href="https://nl.trustpilot.com/review/sushipoint.nl">Reviews</a>
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
        <div class="menu-main-onder-admin">
            <div class="products-add-admin">
                <div class="input-container-admin">
                    <form method="post">
                        <div class="form-row">
                            <label class="login-text-username-password-admin" for="naam">Naam:</label>
                            <input class="input-add" type="text" id="naam" name="naam" />
                        </div>
                        <div class="form-row">
                            <label class="login-text-username-password-admin" for="prijs">Prijs:</label>
                            <input class="input-add" type="text" id="prijs" name="prijs" />
                        </div>
                        <div class="form-row">
                            <label class="login-text-username-password-admin" for="beschrijving">Beschrijving:</label>
                            <input class="input-add" type="text" id="beschrijving" name="beschrijving" />
                        </div>
                        <div class="form-row">
                            <label class="login-text-username-password-admin" for="image">Image:</label>
                            <input class="input-add" type="text" id="image" name="image" />
                        </div>
                            <input class="button-submit" type="submit" name="submit" class="submit-dish" value="Submit">
                    </form>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $naam = $_POST['naam'];
                    $prijs = $_POST['prijs'];
                    $beschrijving = $_POST['beschrijving'];

                    // Controleren of het 'foto'-veld is ingestuurd
                    if (!empty($_POST['image'])) {
                        $foto = $_POST['image'];
                    } else {
                        $foto = null;
                    }

                    // Voeg de waarden toe aan de database
                    $query = "INSERT INTO menu_ (naam, prijs, beschrijving, foto) VALUES (:naam, :prijs, :beschrijving, :foto)";
                    $stmt = $connectie->prepare($query);
                    $stmt->bindParam(':naam', $naam);
                    $stmt->bindParam(':prijs', $prijs);
                    $stmt->bindParam(':beschrijving', $beschrijving);
                    $stmt->bindParam(':foto', $foto);

                    if ($stmt->execute()) {
                        echo "<script>alert('Product toe gevoegd aan menu!')</script>";
                    } else {
                        echo "<script>alert('Product niet toe gevoegd aan database.')</script>";
                    }
                }
                ?>

            </div>
            <div class="menu-products-admin">
                <div class="container-filters">
                    <?php
                    $resultSet = $connectie->query("SELECT * FROM menu_");
                    while ($item = $resultSet->fetch()) {
                        echo '<div class="test">
                            <div class="filterDiv Nigiri">
                            <img src=' . $item['foto'] . ' class="products-image">
                         <h2 class="products-name-styl">' . $item['naam'] . '</h2>
                         <div class="products-beschrijving">
                            <p class="beschrijving-styl-admin">' . $item['beschrijving'] . '</p>
                         </div>
                         <div class="prijs-toevoegen-container">
                         <a>
                            <p class="products-prijs"> €' . $item['prijs'] . '</p>
                        </a>
                        </div>
                        <div class="admin-buttons-container">
                            <div class="toevoegen-button-admin">
                                <h1 class="toevoegen-text-admin">Add</h1>
                            </div>
                            <div class="edit-button-admin-2">
                                <p $_ITEM>
                                <a class="text-none-2" href="edit.php?id=' . $item['id'] . ' ">Edit</a>
                            </div>
                            <div class="verwijderen-button-admin">
                            <h1 class="verwijderen-text-admin">Delete</h1>
                        </div>
                        </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
            <script>
                filterSelection("all")
                function filterSelection(c) {
                    var x, i;
                    x = document.getElementsByClassName("filterDiv");
                    if (c == "all") c = "";
                    for (i = 0; i < x.length; i++) {
                        w3RemoveClass(x[i], "show");
                        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                    }
                }

                function w3AddClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
                    }
                }

                function w3RemoveClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        while (arr1.indexOf(arr2[i]) > -1) {
                            arr1.splice(arr1.indexOf(arr2[i]), 1);
                        }
                    }
                    element.className = arr1.join(" ");
                }

                // Add active class to the current button (highlight it)
                var btnContainer = document.getElementById("myBtnContainer");
                var btns = btnContainer.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function () {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>

        </div>
        </div>
    </main>
</body>

</html>