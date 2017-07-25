
<?php
$sql="SELECT * FROM `produit` p INNER JOIN stock s ON p.code_produit = s.code_produit ORDER BY p.designation";
$req = $bdd->query($sql);
if($req->rowCount() > 0)
    ?>
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUITS</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="?page=etat_produit"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                            <B>  <h3> Liste des produits </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Code CIP</th>
                                        <th>Designation</th>
                                        <th>DCI</th>
                                        <th>Prix</th>
                                        <th>Quantite</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($data = $req->fetch()){
                                ?>
                                <tr>
                                    <td><?php echo /*utf8_encode(*/$data['code_cip']//) ?></td>
                                    <td><?php echo utf8_encode($data['designation']) ?></td>
                                    <td><?php echo /*utf8_encode(*/$data['dci']//) ?></td>
                                    <td><?php echo $data['prix_vente'] ?></td>
                                    <td><?php echo $data['qte_stock'] ?></td>
                                    <td class="center">
                                        <a class="btn btn-outline btn-primary fa fa-edit" href="#"> Mod</a>
                                        <a class="btn btn-outline btn-success fa fa-eye" href="#"> Aff</a>
                                        <a class="btn btn-outline btn-warning fa fa-times" href="#"> Sup</a>
                                    </td>
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
            </div>
