<?php 
    $clients= $bdd->query('SELECT code_cli, titre, nom_cli, prenom_cli, date_creation, email, adresse, tel1, tel2, statut, credit_maximum, nbr_jr_avant_paie, remise, droit_au_credit, depassement FROM client C');

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
                                        <td><?php echo $donnees['titre']; ?></td>
                                        <td><?php echo $donnees['nom_cli']; ?></td>
                                        <td><?php echo $donnees['prenom_cli']; ?></td>
                                        <td><?php echo $donnees['tel1']; ?></td>
                                        <td><?php echo $donnees['email']; ?></td>
                                        <td><?php echo $donnees['droit_au_credit']; ?></td>
                                        <td class="center"><?php echo $donnees['statut']; ?></td>
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

