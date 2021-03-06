<?php
    global $bdd;
$commerciale= $bdd->prepare('SELECT code_com,nom_com,prenom_com,date_emb,tel_com, tel_urg, chiffre, pourcentage FROM commerciale');
$commerciale->execute();
$data=$commerciale->fetchAll();
$four=array();
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
                               <?php foreach ($data as $d){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->nom_com; ?></td>
                                        <td><?php echo $d->prenom_com; ?></td>
                                        <td><?php echo $d->date_emb; ?></td>
                                        <td><?php echo $d->tel_com; ?></td>
                                        <td><?php echo $d->tel_urg; ?></td>
                                        <td><?php echo $d->pourcentage; ?></td>
                                        <td><?php echo $d->chiffre; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-edit" href="?page=update_commercial&amp;id=<?php echo $d->code_com; ?>"> Mod</a>
                                            <a class="btn btn-outline btn-success fa fa-money"  href="#"> Pay</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="pages/administration/commercial/script_delete_commerciale.php?id=<?php echo $d->code_com; ?>" onclick = "if (! confirm('Confirmer la suppression?')) return false;"> Sup</a>
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


