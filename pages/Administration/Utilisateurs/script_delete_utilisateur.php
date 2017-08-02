<?php
/**
 * Created by PhpStorm.
 * User: OLA
 * Date: 19/07/2017
 * Time: 22:54
 */
include "../../include/connexionDB.php";

    
                
                $id = isset($_POST['memids']) ? $_POST['memids'] : '';

                    {
                        $req = $bdd->prepare("UPDATE utilisateur SET STATUT='0' WHERE utilisateur.CODE_USER=:code");
                        $req->execute(array('code'=>$id));
                    }
               // }
               // echo json_encode($json);
				echo '<body onload ="alert(\'Utilisateur bloque avec succès\')">';
				echo '<meta http-equiv="refresh" content="0;URL=../../../index.php?page=liste_utilisateur">';
            
     //  }
?>