<div class="zoek-container">
    <form>
        <input type="text" name="zoekveld" placeholder="Zoek een gerecht...">
        <input type="submit" name="submit-button" value="zoeken">

    </form>
</div>

<?php

$dsn = 'mysql:dbname=menu;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $connectie = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "<h2 class='error'>Verbinding niet gelukt: </h2" . $e;
}

if (isset($_POST['zoekveld']) && $_POST['zoekveld'] != "") {
    $zoekveld = $_POST['zoekveld'];
    $resultSet = $connectie->query("SELECT * FROM MENU WERE Titel LIKE '%" . $nigiri . "%'");
} else {
    $resultSet = $connectie->query("SELECT * FROM MENU");
}

?>