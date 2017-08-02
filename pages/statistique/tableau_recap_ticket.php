<?php
$dd="";
$df="";

if (isset($_POST['dated']) && isset($_POST['datef']) && $_POST['dated'] !='' && $_POST['datef'] !='' ) {
     $dd = $_POST['dated'];
     $df = $_POST['datef'];

  global $bdd;

  $sql2= "SELECT E.CODE_ENCAISSEMENT,J.DATE FROM encaissement E LEFT JOIN journee J ON E.CODE_JOURNEE =J.CODE_JOURNEE 
WHERE J.DATE BETWEEN ".$_POST['dated']." AND ".$_POST['datef'] ;
     $req2= $bdd->query($sql2); 


  }
     $sql= "SELECT E.CODE_ENCAISSEMENT,J.DATE FROM encaissement E LEFT JOIN journee J ON E.CODE_JOURNEE =J.CODE_JOURNEE ORDER BY E.CODE_ENCAISSEMENT";
     $req= $bdd->query($sql); 
?>

            <div class="row">
                <div class="collg-12">
                    <h1 class="page-header">Liste des tickets de caisses</h1>
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
                          <a class="btn btn-outline btn-warning fa fa-plus" href=""> NOUVEAU</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="container">
                            <form role="form" method="post" >
                                    <div class="row">

                                          <input type="text" class="hidden" name="page" value="recap_benefice" />

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

                            <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Date journee</th>
                                        <th>ID encaisseent</th>
                                    </tr>
                                <tbody>
                                <?php 
                                    if (!isset($_POST['go']) || ($_POST['dated'] =='' && $_POST['datef'] =='')) {
                                    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                         <td><?php echo $donnees['DATE']; ?></td>
                                        <td><?php echo $donnees['CODE_ENCAISSEMENT']; ?></td>
                
                                    </tr>
                                <?php } 


                                 }else{
                                     if (!empty($_POST['dated']) && !empty($_POST['datef'])){
                                           
                                     if (isset($req2)) {
                                    while ($donnees2 = $req2->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees2['DATE']; ?></td>
                                        <td><?php echo $donnees2['CODE_ENCAISSEMENT']; ?></td>
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