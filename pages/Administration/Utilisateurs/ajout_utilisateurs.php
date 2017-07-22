<?php
include("/pages/include/connexionDB.php");
$privilege=$bdd->query('SELECT code_priv,denomination FROM privilege');
?>



<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ENREGISTREMENT UTILISATEUR</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">

            <!-- /.section des identifiants -->
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">

                        <form role="form" method="post" action="pages/administration/Utilisateurs/script_utilisateur.php">

                            <div class=" form-group col-lg-8">

                                <h3>INFORMATIONS GENERALES</h3>
                                <div class="form-group col-lg-6">
                                    <label for="nom">Nom </label>
                                    <input class="form-control" type="text" id="nom" name="nom" REQUIRED />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="prenom">Pr&eacute;nom </label>
                                    <input class="form-control" type="text" id="prenom" name="prenom" REQUIRED />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="priv">Privil&egrave;ge</label>
                                    <select class="form-control" id="priv" name="priv">
                                        <?php while ($donnees = $privilege->fetch()){
                                            echo '<option value="'.$donnees['code_priv'].'">';

                                            echo $donnees['denomination'];

                                            echo '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="statut" name="status">  Bloqu&eacute;
                                    </label>
                                </div>
                                </div>
                            <div class=" form-group col-lg-8">

                                <h3>INFORMATION DE CONNEXION</h3>
                                <div class="form-group col-lg-6">
                                    <label for="login">Login</label>
                                    <input  type = "text" class="form-control" id="login" name ="login" REQUIRED/>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pass">Mot de Passe</label>
                                    <input type = "password" class="form-control" id="pass" name = "pass" REQUIRED/>
                                </div>
                                <div class="form-group ">
                                    <label for="pass2"> Confirmer Mot de Passe</label>
                                    <input type = "password" class="form-control" id="pass2" name = "pass2" REQUIRED/>
                                </div>

                            <div class="col-lg-8">
                                <button  type="submit" class="btn btn-success col-lg-5" name "adduser" >Enregistrer </button>
                                <button type="reset" class="btn btn-danger col-lg-5 col-lg-push-2" >Annuler </button>
                            </div>
                            </div>

                        </form>
                    </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.section des prix -->

        <!-- /.panel -->
    </div>

<!-- /.row -->
<script>




</script>
