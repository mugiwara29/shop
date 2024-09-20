
<?php
session_start();

$con = mysqli_connect("", "root");
mysqli_select_db($con, "webshop");
$kbn = ($_POST["kbn"]);
$sql = "select * from customer where email = '" . $kbn . "'";
$res = mysqli_query($con, $sql);
$dsatz = mysqli_fetch_assoc($res);

if ($dsatz['password'] == $_POST["kpw"]) {

    $_SESSION["kvn"] = $dsatz['vorname']; # kunden vorname aus fetch speichern
    $_SESSION["kid"] = $dsatz['id_customer']; # kunden id aus fetch speichern
    header("Location: Main_Customer.php");
} else {
    echo "Ihre Zugangsdaten sind nicht korrekt oder Sie sind noch nicht <p><a href ='Register.php'>registriert!</a></p>";
}

mysqli_close($con);

?>