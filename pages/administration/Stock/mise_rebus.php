<?php
//Requete pour combo box des fournisseurs
$sqlFourn =  "SELECT * FROM fournisseur f ORDER BY f.raison_social";
$reqFourn = $bdd->query($sqlFourn);

//Requete

//Affichage des produits pour le choix des produits entrants (2eme tabulation)
$sqlProd="SELECT * FROM `produit` p ORDER BY p.designation";
$reqProd = $bdd->query($sqlProd);

//Affichage des produits choisis (3eme tabulation)
$sqlSelectProd="SELECT * FROM `produit` p ORDER BY p.designation";
$reqSelectProd = $bdd->query($sqlSelectProd);

//requete pour connaitre le code_user
$sqlUser = "SELECT code_user FROM utilisateur u WHERE u.login = '".$_SESSION['Auth']->login."'";
$reqUser = $bdd->query($sqlUser);
$_SESSION['code_user'] = $reqUser->fetch(PDO::FETCH_ASSOC);
//var_dump($reqUser);
//var_dump($_SESSION);

//Requete d'insertion pour l'entrance des produits IMCOMPLET!!!

//function insertEntree() {
//
//}

//$sqlInsert = "INSERT INTO entree (code_user, date_entree, numero_facture, numero_bordereau)
//              VALUES (".$_SESSION['code_user'].",".$_POST['date_entree']."," .$_POST['numero_facture'].", ".$_POST['numero_bordereau'].");
//              INSERT INTO mouvement (libelle, date)
//              VALUES ('Entrée', (SELECT date_entree FROM entree WHERE numero_facture =".$_POST['numero_facture']."));
//              INSERT INTO produit_entree_fournisseur (code_fournisseur, code_produit, code_entree,
//              nombre_entree, qte_achat, qte_gratuit, date_maj, montant_du, achat_credit)
//              VALUES (".$_POST['code_fournisseur'].", (SELECT code_entree FROM entree WHERE numero_facture =".$_POST['numero_facture'].")
//              );
//              INSERT INTO produit (date_mj, qte_stock)
//              VALUES ((SELECT date_entree FROM entree WHERE numero_facture =".$_POST['numero_facture']."), qte_stock + );
//              ";

?>


<div class="row">
    <h1 class="page-header">MISE EN REBUS</h1>
    <div class="panel panel-default">

        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#fournisseur" data-toggle="tab">Infos Sortie</a>
                </li>
                <li><a href="#produit" data-toggle="tab">Infos Produit(s)</a>
                </li>
                <li><a href="#validation" data-toggle="tab">Validation</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="fournisseur">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <B>  <h3> Informations de la sortie </h3></B>
                        </div>

                        <div class="panel-body">

                            <div class="form-group col-lg-6">
                                <label for="fournisseur">Fournisseur</label>
                                <select class="form-control" name="fournisseur">

                                    <?php
                                    while($dataFourn = $reqFourn->fetch(PDO::FETCH_ASSOC)){

                                        echo '<option value="'.$dataFourn['CODE_FOURNISSEUR'].'">'.$dataFourn['RAISON_SOCIAL'].'</option>';

                                    }?>


                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="date">Date d'entree</label>
                                <input class="form-control datepicker" required readonly data-provide="datepicker" placeholder="DD/MM/YYYY" id="dated" name="date">
                            </div>
                            <div class="form-group col-lg-6 col-xm-2">
                                <label for="facture">Numero facture</label>
                                <input type="text" required class="form-control" name="facture">
                            </div>
                            <div class="form-group col-lg-6 col-xm-2">
                                <label for="bordereau">Numero de bordereau</label>
                                <input class="form-control" required name="bordereau">
                            </div>

                        </div>

                        <div class="panel-footer">
                            <a type="button" class="btn btn-primary fa fa-hand-o-right" data-toggle="tab" href="#produit"> Suivant</a>

                        </div>
                    </div>



                </div>

                <div class="tab-pane fade" id="produit">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <B>  <h3>Selection du(es) Produit(s) sortant(s) </h3></B>
                        </div>

                        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Code CIP</th>
                                    <th>Designation</th>
                                    <th>Quantite</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                while($dataProd = $reqProd->fetch(PDO::FETCH_ASSOC)){
                                    $i ++;
                                    ?>
                                    <tr>
                                        <td><?php echo /*utf8_encode(*/$dataProd['CIP']//) ?></td>
                                        <td><?php echo utf8_encode($dataProd['DESIGNATION']) ?></td>
                                        <td><?php echo $dataProd['QTE_STOCK'] ?></td>
                                        <td>
                                            <button class="btn btn-outline btn-primary fa fa-plus" type="button" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"> Ajouter</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="pull-left no-margin">Les quantités</h3>
                                                            <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" role="form" method="post" action="form_to_email_script.php ">
                                                                <span class="required">* Requis</span>
                                                                <div class="form-group">
                                                                    <label for="quantite" class="col-sm-3 control-label">
                                                                        <span class="required">*</span> Quantité a sortir:
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Quantité de produit a sortir" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="motif" class="col-sm-3 control-label">
                                                                        <span class="required">*</span> Motif de sortie:
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea name="motif" rows="4" required class="form-control" id="motif" placeholder="Motif de sortie"></textarea>
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
                                                                    <strong>Privacy Policy:</strong>
                                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                    Mauris vitae libero lacus, vel hendrerit nisi! Maecenas quis
                                                                    velit nisl, volutpat viverra felis. Vestibulum luctus mauris
                                                                    sed sem dapibus luctus.
                                                                </small>
                                                            </div>
                                                            <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>

                        <div class="panel-footer">
                            <a type="button" class="btn btn-default fa fa-hand-o-left" data-toggle="tab" href="#fournisseur"> Precedent</a>
                            <a type="button" class="btn btn-primary fa fa-hand-o-right" data-toggle="tab" href="#validation"> Suivant</a>
                        </div>
                    </div>



                </div>

                <div class="tab-pane fade" id="validation">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <B>  <h3> Liste des produits en sortie </h3></B>
                        </div>

                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Designation</th>
                                    <th>Quantite en sortie</th>
                                    <th>Motif de la sortie</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($dataSelectProd = $reqSelectProd->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                    <tr>
                                        <td><?php echo utf8_encode($dataSelectProd['DESIGNATION']) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-times" href="#"> Retirer</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>

                        <div class="panel-footer">

                            <a type="button" class="btn btn-default fa fa-hand-o-left" data-toggle="tab" href="#produit"> Precedent</a>
                            <a type="button" class="btn btn-primary fa fa-hand-o-right" data-toggle="tab" href="#validation"> Suivant</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
</div>