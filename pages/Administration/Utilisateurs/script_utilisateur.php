<?php
/**
 * Created by PhpStorm.
 * User: OLA
 * Date: 19/07/2017
 * Time: 22:54
 */
include "../../include/connexionDB.php";
if (isset($_POST['adduser'])){
    //<editor-fold defaultstate="collapsed" desc=" case 'ajout_client' ">

     // if (isset($_GET['form'])) {
       //     if ( isset($_POST['nom']) && isset($_POST['prenom']) ) {
                $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
                $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
                $privilege = isset($_POST['priv']) ? $_POST['priv'] : '';
                $statut = isset($_POST['statut']) ? $_POST['statut'] : '0';
                $login = isset($_POST['login']) ? $_POST['login'] : '';
                $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
                $date = date("Y-m-d H:i:s");
               // $date_enr=date('Y-m-d');
                //Formattage
                $nom = htmlspecialchars($nom);
                $prenom = htmlspecialchars($prenom);
                $login = htmlspecialchars($login);
                $pass = htmlspecialchars($pass);
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
                    {
                        $req = $bdd->prepare("INSERT INTO utilisateur (CODE_PRIVILEGE,NOM_USER,PRENOM_USER,LOGIN,PWD,STATUT,DATE_ENREGISTREMENT) VALUES(:code_privilege,:nom_user,:prenom_user,:login, :pass, :statut, :date_enregistrement)");
                        $req->execute(array(
                        'code_privilege'=>$privilege,
            						'nom_user'=>$nom, 
            						'prenom_user'=>$prenom, 
            						'login'=>$login,
            						'pass' =>$pass,
                        'statut' =>$statut,
                        'date_enregistrement' => $date
                        //'date_enr'=>$date_enr
                        ));
                        $lastId = (int)$bdd->lastInsertId();
                    }
               // }

                print_r($_POST);
               // echo json_encode($json);
				echo '<body onload ="alert(\'Utilisateur ajouté avec succès\')">';
				echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=liste_utilisateur">';
            }
     //  }
?>