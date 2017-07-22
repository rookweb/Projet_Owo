<?php 
    $banque = $bdd->query('SELECT num_banque, description FROM banque');
    $classe = $bdd->query('SELECT num_clas, description FROM classe');
    $exploitant = $bdd->query('SELECT num_exploitant, libelle FROM exploitant');
    $famille = $bdd->query('SELECT num_famille, nom_famille FROM famille');
    $forme = $bdd->query('SELECT num_forme, nom_forme FROM forme');
    $laboratoire = $bdd->query('SELECT numero_labo, nom_laboratoire FROM laboratoire');
    $localisation = $bdd->query('SELECT num_localisation, nom_localisation FROM localisation');
    $motif = $bdd->query('SELECT code_motif, description FROM motif');
    $specialite = $bdd->query('SELECT num_specialite, nom_specialite FROM specialite');
?>


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DICTIONNAIRE DES DONNEES</h1>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#banque">Banque</a></li>
                    <li><a data-toggle="tab" href="#classe">Classe</a></li>
                    <li><a data-toggle="tab" href="#exploitant">Exploitant</a></li>
                    <li><a data-toggle="tab" href="#famille">Famille</a></li>
                    <li><a data-toggle="tab" href="#forme">Forme</a></li>
                    <li><a data-toggle="tab" href="#laboratoire">Laboratoire</a></li>
                    <li><a data-toggle="tab" href="#localisation">Localisation</a></li>
                    <li><a data-toggle="tab" href="#motif">Motif</a></li>
                    <li><a data-toggle="tab" href="#specialite">Specialite</a></li>
                </ul>

                <div class="tab-content">
                    <div id="banque" class="tab-pane fade in active">
                <div class="col-lg-12">
                    <h1 class="page-header">BANQUES</h1>
                </div>
                <!-- /.col-lg-12 -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#banque_add"> NOUVEAU</a>
                            <B>  <h3> Liste des Banques </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th> Denomination Banque</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $banque->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['num_banque']; ?></td>
                                        <td><?php echo $donnees['description']; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#banque_mod"> MODIFIER</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#banque_sup"> SUPPRIMER</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



    </div>
                    <div id="classe" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">CLASSES</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#classe_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Classes </h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Denomination Classe</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $classe->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_clas']; ?></td>
                                                    <td><?php echo $donnees['description']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#classe_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#classe_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
        </div>
                    <div id="exploitant" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">EXPLOITANTS</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#exploitant_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Exploitants</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Exploitant</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $exploitant->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_exploitant']; ?></td>
                                                    <td><?php echo $donnees['libelle']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#exploitant_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#exploitant_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="famille" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">FAMILLE</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#famille_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Familles</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Famille</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $famille->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_famille']; ?></td>
                                                    <td><?php echo $donnees['nom_famille']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#famille_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#famille_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="forme" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">FORME</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#forme_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Formes</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Forme</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $forme->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_forme']; ?></td>
                                                    <td><?php echo $donnees['nom_forme']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#form_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#form_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="laboratoire" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">LABORATOIRE</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#labo_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Laboratoires</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Laboratoire</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $laboratoire->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['numero_labo']; ?></td>
                                                    <td><?php echo $donnees['nom_laboratoire']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#labo_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#labo_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="localisation" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">LOCALISATION</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#loc_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des Localisations</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Localisation</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $localisation->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_localisation']; ?></td>
                                                    <td><?php echo $donnees['nom_localisation']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#loc_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#loc_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="motif" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">MOTIFS</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#motif_add"> NOUVEAU</a>
                                        <B>  <h3> Motifs de Mise en Rebus</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Code </th>
                                                <th>Libelle Motifs</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $motif->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['code_motif']; ?></td>
                                                    <td><?php echo $donnees['description']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#motif_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#motif_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div id="specialite" class="tab-pane fade">
                        <div class="col-lg-12">
                            <h1 class="page-header">SPECIALITES</h1>
                        </div>
                        <!-- /.col-lg-12 -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-outline btn-primary fa fa-plus" data-toggle="modal" data-target="#special_add"> NOUVEAU</a>
                                        <B>  <h3> Liste des specialites</h3></B>

                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Codification </th>
                                                <th>Libelle Specialite</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $specialite->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['num_specialite']; ?></td>
                                                    <td><?php echo $donnees['nom_specialite']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-success fa fa-edit" data-toggle="modal" data-target="#special_mod"> MODIFIER</a>
                                                        <a class="btn btn-outline btn-warning fa fa-times" data-toggle="modal" data-target="#special_sup"> SUPPRIMER</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
</div>
            </div>


<!-- formulaire popup -->
<!--Begin Modal Window-->
<!-- Modal Window  banque-->
<div class="modal fade left" id="banque_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUTER BANQUE</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajout des banques
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="banque_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER BANQUE</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=modS">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification banque
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="banque_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION BANQUE</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Window  classe-->
<div class="modal fade left" id="classe_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="classe_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="classe_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Window  exploitant-->
<div class="modal fade left" id="exploitant_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="exploitant_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="exploitant_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Window  famille-->
<div class="modal fade left" id="famille_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="famille_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="famille_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Window  forme-->
<div class="modal fade left" id="forme_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="forme_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="forme_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Window  labortatoire-->
<div class="modal fade left" id="labo_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="labo_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="labo_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Window  localisation-->
<div class="modal fade left" id="loc_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="loc_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="loc_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Window  motif-->
<div class="modal fade left" id="motif_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="motif_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="motif_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Window  specialite-->
<div class="modal fade left" id="special_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">AJOUT</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Codification"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Formulaire d'ajouts
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="special_mod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">MODIFIER </h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=add">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-warning">Modifier</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Modification ...........
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade left" id="special_sup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left no-margin">SUPPRESSION</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="post" action="pages/administration/parametre/script_banque.php?form=sup">
                    <span class="required">* Requis</span>
                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label">
                            <span class="required"></span> Codification:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="code" name="code" placeholder="
                            <?Php


                            ?>
                            "/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="col-sm-3 control-label">
                            <span class="required">*</span> Libelle:
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="
                            <?Php


                            ?>" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" id="submit" name="submit" class="btn-lg btn-danger">Supprimer</button>
                        </div>
                    </div>
                    <!--end Form-->
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-xs-10 pull-left text-left text-muted">
                    <small>
                        <strong>PS:</strong>
                        Etes vous sur de vouloir supprimer ce enregistrement?
                        <Br/>
                        Cette opération est irreversible
                    </small>
                </div>
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

