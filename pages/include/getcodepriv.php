<?php
include("pages/include/connexionDB.php");
function getCodePriv(){
$Login = addslashes($_SESSION['Login']); // mise en variable du nom d'utilisateur
$req = $bdd->query("SELECT code_priv FROM utilisateur WHERE login='$Login'");
$req->execute(array(1));
$req = $req->fetch();
$liste = (int)$req['code_priv'];
return $liste;
}
