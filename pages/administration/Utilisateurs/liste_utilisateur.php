<?php 
    $user = $bdd->query('SELECT * FROM utilisateur U JOIN privilege P WHERE U.code_priv = P.code_priv');
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">GESTION UTILISATEURS</h1>
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
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=utilisateur"> NOUVEAU</a>
                            <B>  <h3>  Liste des comptes utilisateurs OWO Pharma </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>login</th>
                                        <th>Privilege</th>
                                        <th>Date Enregistrement</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $user->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['nom_u']; ?></td>
                                        <td><?php echo $donnees['prenom_u']; ?></td>
                                        <td><?php echo $donnees['login']; ?></td>
                                        <td><?php echo $donnees['denomination']; ?></td>
                                        <td><?php echo $donnees['date_enregistrement']; ?></td>
                                        <td class="center"><?php if($donnees['statut'] == 0){echo "Actif";} else {echo "Desactiver";} ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-gear" href="#"> Modifier</a>
                                            <a class="btn btn-outline btn-success fa fa-times" href="#"> Desactiver</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"> Reinitialiser</a>
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


