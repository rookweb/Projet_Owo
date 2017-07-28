<?php 
    global $bdd;
    $fournisseurs = $bdd->prepare('SELECT RAISON_SOCIAL,TEL,EMAIL,SOLDE_COMPTE FROM fournisseur');
    $fournisseurs->execute();
    $data=$fournisseurs->fetchAll();
    $four=array()
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Page a revoir --- doit retracer l'historique des regularisations de comptes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des comptes fournisseurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Raison sociale</th>
                                        <th>Telephone 1</th>
                                        <th>Email</th>
                                        <th>Dette</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php foreach ($data as $d){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->RAISON_SOCIAL; ?></td>
                                        <td><?php echo $d->TEL; ?></td>
                                        <td><?php echo $d->EMAIL; ?></td>
                                        <td class="center"><?php echo $d->SOLDE_COMPTE; ?></td>
                                        <td><?php echo 'regle'; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-money" href="#"> Pay</a>
                                            <a class="btn btn-outline btn-success fa fa-edit" href="#"> Mod</a>
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


