<?php

include "config.php";

$conn = connect(); 

$sql = "SELECT * FROM historique";

$result = $conn->query($sql) or die ($conn->errorInfo()[2]);

$array = array();

$nb=$result->rowCount();

if($nb>0)
{
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tmp=array();
        $tmp["type_transaction"] = $row["type_transaction"];
        $tmp["date_transaction"] = $row["date_transaction"];
        $tmp["montant"] = $row["montant"];
        $tmp["num_compte"] = $row["num_compte"];

        array_push($array, $tmp);
  }
}
$result->closeCursor();
//fermer la connexion
$conn=null;


echo json_encode($array);
?>
