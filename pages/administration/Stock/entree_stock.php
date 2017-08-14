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
var_dump($reqSelectProd->fetch(PDO::FETCH_ASSOC));
var_dump($reqSelectProd->fetch());
var_dump($reqSelectProd->fetch());

//requete pour connaitre le code_user
$sqlUser = "SELECT code_user FROM utilisateur u WHERE u.login = '".$_SESSION['Auth']->login."'";
$reqUser = $bdd->query($sqlUser);
$_SESSION['code_user'] = $reqUser->fetch(PDO::FETCH_ASSOC);

//$_SESSION['tabEntrant'] = ;
//var_dump($reqUser);
//var_dump($_SESSION);



//function insertEntree() {
//
//}

//Requete d'insertion pour l'entrance des produits IMCOMPLET!!!
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
    <h1 class="page-header">ENTREE DE PRODUIT(S)</h1>
    <div class="panel panel-default">

        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#fournisseur" data-toggle="tab">Infos Entree</a>
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
                            <B>  <h3> Informations du fournisseur de l'entree </h3></B>
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
                            <B>  <h3>Selection des Produit(s) entrant(s) </h3></B>
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
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Ajout de  <?php echo $dataProd['DESIGNATION']?> </h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" role="form" method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="quantite" class="col-sm-4 control-label">
                                                                            <span class="required">*</span> Quantite livree:
                                                                        </label>
                                                                        <input type="number" class="form-control col-sm-8" id="quantite" name="quantite" placeholder="Quantite de produit livre" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="number" class="col-sm-4 control-label">
                                                                            <span class="required">*</span> Quantite payante:
                                                                        </label>
                                                                        <input type="number" class="form-control col-sm-8" id="payante" name="payante" placeholder="Quantite payante" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="gratuite" class="col-sm-4 control-label">
                                                                            <span class="required">*</span> Quantite gratuite:
                                                                        </label>
                                                                        <input type="number" class="form-control col-sm-8" id="gratuite" name="gratuite" placeholder="Quantite gratuite" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-offset-5 col-sm-6">
                                                                            <button type="submit" id="submit" name="submit" class="btn-lg btn-primary fa fa-send"> Envoyer</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <!--end Form-->
                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
<!--                                                            <a type="button" class="col-md-pull-2 btn btn-lg btn-primary fa fa-plus" href="#"> Ajouter</a>-->
<!--                                                            <button type="button" class="btn btn-danger fa fa-close" data-dismiss="modal"> Fermer</button>-->
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
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
                            <B>  <h3> Liste des produits en entrance </h3></B>
                        </div>

                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Designation</th>
                                    <th>Quantite gratuite</th>
                                    <th>Quantite payante</th>
                                    <th>Quantite livree</th>
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