<?php
include_once("/model/vente.php");

include_once("/pages/Entite/Vente/fonctions_panier.php");

$code_produit=!empty($_GET["code_produit"])?$_GET["code_produit"]:0;
//verifie si le produit existe 
if ($code_produit>0) {
	# code...
	$produit= getProduit($code_produit);
if ($produit) {
	# code...
	ajouterArticle($produit->designation,2,$produit->prix_achat);

}
}

	$panier=retournerPanier();
	var_dump($panier);
//recherche du produit
if (isset($_POST['submit'])) {
$produits = getProduits($_POST['search']);
}else{
$produits = getProduits();	
}


require_once('/pages/Entite/vente/ajout_vente.php');
