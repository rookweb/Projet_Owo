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
                            <a class="btn btn-outline btn-warning fa fa-money" href="?page=ajout_client"> Encaisser</a>
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
                                        <th>Solde</th>
                                        <th>Depassement</th>
                                        <th>Montant</th>
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
                                        <td><?php if($d->DROIT_CREDIT==0){echo "Oui";} else{echo "non";} ?></td>
                                        <td><?php if($d->DROIT_CREDIT==0) {echo $depassement =$d->CREDIT_MAX- $d->SOLDE;} else {echo 0;}?> FCFA
                                            </td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-success fa fa-gg" href="#"> sold</a>
                                            <a class="btn btn-outline btn-primary fa fa-history" href="#"> Hist</a>
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

