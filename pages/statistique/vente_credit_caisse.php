<?php
$dd="";
$df="";

if (isset($_POST['dated']) && isset($_POST['datef']) && $_POST['dated'] !='' && $_POST['datef'] !='' ) {
     $dd = $_POST['dated'];
     $df = $_POST['datef'];

    global $bdd;

    $sql2="SELECT vente.DATE_VENTE,vente.CODE_VENTE,client.NOM_CLI,client.PRENOM_CLI,operationcompte.SOLDE FROM vente ,client ,operationcompte WHERE vente.DATE_VENTE BETWEEN ".$_POST['dated']." AND ".$_POST['datef'] ;
       $req2= $bdd->query($sql2); 
  }

       $sql="SELECT vente.DATE_VENTE,vente.CODE_VENTE,client.NOM_CLI,client.PRENOM_CLI,operationcompte.SOLDE FROM vente ,client ,operationcompte";
       $req= $bdd->query($sql); 
?>


            <div class="row">
                <div class="collg-12">
                    <h1 class="page-header"> Tableau des ventes à credits</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo '<a class="btn btn-outline btn-primary fa fa-print" href="?page=etat_credit_vente&sql='.$sql.'"' ?>> IMPRIMER</a>
                            <a class="btn btn-outline btn-success fa fa-file" href="#"> EXPORTER</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="container">
                        
                            <form role="form" method="post">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-push-0 text-align-center">
                                                
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date debut" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="dated" name="dated"/>
                                            </div>
                                        
                                            <div class="form-group col-lg-3">
                                                <input type="text" placeholder="Date fin" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datef" name="datef"/>
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
                                       <th>Date</th>
                                        <th>Id vente</th>
                                        <th>Client</th>
                                        <th>Solde compte client</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                  <?php
                                   if (!isset($_POST['go']) || ($_POST['dated'] =='' && $_POST['datef'] =='')) {
                                       while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){  ?>
                                      <tr class="odd gradeX">
                                        <td><?php echo $donnees['DATE_VENTE']; ?></td>
                                        <td><?php echo $donnees['CODE_VENTE']; ?></td>
                                        <td><?php echo $donnees['NOM_CLI']; ?>
                                        <?php echo $donnees['PRENOM_CLI']; ?></td>
                                        <td><?php echo $donnees['SOLDE']; ?></td>
                                    </tr>
                                       <?php } 
                              }else{
                                 if (!empty($_POST['dated']) && !empty($_POST['datef'])){
                                       
                                          if (isset($req2)) {
                                            while ($donnees2 = $req2->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees2['DATE_VENTE']; ?></td>
                                        <td><?php echo $donnees2['CODE_VENTE']; ?></td>
                                        <td><?php echo $donnees2['NOM_CLI']; ?>
                                        <?php echo $donnees2['PRENOM_CLI']; ?></td>
                                        <td><?php echo $donnees2['SOLDE']; ?></td>

                                    </tr>

                                          }
                                         
                                          
                                          <?php }

                                       } 
                                 } 
                              }
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


