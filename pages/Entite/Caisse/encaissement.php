<?php 

global $bdd;
$caisse = $bdd->query('SELECT * 
from vente v, encaissement e, utilisateur u, produit_vendu p, produit pr
where v.CODE_VENTE = e.CODE_VENTE
and e.CODE_USER = u.CODE_USER
and p.CODE_PRODUIT=pr.CODE_PRODUIT');
$caisse->execute();
$data=$caisse->fetchAll();

$cai=array();

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
                               <?php foreach ($data as $d) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->DATE_ENCAISSEMENT; ?></td>
                                        <td><?php echo $d->PRENOM_USER; ?></td>
                                        <td><?php echo $d->DESIGNATION; ?></td>
                                        <td><?php echo 'Non régle'; ?></td>
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

