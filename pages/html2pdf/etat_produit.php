<?php
//$int = 5;
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pharma', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}



       		$reponse=$bdd->query("SELECT * FROM produit order by code_produit");
ob_start();

?>

<style type="text/css">
	table{width: 100%; border-collapse: collapse;margin-top:5mm;}
	#table tr{background-color:white;  color: black}
	#table tr th{border: 1px solid #aaa; width: 14%; text-align:center; padding: 15px}
	#table tr td{border: 1px solid #aaa; width: 14%; text-align:center; text-decoration:blink; padding: 15px}
	h2{font: normal 175% Arial, Helvetica, sans-serif;
  color: #528CCC;
  letter-spacing: -1px;
  margin: 0 0 10px 0;
  padding: 5px 0 0 0; }
</style>

<page backtop='60mm' footer="date;heure;page;">

	<page_header>
	        <table>
	            <tr>
	            <td style="width:25%">
				<img src="gesma.jpg" height="50" width="50" />
			     </td>
		
				<td style="width:50%; text-align:center;">
						<h1>ROOK IT</h1>
						votre partenaire de technologie de proximite
				deriere le supermache carrefour agoe kleve super<br>
					Tel:(+228)22 25 16 08
					Tel:(+228)22 56 48 97
				
				</td>
				
				<td style="width:25%; text-align:right;">
						
			       <img src="gesma.jpg" height="50" width="50" />
				</td>
				</tr>
			</table>	      
					
		<hr>
	</page_header>

	<page_footer>
		<hr>
		Pied de page
	</page_footer>
                    <h2 align="center" >LISTE DES CLIENTS</h2>

	<table id="table" margin-top>

	       <thead>
				<tr>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Email</th>
					<th>Telephone</th>
					<th>Dette</th>
					<th>Plafond</th>
					<th>Delais</th>					
				</tr>
		  </thead>
		  
		   <tbody>	
                  <?php while ($donnees = $reponse->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['code_cip']; ?></td>
                                        <td><?php echo $donnees['code_barre']; ?></td>
                                        <td><?php echo $donnees['code_interne']; ?></td>
                                        <td><?php echo $donnees['code_localisation']; ?></td>
                                        <td><?php echo $donnees['code_lab']; ?></td>
                                        <td><?php echo $donnees['code_exploitant']; ?></td>
                                        <td><?php echo $donnees['code_specialite']; ?></td>
                                         <td><?php echo $donnees['code_class']; ?></td>
                                        <td><?php echo $donnees['code_forme']; ?></td>
                                        <td><?php echo $donnees['dci']; ?></td>
                                        <td><?php echo $donnees['designation']; ?></td>
                                        <td><?php echo $donnees['Soumis_tva']; ?></td>
                                        <td><?php echo $donnees['date_commercialisation']; ?></td>
                                        <td><?php echo $donnees['photo']; ?></td>
                                        <td><?php echo $donnees['date_mj']; ?></td>
                                        <td><?php echo $donnees['date_peremption']; ?></td>
                                        <td><?php echo $donnees['statut']; ?></td>
                                        <td><?php echo $donnees['prix_achat']; ?></td>
                                        <td><?php echo $donnees['prix_vente']; ?></td>
                                        <td><?php echo $donnees['taux_tva']; ?></td>
                                        <td><?php echo $donnees['multiplicateur']; ?></td>      
                                        <td><?php echo $donnees['reduction']; ?></td>
                                        <td><?php echo $donnees['statut']; ?></td>               
                                    </tr>
                                <?php } ?>
		  </tbody>	
	</table>

</page>

<?php

$content = ob_get_clean();



try {

	$pdf = new HTML2PDF('landscape','A4','fr');
	$pdf->writeHTML($content);
	$pdf->Output("Liste des produits.pdf");

} catch (HTML2PDF_exception $e) {
	die($e);
}

?>