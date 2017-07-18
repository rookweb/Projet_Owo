<?php 
    $journee = $bdd->query('SELECT * FROM journee j LIMIT 0 , 15');
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste des Journees de caisse</h1>
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
                            <a class="btn btn-outline btn-primary fa fa-history" href="?page=historiq_journee"> HISTORIQUE</a>
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=ajout_client"> NOUVEAU</a>
                            <B>  <h3> Liste des Journees </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Journee</th>
                                        <th>Date ouverture</th>
                                        <th>Date fermeture</th>
                                        <th>Montant fermeture</th>
                                        <th>Date cloture</th>
                                        <th>Montant cloture</th>
                                        <th>Montant Manquant</th>
                                        <th>Montant surplus</th>
                                        <th>Operateur</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $journee->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['date']; ?></td>
                                        <td><?php echo $donnees['date_ouverture']; ?></td>
                                        <td><?php echo $donnees['date_fermeture']; ?></td>
                                        <td><?php echo $donnees['montant_fermeture']; ?></td>
                                        <td><?php echo $donnees['date_cloture']; ?></td>
                                        <td><?php echo $donnees['montant_cloture']; ?></td>
                                        <td><?php echo $donnees['montant_manquant']; ?></td>
                                        <td><?php echo $donnees['montant_surplus']; ?></td>
                                        <td><?php echo $donnees['code_user']; ?></td>
                                        <td><?php echo $donnees['statut']; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-plus" href="#"> ReOuv</a>
                                            <a class="btn btn-outline btn-success fa fa-times" href="#"> Arret</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"> Cloture</a>
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

