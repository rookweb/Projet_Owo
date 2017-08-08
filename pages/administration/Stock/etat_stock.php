<?php 
    $stock = $bdd->query('SELECT p.cip,p.designation,p.dci,p.qte_stock FROM produit p ORDER BY p.designation');
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Stock</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-danger fa fa-file" href="#"> EXPORTER</a>
                            <a class="btn btn-outline btn-success fa fa-times" href="?page=entree_stock"> ENTREE</a>
                            <a class="btn btn-outline btn-warning fa fa-times" href="?page=mise_rebus"> SORTIE</a>
                            <B>  <h3> Liste des produits en stock </h3></B>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Code CIP</th>
                                        <th>Designation</th>
                                        <th>DCI</th>
<!--                                        <th>Prix unitaire</th>-->
                                        <th>Quantite en stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php while ($donnees = $stock->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['cip']; ?></td>
                                        <td><?php echo $donnees['designation']; ?></td>
                                        <td><?php echo $donnees['dci']; ?></td>
<!--                                        <td>--><?php //echo $donnees['prix_vente']; ?><!--</td>-->
                                        <td class="center"><?php echo $donnees['qte_stock']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


