<?php
include_once("/model/vente.php");

include_once("/pages/Entite/Vente/fonctions_panier.php");

$CODE_PRODUIT=!empty($_GET["CODE_PRODUIT"])?$_GET["CODE_PRODUIT"]:0;
//verifie si le produit existe 
if ($CODE_PRODUIT>0) {
	# code...
	$produit= getProduit($CODE_PRODUIT);
	if ($produit) {
		# code...
		ajouterArticle($produit->DESIGNATION,1,$produit->PRIX_PRODUIT);

	}
}

$panier=retournerPanier();
var_dump($panier);

//recherche du produit
if (isset($_POST['search'])) {
	$produits = getProduits($_POST['search']);
	}
	else{
		$produits = getProduits();	
	}

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $NB_VENDU = array();
      $i=0;
      foreach ($q as $contenu){
         $NB_VENDU[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($NB_VENDU) ; $i++)
         {
            modifierNB_VENDU($_SESSION['panier']['DESIGNATION'][$i],round($NB_VENDU[$i]));
         }
         break;

      Default:
         break;
   }
}

require_once('/pages/Entite/vente/ajout_vente.php');
