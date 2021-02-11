<?php
session_start();

$users = array(
    "Hamid" => array("pwd" => "123", "rol" => "Administrator"),
    "Jouhan" => array("pwd" => "134", "rol" => "Gebruiker"),
    "Bernard" => array("pwd" => "321", "rol" => "Administrator"),
);
if (isset ($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST['pwd']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
        "pwd" => $users [$_POST["login"]]["pwd"], "rol" => $users[$_POST["login"]]["rol"]);
    $message = "Welkom " . $_SESSION["user"]["naam"] . " met de rol ". $_SESSION["user"]["rol"] ;
} else {
    $message = "inloggen";
}
print_r($_SESSION);

?>
<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['php_SElF']; ?>" method="post">
    <div class="from-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password</label>
        <input type="Password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">website</a></p>
<p><a href="Login.php?loguit">uitloggen</a></p>
<p><a href="admin.php">Administrator</a></p>
</body>
</html>
