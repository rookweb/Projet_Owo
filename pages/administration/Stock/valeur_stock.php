<?php
$stock = $bdd->query('SELECT code_cip,designation,dci,prix_vente,qte_stock FROM produit P JOIN stock S  WHERE S.code_produit = P.code_produit');
$total=0;
$cout=0;
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">VALEUR STOCK </h1>
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
                           <B>  <h3>Valeur du stock de la date du <?php echo $datetime = date("d-m-Y")?> </h3></B>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Code CIP</th>
                                        <th>Designation</th>
                                        <th>Prix unitaire</th>
                                        <th>Quantite en stock</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php while ($donnees = $stock->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['code_cip']; ?></td>
                                        <td><?php echo $donnees['designation']; ?></td>
                                        <td><?php echo $donnees['prix_vente']; ?></td>
                                        <td><?php echo $donnees['qte_stock']; ?></td>
                                        <td class="center"><?php
                                            $cout=$donnees['prix_vente']*$donnees['qte_stock'];
                                            echo $cout; ?></td>
                                    </tr>
                                <?php $total+=$cout;
                               }
                               ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th  colspan="4" class="col_num">Total</th>
                                    <th  colspan="1" class="col_num"><?php echo $total; ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


