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
    <?php
    if (isset($_POST['login-button'])) {
        include('connection.php');
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // Om te voorkomen dat er SQL-injectie plaatsvindt  
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($username == "Admin" && $password == "Admin") {
            header("Location: adminpannel.php");
            exit();
        } else {
            if ($count == 1) {
                echo "<script>alert('Login successful!')</script>";
                $_SESSION['username'] = $username;
            } else {
                echo "<script>alert('Login failed. Invalid username or password.')</script>";
            }
        }
    }
    ?>
    <main>
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
            <button name="login-button" class="login-button"
                onclick="   document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </nav>
        <div class="menu-main-onder">
            <div class="menu-search-container">
                <div class="search-menu">
                    <div class="search-gerechten">
                        <div class="zoek-container">
                            <form method="post" action="index.php">
                                <input class="zoeken-search-bar" type="text" name="zoekveld" placeholder="Zoek een gerecht...">
                                <input class="zoeken-search-knop" type="submit" name="submit-button" value="zoeken">
                            </form>
                        </div>
                        <div class="myBtnContainer" id="myBtnContainer">
                            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                            <button class="btn" onclick="filterSelection('Nigiri')"> Nigiri</button>
                            <button class="btn" onclick="filterSelection('Menu 1 Persoon')"> Menu 1 Persoon</button>
                            <button class="btn" onclick="filterSelection('Menu 2 Personen')"> Menu 2 Personen</button>
                            <button class="btn" onclick="filterSelection('Flamed Specials')"> Flamed Special's</button>
                            <button class="btn" onclick="filterSelection('Crispy Rolls')"> Crispy Rolls</button>
                            <button class="btn" onclick="filterSelection('Sashimi')"> Sashimi </button>
                            <button class="btn" onclick="filterSelection('Kids Boxen')"> Kids Boxen </button>
                            <button class="btn" onclick="filterSelection('Salades')"> Salades </button>
                            <button class="btn" onclick="filterSelection('Drinken')"> Drinken </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-products-container">
                <div class="border-onder-products-top">
                </div>
                <div class="menu-products">
                    <div class="container-filters">
                        <?php
                        if (isset($_POST['zoekveld'])) {

                            $statement = $connectie->prepare("SELECT naam, beschrijving, prijs, foto FROM menu_ WHERE naam LIKE ?");
                            $statement->execute(['%' . $_POST['zoekveld'] . '%']);

                        } else {
                            $statement = $connectie->query("SELECT naam, beschrijving, prijs, foto FROM menu_");
                        }


                        while ($item = $statement->fetch()) {
                            echo '<div class="test">
                            <div class="filterDiv Nigiri">
                            <img src=' . $item['foto'] . ' class="products-image">
                         <h2 class="products-name-styl">' . $item['naam'] . '</h2>
                         <div class="products-beschrijving">
                            <p class="beschrijving-styl">' . $item['beschrijving'] . '</p>
                         </div>
                         <div class="prijs-toevoegen-container"
                         <a>
                            <p class="products-prijs"> €' . $item['prijs'] . '</p>
                        </a>
                            <div class="toevoegen-button">
                                <h1 class="toevoegen-text">+</h1>
                            </div>
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
            <div class="menu-shopping-cart-container">
                <div class="menu-shopping-cart">
                    <div class="shopping-cart-container">
                        <h1 class="shopping-cart-text">U heeft nog geen <br>
                            producten in uw <br>
                            winkelmandje.</h1>
                    </div>
                    <div class="line-shopping-cart">
                    </div>
                    <div class="totaal-afrekenen-container">
                        <div class="totaal-shopping-cart">
                            <h1 class="totaal-shopping-cart-text">Totaal: €0,00</h1>
                        </div>
                        <div class="afrekenen-container">
                            <h1 class="afrekenen">Afrekenen</h1>
                        </div>
                    </div>
                    <div class="line-shopping-cart-2">
                    </div>
                    <div class="bezorgenvanaf-text-container">
                        <h1 class="bezorgenvanaf-text">Bezorgkosten vanaf €3,95 <br> Gratis ophalen bij onze filialen
                        </h1>
                    </div>
                    <div class="payment-methods-container">
                        <img class="ideal" src="media/ideal-logo.png">
                        <img class="by-cash" src="media/by-cash-logo.png">
                        <img class="by-card" src="media/by-card-logo.png">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </main>
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/index.php" method="post" onsubmit="return validation()">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="media/sushi-login-avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="text-login-container">

            </div>
            <div class="container">
                <div id="frm">
                    <p>
                        <label class="login-text-username-password"> UserName: </label>
                        <input type="text" id="user" name="user" />
                    </p>
                    <p>
                        <label class="login-text-username-password"> Password: </label>
                        <input type="password" id="pass" name="pass" />
                    </p>
                    <p>
                        <input type="submit" id="btn-login" name="login-button" value="Login" />
                    </p>
                </div>
                <script>
                    function validation() {
                        var id = document.getElementById('user').value;
                        var ps = document.getElementById('pass').value;
                        if (id.length == 0 && ps.length == 0) {
                            alert("User Name and Password fields are empty");
                            return false;
                        }
                        else {
                            if (id.length == 0) {
                                alert("User Name is empty");
                                return false;
                            }
                            if (ps.length == 0) {
                                alert("Password field is empty");
                                return false;
                            }
                        }
                    }  
                </script>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="main.js">

        <?php
        $resultSet = $connectie->query("SELECT * FROM menu_");
        while ($item = $resultSet->Fetch()) {
            echo '  <div class="filterDiv">
                             <div class="menu-products">
                            <p class="menu-name">' . $item['naam'] . '</p>';
            echo '<p class="menu-description">' . $item['beschrijving'] . '</p>';
            echo '<p class="menu-price"> € ' . $item['prijs'] . '</p>
                            </div>
                             <div class="menu-container1">
                            <button class="add">Add</button>
                        </div>
                        </div>';
        }
        ?>
</body >

</html >