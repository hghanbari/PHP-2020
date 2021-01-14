<?php

require_once 'db.php';

$user = $_POST['user'];

$check = mysqli_query($db,"SElECT * FROM aanmelden WHERE name = '$user'") ;

if(mysqli_num_rows($check) > 0 ){
    $_SESSION["loggedin"] = $user;
 echo "welcom";
}else{
    echo "you do not registered yet";
}
?>