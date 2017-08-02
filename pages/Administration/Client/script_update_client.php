<?php
include "../../include/connexionDB.php";
if (isset($_POST['update_cli'])){
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
                $code= isset($_POST['memids']) ? $_POST['memids'] : '';
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
                
                        $req = $bdd->prepare("UPDATE client SET TITRE=:titre, NOM_CLI=:Nom_cli, PRENOM_CLI=:prenom_cli, TYPE_PIECE=:type_piece, NUM_PIECE:=num_piece, DATE_PIECE:=date_piece,
                        EMAIL:=Email, ADRESSE=:adresse, TEL1=:tel1, TEL2=:tel2, STATUT=:statut,TOTAL_DU=:total_du, CREDIT_MAX=:credit_max, DELAI_PAIEMENT=:delai_paiement, REMISE=:remise, DROIT_CREDIT=:droit_credit, DEPASSEMENT=:depassement WHERE CODE_CLI=:code");
                        $req->execute(array(
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
                        'depassement' =>$depassement,
                        'code'=>$code)
                        );

                        print_r($req);

                    }
                
               // echo json_encode($json);
                echo '<body onload ="alert(\'Client mis a jour avec succès\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=list_client">';
            }
     //  }


?>