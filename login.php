<?php

include "config.php";

$bd = connect();

$email = $_GET['email']; 
$pass = $_GET['password'];

$req = "SELECT * FROM users where email='$email' AND password='$pass'";

$res = $bd->query($req);

$nb=$res->rowCount();

if ($nb>0) {
    $result["reponse"]=true;
}else {
    $result["reponse"]=false;
}

echo json_encode($result);
?>