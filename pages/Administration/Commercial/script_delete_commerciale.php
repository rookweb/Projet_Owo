<?php
//including the database connection file
include "../../include/connexionDB.php";
 
//getting id of the data from url
$id =$_GET['id'];
 
//deleting the row from table


$query = $bdd->prepare("DELETE FROM commerciale WHERE code_com=?");
$query->execute(array($id));
 
//redirecting to the display page (index.php in our case)
echo '<body onload ="alert(\'Fournisseur supprime avec succès\')">';
echo $id;
echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=liste_commercial">';
?>