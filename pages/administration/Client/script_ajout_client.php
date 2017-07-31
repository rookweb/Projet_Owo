<?php
/**
 * Created by PhpStorm.
 * User: OLA
 * Date: 19/07/2017
 * Time: 22:54
 */
include "../../include/connexionDB.php";
if (isset($_POST['addcli'])){
    //<editor-fold defaultstate="collapsed" desc=" case 'ajout_client' ">

     // if (isset($_GET['form'])) {
            if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel1']) && isset($_POST['adresse'])) {
                $commercial = isset($_POST['commercial']) ? $_POST['commercial'] : '';
                $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
                $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
                $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
                $datep = isset($_POST['datep']) ? $_POST['datep'] : '';
                $piece = isset($_POST['piece']) ? $_POST['piece'] : '';
                $numpiece = isset($_POST['numpiece']) ? $_POST['numpiece'] : '';
                $droit = isset($_POST['droit']) ? $_POST['droit'] : '0';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $tel1 = isset($_POST['tel1']) ? $_POST['tel1'] : '';
                $tel2 = isset($_POST['tel2']) ? $_POST['tel2'] : '';
                $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
                $credit = isset($_POST['credit']) ? $_POST['credit'] : '';
                $remise = isset($_POST['remise']) ? $_POST['remise'] : '';
                $depassement = isset($_POST['depassement']) ? $_POST['depassement'] : '';
                $delai = isset($_POST['delai']) ? $_POST['delai'] : '';
                //Formattage
                $nom = htmlspecialchars($nom);
                $prenom = htmlspecialchars($prenom);
                $email = htmlspecialchars($email);
                $adresse = utf8_decode($adresse);
                $tel1 = htmlspecialchars($tel1);
                $tel2 = htmlspecialchars($tel2);
                $numpiece = htmlspecialchars($numpiece);
                $piece = htmlspecialchars($piece);
                //TEST
            /**    ECHO $titre ; ?> </Br> <?Php
               ECHO $nom ; ?> </Br> <?Php
                ECHO $prenom ; ?> </Br> <?Php
                ECHO $email ; ?> </Br> <?Php
                ECHO  $adresse ; ?> </Br> <?Php
                ECHO   $tel1 ; ?> </Br> <?Php
                ECHO  $tel2 ; ?> </Br> <?Php

                ECHO  $piece ; ?> </Br> <?Php
                 ECHO   $numpiece ; ?> </Br> <?Php
                  ECHO   $datep ; ?> </Br> <?Php
                ECHO  $droit ; ?> </Br> <?Php
                ECHO  $depassement ; ?> </Br> <?Php
**/

                //Traitement
                $json = array();
                $erreursChamp = array();
                $json['erreur'] = false;
                if ($nom === '') {
                    $erreursChamp['nom'] = 'vide';
                }
                if ($prenom === '') {
                    $erreursChamp['prenom'] = 'vide';
                }
                if (!$adresse) {
                    $erreursChamp['adresse'] = (!isset($_POST['adresse'])) ? 'vide' : '';
                }
                if (!$tel1) {
                    $erreursChamp['tel1'] = (!isset($_POST['tel1'])) ? 'vide' : '';
                }
                if (!empty($erreursChamp)) {
                    $json['erreur'] = 'champs';
                    $json['liste_erreurs'] = $erreursChamp;
                }
                if (!$json['erreur']) {//Pas d erreur
                    $req = $bdd->prepare("SELECT code_cli FROM client WHERE Nom_cli=?");
                    $req->execute(array($nom));
                    if ($req->rowCount() != 0) {
                        $json['erreur'] = 'doublon';
                    } else {
                        $req = $bdd->prepare("INSERT INTO client (CODE_COM,TITRE, NOM_CLI, PRENOM_CLI, TYPE_PIECE, NUM_PIECE, DATE_PIECE,
                        EMAIL, ADRESSE, TEL1, TEL2, STATUT,TOTAL_DU, CREDIT_MAX, DELAI_PAIEMENT, REMISE, DROIT_CREDIT, DEPASSEMENT)
                                                VALUES(:code_com,:titre,:Nom_cli,:prenom_cli,:type_piece, :num_piece, :date_piece,
						:Email, :adresse, :tel1, :tel2, :statut,:total_du, :credit_max, :delai_paiement, :remise, :droit_credit, :depassement)");
                        $req->execute(array(
                        'code_com'=>$commercial,
                        'titre' =>$titre,
						'Nom_cli'=>$nom, 
						'prenom_cli'=>$prenom, 
						'type_piece'=>$piece, 
						'num_piece'=>$numpiece,
						'date_piece'=>$datep, 
						'Email'=>$email,
						'adresse'=>$adresse,
						'tel1'=>$tel1, 
						'tel2'=>$tel2, 
						'statut'=>'0',
						'total_du'=>0, 
						'credit_max'=>$credit,
						'delai_paiement'=>$delai, 
						'remise' =>$remise,
						'droit_credit'=>$droit,
						'depassement' =>$depassement)
                        );
                        $lastId = (int)$bdd->lastInsertId();

                    }
                }
               // echo json_encode($json);
				echo '<body onload ="alert(\'Client ajouté avec succès\')">';
				echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=list_client">';
            }
     //  }
}
?>