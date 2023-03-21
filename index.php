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
    <main>
        <nav>
            <div class="banner-container">
                <div class="nav-banner-container">
                    <div class="navigatie-menu-container">
                        <li class="text-none">
                            <a class="navigatie-menu" href="index.php">Menu</a>
                        </li>
                    </div>
                    <div class="navigatie-contact-container">
                        <li class="text-none">
                            <a class="navigatie-contact" href="contact.php">Contact</a>
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
            <button name="login-button" class="login-button" onclick="document.getElementById('id01').style.display='block'"
                style="width:auto;">Login</button>
        </nav>
        <div class="menu-main-onder">
            <div class="menu-search-container">
                <div class="search-menu">
                    <div class="search-gerechten">
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
                            <button class="btn" onclick="filterSelection('Cadeaukaarten')"> Cadeaukaarten </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-products-container">
                <div class="border-onder-products-top">
                </div>
                <div class="menu-products">

                    <div class="container-filters">
                        <div class="filterDiv Nigiri">
                            <img class="products-image" src="media/gerechten/nigiri-zalm.jpg">
                            <h1 class="products-name-styl">Zalm Nigiri</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Nigiri ">
                            <img class="products-image" src="media/gerechten/nigiri-tonijn.jpg">
                            <h1 class="products-name-styl">Tuna Nigiri</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Nigiri ">
                            <img class="products-image" src="media/gerechten/nigiri-garnaal.jpg">
                            <h1 class="products-name-styl">Garnaal Nigiri</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 1 Persoon">
                            <img class="products-image" src="media/gerechten/real-chrisp.jpg">
                            <h1 class="products-name-styl">Real Chrisp</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 1 Persoon">
                            <img class="products-image" src="media/gerechten/mixed-sushi.jpg">
                            <h1 class="products-name-styl">Mixed Sushi</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 1 Persoon">
                            <img class="products-image" src="media/gerechten/sushi-deluxe.jpg">
                            <h1 class="products-name-styl">Sushi De Luxe</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 1 Persoon">
                            <img class="products-image" src="media/gerechten/happy-vegan.jpg">
                            <h1 class="products-name-styl">Happy Vegan</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>

                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/luxury-menu.jpg">
                            <h1 class="products-name-styl">Luxury Menu</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/flamed-specials.jpg">
                            <h1 class="products-name-styl">Flamed Specials</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/double-chrisp-menu.jpg">
                            <h1 class="products-name-styl">Double Chrisp Menu</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/new-york-new-york.jpg">
                            <h1 class="products-name-styl">New York New York</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/magic-menu.jpg">
                            <h1 class="products-name-styl">Magic Menu</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Menu 2 Personen">
                            <img class="products-image" src="media/gerechten/super-sushi-menu.jpg">
                            <h1 class="products-name-styl">Super Sushi Menu</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Flamed Specials">
                            <img class="products-image" src="media/gerechten/tuna-flamed-ebi.jpg">
                            <h1 class="products-name-styl">Tuna Flamed Ebi</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Flamed Specials">
                            <img class="products-image" src="media/gerechten/flamed-nigiri-zalm.jpg">
                            <h1 class="products-name-styl">Flamed Nigiri Salmon</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Flamed Specials">
                            <img class="products-image" src="media/gerechten/flamed-nigiri-tuna.jpg">
                            <h1 class="products-name-styl">Flamed Nigiri Tuna</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Crispy Rolls">
                            <img class="products-image" src="media/gerechten/crispy-ebi.jpg">
                            <h1 class="products-name-styl">Crispy Ebi</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Crispy Rolls">
                            <img class="products-image" src="media/gerechten/crispy-crab.jpg">
                            <h1 class="products-name-styl">Crispy Crab</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Crispy Rolls">
                            <img class="products-image" src="media/gerechten/crispy-veggie.jpg">
                            <h1 class="products-name-styl">Crispy Veggie</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Crispy Rolls">
                            <img class="products-image" src="media/gerechten/crispy-yakitori.jpg">
                            <h1 class="products-name-styl">Crispy Yakitori</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Sashimi">
                            <img class="products-image" src="media/gerechten/sashimi-menu-zalm-tuna.jpg">
                            <h1 class="products-name-styl">Sashimi Mix Zalm Tonijn XL</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Sashimi">
                            <img class="products-image" src="media/gerechten/sashimi-menu-zalm.jpg">
                            <h1 class="products-name-styl">Sashimi Menu Zalm</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Sashimi">
                            <img class="products-image" src="media/gerechten/sashimi-mix.jpg">
                            <h1 class="products-name-styl">Sashimi Mix L</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Sashimi">
                            <img class="products-image" src="media/gerechten/sashimi-tonijn.jpg">
                            <h1 class="products-name-styl">Sashimi Tonijn</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Sashimi">
                            <img class="products-image" src="media/gerechten/sashimi-zalm.jpg">
                            <h1 class="products-name-styl">Sashimi Zalm</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Kids Boxen">
                            <img class="products-image" src="media/gerechten/kids-box-sashimi.jpg">
                            <h1 class="products-name-styl">Kids Box Sashimi</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Kids Boxen">
                            <img class="products-image" src="media/gerechten/kids-box-urakami.jpg">
                            <h1 class="products-name-styl">Kids Box Uramaki</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Kids Boxen">
                            <img class="products-image" src="media/gerechten/kids-box-yakitori.jpg">
                            <h1 class="products-name-styl">Kids Box Yakitori</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/edamme.jpg">
                            <h1 class="products-name-styl">Edamme</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/sesam-tuna-salad.jpg">
                            <h1 class="products-name-styl">Sesam Tuna Salad</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>

                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/oceans-triple-salad.jpg">
                            <h1 class="products-name-styl">Ocean's Triple Salad</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/vegan-lemon-ebi-salad.jpg">
                            <h1 class="products-name-styl">Vegan Lemon Ebi Salad</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/komkommersalade.jpg">
                            <h1 class="products-name-styl">Komkommer Salad</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Salades">
                            <img class="products-image" src="media/gerechten/seaweed-salad.jpg">
                            <h1 class="products-name-styl">Seaweed-Salad</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/cocacola.jpg">
                            <h1 class="products-name-styl">Coca Cola</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/cocacola-zero.jpg">
                            <h1 class="products-name-styl">Coca Cola Zero</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/fanta.jpg">
                            <h1 class="products-name-styl">Fanta</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/fuze-tea-green.jpg">
                            <h1 class="products-name-styl">Fuze Tea Green Tea</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/fuze-tea-lemon-black-tea.jpg">
                            <h1 class="products-name-styl">Fuze Tea Lemon/Black Tea</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/redbull.jpg">
                            <h1 class="products-name-styl">Redbull</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/sprite.jpg">
                            <h1 class="products-name-styl">Sprite</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/capri-sun-orange.jpg">
                            <h1 class="products-name-styl">Capri Sun Orange</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Drinken">
                            <img class="products-image" src="media/gerechten/water.jpg">
                            <h1 class="products-name-styl">Water</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Cadeaukaarten">
                            <img class="products-image" src="media/gerechten/25-euro.jpg">
                            <h1 class="products-name-styl">Cadeaukaat €25</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
                        </div>
                        <div class="filterDiv Cadeaukaarten">
                            <img class="products-image" src="media/gerechten/50-euro.jpg">
                            <h1 class="products-name-styl">Cadeaukaat €50</h1>
                            <div class="beschrijving-container">
                                <h1 class="products-beschrijving">BESCHRIJVING</h1>
                            </div>
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
                <div class="border-onder-products">
                </div>
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
    </main>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="/index.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="media/sushi-login-avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="text-login-container">
                <?php
                
                if (isset($_POST['login-button'])) {
                    
                include('connection.php');
                $username = isset($_POST['user']);
                $password = isset($_POST['pass']);

                //to prevent from mysqli injection  
                $username = stripcslashes($username);
                $password = stripcslashes($password);
                $username = mysqli_real_escape_string($con, $username);
                $password = mysqli_real_escape_string($con, $password);

                $sql = "select *from login where username = '$username' and password = '$password'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                if ($count == 1) {
                    echo "<h1 class='login-succesful' > Login successful!</h1>";

                } else {
                    echo "<h1 class='login-failed' > Login failed. Invalid username or password.</h1>";

                }

            }
                ?>
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
                        <input type="submit" id="btn-login" value="Login" />
                    </p>

                </div>
                <script>
                    function validation() {
                        var id = document.f1.user.value;
                        var ps = document.f1.pass.value;
                        if (id.length == "" && ps.length == "") {
                            alert("User Name and Password fields are empty");
                            return false;
                        }
                        else {
                            if (id.length == "") {
                                alert("User Name is empty");
                                return false;
                            }
                            if (ps.length == "") {
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
</body >

</html >