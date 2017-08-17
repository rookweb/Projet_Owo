<?php
 $dd="";
$df="";

if (isset($_POST['dated']) && isset($_POST['datef']) && $_POST['dated'] !='' && $_POST['datef'] !='' ) {
     $dd = $_POST['dated'];
     $df = $_POST['datef'];

  global $bdd;

  $sql2= "SELECT D.CODE_DEPENSE,D.OBJET,U.LOGIN,D.DATE,D.MONTANT FROM depense D LEFT JOIN utilisateur U ON D.CODE_USER=U.CODE_USER WHERE D.DATE BETWEEN ".$_POST['dated']." AND ".$_POST['datef'] ;
     $req2= $bdd->query($sql2); 


  }
     $sql="SELECT D.CODE_DEPENSE,D.OBJET,U.LOGIN,D.DATE,D.MONTANT,M.DESCRIPTION FROM sortie AS S, depense AS D LEFT JOIN utilisateur U ON D.CODE_USER=U.CODE_USER LEFT JOIN Motif AS  M ON M.CODE_MOTIF=S.CODE_MOTIF ORDER BY D.CODE_DEPENSE ";
     $req= $bdd->query($sql); 
?>
<div class="row">
                <div class="collg-12">
                    <h1 class="page-header"> Tableau des sorties de caisse</h1>
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
                          <div class="container">
                            <form role="form" method="post" >
                            
                                          <input type="text" class="hidden" name="page" value="recap_benefice" />

                                           <div class="col-lg-8 col-lg-push-0 text-align-center">
                                                
                                            <div class="form-group col-lg-5">
                                                <label for="date"> Date debut: </label>
                                                <input type="text" placeholder="Date debut" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="dated" name="dated"/>
                                            </div>
                                        
                                            <div class="form-group col-lg-5">
                                              <label for="date"> Date fin: </label>
                                                <input type="text" placeholder="Date fin" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datef" name="datef"/>
                                           </div>

                                            <div class="form-group col-lg-0" style="padding-top:2em;">
                                                <input class="btn btn-outline btn-success btn-sm" type="submit" name="go" id="go" value="valider" />
                                            </div>
                                        </div>
                                    </div>
                              </form>
                            </div >
                            <hr style="border-top: 0.2em solid black; padding-bottom: 0.5em;" width="80%" />

                             <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                             <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Auteur</th>
                                        <th>responble ouverture journee</th>
                                         <th>responble fermeture journee</th>
                                        <th>Motif</th>                                                                              
                                        <th>Montant</th>
                                    </tr>
                                </thead>    
                                <tbody>
                            <tbody>
                               <?php 
                                    if (!isset($_POST['go']) || ($_POST['dated'] =='' && $_POST['datef'] =='')) {
                                    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['DATE']; ?></td>
                                        <td><?php echo $donnees['CODE_USER']; ?></td>
                                        <td><?php echo $donnees['CODE_USER_OUVRIR']; ?></td>
                                        <td><?php echo $donnees['CODE_USER_FERMER']; ?></td>
                                        <td><?php echo $donnees['DESCRIPTION']; ?></td>
                                        <td><?php echo $donnees['MONTANT']; ?></td>
                                    </tr>
                                <?php } 


                                 }else{
                                     if (!empty($_POST['dated']) && !empty($_POST['datef'])){
                                           
                                     if (isset($req2)) {
                                    while ($donnees2 = $req2->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['DATE']; ?></td>
                                        <td><?php echo $donnees['CODE_USER']; ?></td>
                                        <td><?php echo $donnees['CODE_USER_OUVRIR']; ?></td>
                                        <td><?php echo $donnees['CODE_USER_FERMER']; ?></td>
                                        <td><?php echo $donnees['MONTANT']; ?></td>
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
