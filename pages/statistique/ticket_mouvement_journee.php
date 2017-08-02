<?php 
   // $produits = $bdd->query('SELECT designation,code_forme,code_cip,dci FROM produit P JOIN forme F WHERE F.code_forme = P.code_forme');
      $produits = $bdd->query('SELECT* FROM produit');
?>

      <div class="row">
                <div class="collg-12">
                    <h1 class="page-header">Encaissement</h1>
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
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                   <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Operateur</th>
                                        <th>Identifiant de vente</th>
                                        <th>Montant</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $produits->fetch()){  ?>
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
            <!-- fin tableau 1 -->

                           <!-- tableau 2 -->
                <div class="collg-12">
                    <h1 class="page-header">Sortie de caisse</h1>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <form role="form" method="post">
                                <div class="col-lg-8">
                                    <div class="form-group col-lg-6">
                                        <label for="date"> Periode: </label>
                                        <input type="date" name="periode_1" id="periode_1">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="periode_2" id="periode_2">
                                    </div>
                                        <input class="btn btn-outline btn-success" type="submit" name="go" id="go" value="Ouvrir" />
                                </div>
                        </form>

                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                  <tr>
                                        <th>Date journee</th>
                                         <th>Heure</th>
                                        <th>Auteur</th>
                                        <th>Motif</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr class="odd gradeX">
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Fin tableau 2 -->



                           <!-- tableau 3 -->
                <div class="collg-12">
                    <h1 class="page-header">Entree</h1>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <form role="form" method="post">
                                <div class="col-lg-8">
                                    <div class="form-group col-lg-6">
                                        <label for="date"> Periode: </label>
                                        <input type="date" name="periode_1" id="periode_1">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="periode_2" id="periode_2">
                                    </div>
                                        <input class="btn btn-outline btn-success" type="submit" name="go" id="go" value="Ouvrir" />
                                </div>
                        </form>

                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                  <tr>
                                        <th>Code CIP</th>
                                        <th>Designation</th>
                                        <th>DCI</th>
                                        <th>Forme</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr class="odd gradeX">
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Fin tableau 3-->

                                      <!-- tableau 4 -->
                <div class="collg-12">
                    <h1 class="page-header">Mis en rebus</h1>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <form role="form" method="post">
                                <div class="col-lg-8">
                                    <div class="form-group col-lg-6">
                                        <label for="date"> Periode: </label>
                                        <input type="date" name="periode_1" id="periode_1">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="periode_2" id="periode_2">
                                    </div>
                                        <input class="btn btn-outline btn-success" type="submit" name="go" id="go" value="Ouvrir" />
                                </div>
                        </form>

                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                  <tr>
                                        <th>Code CIP</th>
                                        <th>Designation</th>
                                        <th>DCI</th>
                                        <th>Forme</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr class="odd gradeX">
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Fin tableau 4-->


