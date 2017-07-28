<?php 
    $clients= $bdd->query('SELECT CODE_CLI, TITRE, NOM_CLI, PRENOM_CLI, EMAIL, ADRESSE, TEL1, TEL2, STATUT, CREDIT_MAX, DELAI_PAIEMENT, REMISE, DROIT_CREDIT, DEPASSEMENT FROM client C');

?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LISTE CLIENTS </h1>
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
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=ajout_client"> NOUVEAU</a>
                            <B>  <h3> Information sur les clients </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>Credit</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $clients->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['TITRE']; ?></td>
                                        <td><?php echo $donnees['NOM_CLI']; ?></td>
                                        <td><?php echo $donnees['PRENOM_CLI']; ?></td>
                                        <td><?php echo $donnees['TEL1']; ?></td>
                                        <td><?php echo $donnees['EMAIL']; ?></td>
                                        <td><?php echo $donnees['DROIT_CREDIT']; ?></td>
                                        <td class="center"><?php echo $donnees['STATUT']; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-edit" href="#"> Mod</a>
                                            <a class="btn btn-outline btn-success fa fa-eye" href="#"> Aff</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"> Sup</a>
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

