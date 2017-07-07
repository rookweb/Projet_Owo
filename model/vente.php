<?php 
if ( ! function_exists('getProduits')) {
	function getProduits($search='')
	{
		global $bdd;
		$produits = array();
		if (!empty($search)) {
			$q = $bdd->prepare('SELECT * FROM produit where designation like ?');
			$q->execute(['%'.$search.'%']);
		}else{
		$q = $bdd->query('SELECT * FROM produit');
		$q->execute();	
		}
		
		while ($row = $q->fetchObject()) {
			$produits[] = $row;
		}
		$q->closeCursor();
		return $produits;
	}
}

if ( ! function_exists('getProduit')) {
	function getProduit($code_produit)
	{
		global $bdd;
		$q = $bdd->prepare('SELECT * FROM produit where code_produit=?');
		$q->execute(array($code_produit));	
		
		$produit = $q->fetchObject();
		$q->closeCursor();
		return $produit;
	}
}
