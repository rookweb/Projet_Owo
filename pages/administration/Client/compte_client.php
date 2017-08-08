<?php
global $bdd;
$clients= $bdd->prepare('SELECT CODE_CLI, TITRE, NOM_CLI, PRENOM_CLI, EMAIL, ADRESSE, TEL1, TEL2, STATUT,TOTAL_DU SOLDE, CREDIT_MAX, DELAI_PAIEMENT, REMISE, DROIT_CREDIT, DEPASSEMENT FROM client');
$clients->execute();
$data=$clients->fetchAll();
$four=array();

?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">COMPTE CLIENT</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                            
                            <B>  <h3> Liste des comptes clients </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Nom</th>
                                        <th>Credit Max</th>
                                        <th>Delai</th>
                                        <th>Remise</th>
                                        <th>Credit</th>
                                        <th>Dette</th>
                                        <th>Depassement</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php foreach ($data as $d){
                                //var_dump($data) ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->TITRE; ?></td>
                                        <td><?php echo $d->NOM_CLI; ?></td>
                                        <td><?php echo $d->CREDIT_MAX; ?></td>
                                        <td><?php echo $d->DELAI_PAIEMENT." jours"; ?></td>
                                        <td><?php echo $d->SOLDE; ?></td>
                                        <td><?php if($d->DROIT_CREDIT==0){echo "Oui";} else{echo "non";} ?></td>
                                        <td><?php echo $d->SOLDE; ?> FCFA</td>
                                        <td><?php if($d->DROIT_CREDIT==0) {echo $d->DEPASSEMENT." FCFA";} else {echo "depassement non permit";}?>
                                            </td>
                                        <td class="center">
                                        <div>
                                            <a class="btn btn-outline btn-success fa fa-gg" href="#"> sold</a>
                                            <a class="btn btn-outline btn-primary fa fa-history" href="#"> Hist</a>
                                        </div>
                                        <div>
                                            <a class="btn btn-outline btn-warning fa fa-money" data-toggle="modal" data-target="#myModal"> Encaisser</a>
                                            
                                        </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <!-- #########  SECTION MODAL  ##########   -->

            <div class="modal fade left" id="myModal"> 
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
                                    <span class="required">*</span> Quantité livrée:
                                </label> 
                                <div class="col-sm-9"> 
                                    <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Quantité de produit livré" required> 
                                </div> 
                            </div> 
                            <div class="form-group"> 
                                <label for="number" class="col-sm-3 control-label">
                                    <span class="required">*</span> Quantité payante: 
                                </label> 
                                <div class="col-sm-9"> 
                                    <input type="number" class="form-control" id="payante" name="payante" placeholder="Quantité payante" required>
                                </div> 
                            </div> 
                                <div class="form-group"> 
                                <label for="gratuite" class="col-sm-3 control-label">
                                    <span class="required">*</span> Quantité gratuite:
                                </label> 
                                <div class="col-sm-9"> 
                                    <input type="number" class="form-control" id="gratuite" name="gratuite" placeholder="Quantité gratuite" required>
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
            </div>