<?php
$clients= $bdd->query('SELECT code_cli, titre, nom_cli, prenom_cli, date_naissance, email, adresse, tel1, tel2, statut,total_du solde, credit_maximum, nbr_jr_avant_paie, remise, droit_au_credit, depassement FROM client ');

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
                                        <th>Solde</th>
                                        <th>Depassement</th>
                                        <th>Montant</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $clients->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['titre']; ?></td>
                                        <td><?php echo $donnees['nom_cli']; ?></td>
                                        <td><?php echo $donnees['credit_maximum']; ?> FCFA</td>
                                        <td><?php echo $donnees['nbr_jr_avant_paie']; ?></td>
                                        <td><?php echo $donnees['remise']; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-success fa fa-gg" href="#">Mod</a>
                                            <a class="btn btn-outline btn-primary fa fa-history" href="#"> Sup</a>
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

