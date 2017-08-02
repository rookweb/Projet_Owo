<?php
/**
 * Created by PhpStorm.
 * User: OLA
 * Date: 19/07/2017
 * Time: 22:54
 */
include "../../include/connexionDB.php";

    
                $statut = 0;
                $id = isset($_POST['memids']) ? $_POST['memids'] : '';

                    {
                        $req = $bdd->prepare("UPDATE utilisateur SET STATUT=:statut WHERE CODE_USER=:code");
                        $req->execute(array(
                			'statut'=>$statut,
                            'code'=>$id
                        //'date_enr'=>$date_enr
                        ));
                        $lastId = (int)$bdd->lastInsertId();
                    }
               // }
               // echo json_encode($json);
				echo '<body onload ="alert(\'Utilisateur bloque avec succès\')">';
				echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=liste_utilisateur">';
            
     //  }
?>