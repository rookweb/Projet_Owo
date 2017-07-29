
<?php
session_start();

include("pages/include/connexionDB.php");
require "pages/include/classes/class.auth.php";
//

ob_start();

$sql2 = "SELECT p.cip, p.designation, p.dci, p.prix_produit, p.qte_stock FROM `produit` p WHERE p.dci = '". $_POST['dci'] ."' ORDER BY p.designation";
$req2 = $bdd->query($sql2);
//$fetch = implode(";", $req2->fetch(PDO::FETCH_ASSOC));
$fetch = $req2->fetch(PDO::FETCH_ASSOC);
//var_dump($fetch);
header('Location:'.$_SERVER['HTTP_REFERER'].'&result='.$fetch);

  





