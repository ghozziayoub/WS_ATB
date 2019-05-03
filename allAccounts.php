<?php

include "config.php";

$conn = connect(); 

$sql = "SELECT * FROM accounts";

$result = $conn->query($sql) or die ($conn->errorInfo()[2]);

$array = array();

$nb=$result->rowCount();

if($nb>0)
{
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tmp=array();
        $tmp["RIB"] = $row["RIB"];
        $tmp["type_account"] = $row["type_account"];
        $tmp["solde"] = $row["solde"];
        $tmp["devise_account"] = $row["devise_account"];

        array_push($array, $tmp);
  }
}
$result->closeCursor();
//fermer la connexion
$conn=null;


echo json_encode($array);
?>
