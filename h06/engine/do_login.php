<?php
require_once 'db.php';


$pass = $_POST["pass"];
$email = $_POST["email"];


$s = "SElECT * FROM aanmelden WHERE name = '$pass' AND email = '$email'";
$result = mysqli_query($db, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  echo "Welcoom"+$email;


} else{
    //new account
    $reg = "INSERT INTO aanmelden(email , password ) values ('$email','$pass') ";
    mysqli_query($db, $reg);
    echo"welcom voor erstekeer;";
}













?>