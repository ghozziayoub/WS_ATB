<?php

include "config.php";

$conn = connect(); 

$id = $_GET['id'];

$sql = "SELECT type_transaction,date_transaction,montant,accounts.RIB
FROM historique
INNER JOIN accounts ON historique.num_compte = accounts.num_account
WHERE num_compte IN (
    SELECT num_account
    FROM accounts
    WHERE id_client = $id
  )";

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
        $tmp["RIB"] = $row["RIB"];

        array_push($array, $tmp);
  }
}
$result->closeCursor();
//fermer la connexion
$conn=null;


echo json_encode($array);
?>
