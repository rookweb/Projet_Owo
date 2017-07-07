<?php


if(isset($_POST['submit']))
		{
	    $code_produit=htmlspecialchars(trim($_POST['code_produit']));
		$code_cip=htmlspecialchars(trim($_POST['code_cip']));
		$designation=htmlspecialchars(trim($_POST['designation']));

	
	
		$eq=$bd->prepare('INSERT INTO produit(code_produit,designation)VALUES(:code_produit,:code_cip,:designation)');
		echo '<center><b>Insertion effectuée avec succès</b></center>';
		 	$eq->bindValue(':code_produit',$code_produit,PDO::PARAM_STR);
			$eq->bindValue(':code_cip',$code_cip,PDO::PARAM_STR);
			$eq->bindValue(':designation',$designation,PDO::PARAM_STR);
			$eq->execute();
			$eq->closeCursor();
			
			
	}


require_once("views/administration/Produit/ajout_produit.php");
