<?php 
    global $bdd;
    $fournisseurs = $bdd->prepare('SELECT V.DATE_VENTE ,V.STATUT,C.NOM_CLI,V.CODE_VENTE, V.STATUT, PV.MONTANT_VENTE FROM vente V JOIN produit_vendu PV ON V.CODE_VENTE=PV.CODE_VENTE JOIN client C ON V.CODE_CLI=C.CODE_CLI WHERE V.STATUT="en attente"');
    $fournisseurs->execute();
    $data=$fournisseurs->fetchAll();
    $four=array()
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ventes en attente de validation </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vente a encaisser
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Utilisateur</th>
                                        <th>Identifiant de vente</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php foreach ($data as $d){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->DATE_VENTE; ?></td>
                                        <td><?php echo $d->NOM_CLI; ?></td>
                                        <td><?php echo $d->CODE_VENTE; ?></td>
                                        <td class="center"><?php echo $d->STATUT; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-gear" href="#">encaisser</a>
                                            <!-- l'appuie du bouton doit declencher un popup pour definir le mode de paiement et les informations necessaires --> 
                                            <a class="btn btn-outline btn-success fa fa-times" href="#"></a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"></a>
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

