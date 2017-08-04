
<?php
if(isset($_GET['searchValue'])){
    $sql= "SELECT * FROM `produit` p WHERE p.dci LIKE '%".$_GET['searchValue']."%'  ORDER BY p.designation";
}else{
    $sql="SELECT * FROM `produit` p ORDER BY p.designation";
}

$sql2 = $sql;

$req = $bdd->query($sql);

if($req->rowCount() > 0){
    ?>
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUITS</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo '<a class="btn btn-outline btn-primary fa fa-print col-md-offset-4"  href="?page=etat_produit&sql='.$sql2.'"' ?>> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=produit"> NOUVEAU</a>

                            <B>  <h3> Liste des produits </h3></B>
                          <!--  <form action="search_traitement.php" method="post">
                                <div class="input-group custom-search-form col-md-4 col-md-offset-4">
                                    <input type="text" name="searchValue" class="form-control" placeholder="Liste par molécule de base...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form> -->
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
                                        <a class="btn btn-outline btn-primary fa fa-edit" href="?page=update_produit&amp;id=<?php echo $data['CODE_PRODUIT']; ?>"> Mod</a>
                                        <a class="btn btn-outline btn-success fa fa-eye" href="#"> Aff</a>
                                        <a class="btn btn-outline btn-warning fa fa-times" href="pages/administration/Produit/script_delete_produit.php?id=<?php echo $data['CODE_PRODUIT']; ?>" onclick = "if (! confirm('Confirmer la suppression?')) return false;"> Sup</a>
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
