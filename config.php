<?php
function connect(){

    $server ="localhost";
    $base ="pfe_atb";
    $user ="root";
    $pass ="";

    try {
        
        $bd = new PDO("mysql:host=$server;dbname=$base",$user,$pass);
        $bd->query("SET NAMES utf8");
        return $bd;

    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
}
?>