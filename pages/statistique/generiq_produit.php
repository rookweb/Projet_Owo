
<?php

    $sql="SELECT * FROM `produit` p ORDER BY p.designation";

$req = $bdd->query($sql);


if($req->rowCount() > 0){
    ?>
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUITS</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo '<a class="btn btn-outline btn-primary fa fa-print col-md-offset-4"  href="?page=etat_produit&sql='.$sql.'"' ?>> IMPRIMER</a>
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
                                while($data = $req->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                <tr>
                                    <td><?php echo /*utf8_encode(*/$data['CIP']//) ?></td>
                                    <td><?php echo utf8_encode($data['DESIGNATION']) ?></td>
                                    <td><?php echo /*utf8_encode(*/$data['DCI']//) ?></td>
                                    <td><?php echo $data['PRIX_PRODUIT'] ?></td>
                                    <td><?php echo $data['QTE_STOCK'] ?></td>
                                    <td class="center">
                                        <form action="search_traitement.php" method="post">
                                            <input class="hidden" name="dci" value="<?php echo /*utf8_encode(*/$data['DCI']//) ?>">
                                            <button class="btn btn-outline btn-primary fa fa-eye" type="submit" data-toggle="modal" data-target="#myModal"> Produits génériques</button>
                                        </form>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Produits ayants la même molécule que <?php echo $data['DESIGNATION']?> </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <?php
                                                            if (isset($_GET['result'])){
//                                                                var_dump($_GET['result']);
                                                            ?>
                                                            <thead>
                                                            <tr>
                                                                <th>Code CIP</th>
                                                                <th>Designation</th>
                                                                <th>DCI</th>
                                                                <th>Prix</th>
                                                                <th>Quantite</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php

                                                                        while($data2 = explode(";", $_GET['result'])){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo /*utf8_encode(*/$data2[0]//) ?></td>
                                                                    <td><?php echo utf8_encode($data2[1]) ?></td>
                                                                    <td><?php echo /*utf8_encode(*/$data2[2]//) ?></td>
                                                                    <td><?php echo $data2[3] ?></td>
                                                                    <td><?php echo $data2[4] ?></td>

                                                                </tr>
                                                            <?php } ?>


                                                            <?php }else{?>
                                                                <br />
                                                                <center class="ui-state-highlight ui-corner-all">Aucun article n'a été enregistré pour l' instant ...</center>
                                                            <?php }
                                                            ?>


                                                            </tbody>
                                                        </table>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success fa fa-print ">Imprimer</button>
                                                        <button type="button" class="btn btn-danger fa fa-close" data-dismiss="modal">Fermer</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


                                    </td>
                                </tr>
                                <?php } ?>


                                    <?php }else{?>
                                        <br />
                                        <center class="ui-state-highlight ui-corner-all">Aucun article n'a été enregistré pour l' instant ...</center>
                                    <?php }
                                     ?>


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
