<?php
    global $bdd;
    $sql="SELECT
vente.CODE_VENTE,
vente.CODE_ANNULATION,
vente.CODE_JOURNEE,
vente.CODE_CLI,
vente.CODE_ENCAISSEMENT,
vente.CODE_USER,
vente.CODE_BORDEREAU,
vente.DATE_VENTE,
vente.POURCENTAGE
FROM
vente";
    $req=$bdd->querry($sql);

    //$sql1="SELECT* FROM entre"
   // $req1=$bdd->querry($sql1);

    //$sql="SELECT* FROM vente"
    //$req=$bdd->querry($sql);
?>

            <div class="row">
                <div class="collg-12">
                    <h1 class="page-header">Tableau recapitulatif des mouvements</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="container">
                        
                            <form role="form" method="post">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-push-0 text-align-center">
                                                
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date debut" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                            </div>
                                        
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date fin" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                           </div>

                                            <div class="form-group col-lg-4">
                                                <input class="btn btn-outline btn-success btn-sm" type="submit" name="go" id="go" value="valider" />
                                            </div>
                                        </div>
                                    </div>
                              </form>
                            </div >
                         </div>

                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>Type d'operation</th>
                                        <th>Date</th>
                                        <th>responsable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['CODE_VENTE']; ?></td>
                                        <td><?php echo $donnees['CODE_CLI']; ?></td>
                                        <td><?php echo $donnees['DATE_VENTE']; ?></td>
                                        <td><?php echo $donnees['POURCENTAGE']; ?></td>
                                    </tr>
                                     <?php }?>
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                <!-- fin tableau 1 -->


                <!-- tableau 2 -->
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
                         <div class="container">
                            <form role="form" method="post">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-push-0 text-align-center">
                                                
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date debut" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                            </div>
                                        
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date fin" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                           </div>

                                            <div class="form-group col-lg-4">
                                                <input class="btn btn-outline btn-success btn-sm" type="submit" name="go" id="go" value="valider" />
                                            </div>
                                        </div>
                                    </div>
                              </form>
                            </div >
                         </div>
                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>Type d'operation</th>
                                        <th>Date</th>
                                        <th>responsable</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr class="odd gradeX">
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td class="center"><?php echo $donnees['solde_compte']; ?></td>
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
                    <h1 class="page-header">Sortie</h1>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-outline btn-primary fa fa-print" href="#"> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <div class="container">
                        
                            <form role="form" method="post">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-push-0 text-align-center">
                                                
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date debut" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                            </div>
                                        
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date fin" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
                                           </div>

                                            <div class="form-group col-lg-4">
                                                <input class="btn btn-outline btn-success btn-sm" type="submit" name="go" id="go" value="valider" />
                                            </div>
                                        </div>
                                    </div>
                              </form>
                            </div >
                         </div>
                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>Type d'operation</th>
                                        <th>Date</th>
                                        <th>responsable</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr class="odd gradeX">
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td><?php echo 'donnees'; ?></td>
                                        <td class="center"><?php echo $donnees['solde_compte']; ?></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Fin tableau 3-->


                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


