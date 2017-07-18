<?php 
    $com = $bdd->query('SELECT nom_com,prenom_com,date_emb,tel_com, tel_urg, chiffre, pourcentage FROM commerciale C ');
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">GESTION COMMERCIAUX</h1>
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
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=ajout_commercial"> NOUVEAU</a>
                            <B>  <h3> Liste des commerciaux </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date embauche</th>
                                        <th>Telephone </th>
                                        <th>Urgence</th>
                                        <th>Pourcentage</th>
                                        <th>Chiffre Affaire</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $com->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['nom_com']; ?></td>
                                        <td><?php echo $donnees['prenom_com']; ?></td>
                                        <td><?php echo $donnees['date_emb']; ?></td>
                                        <td><?php echo $donnees['tel_com']; ?></td>
                                        <td><?php echo $donnees['tel_urg']; ?></td>
                                        <td class="center"><?php echo $donnees['pourcentage']; ?> %</td>
                                        <td><?php echo $donnees['chiffre']; ?> FCFA</td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-edit" href="#"> Mod</a>
                                            <a class="btn btn-outline btn-success fa fa-money" href="#"> Pay</a>
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


