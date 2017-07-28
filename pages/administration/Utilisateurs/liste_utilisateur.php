<?php 
    global $bdd;
    $utilisateur = $bdd->prepare('SELECT NOM_USER,PRENOM_USER,LOGIN,STATUT,DESIGNATION,DATE_ENREGISTREMENT FROM utilisateur U JOIN privileges P WHERE U.code_privilege = P.code_privilege');
    $utilisateur->execute();
    $data=$utilisateur->fetchAll();
    $user=array()
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
                               <?php foreach ($data as $d){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->NOM_USER; ?></td>
                                        <td><?php echo $d->PRENOM_USER; ?></td>
                                        <td><?php echo $d->LOGIN; ?></td>
                                        <td class="center"><?php echo $d->DESIGNATION; ?></td>
                                        <td><?php echo $d->DATE_ENREGISTREMENT; ?></td>

                                        <td class="center"><?php if($d->STATUT == 0){echo "Actif";} else {echo "Desactiver";} ?></td>
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


