<?php
$dd="";
$df="";

if (isset($_POST['dated']) && isset($_POST['datef']) && $_POST['dated'] !='' && $_POST['datef'] !='' ) {
     $dd = $_POST['dated'];
     $df = $_POST['datef'];
     
     global $bdd;

   $sql34= "SELECT
V.CODE_VENTE,
V.CODE_ENCAISSEMENT,
P.MONTANT_VENTE,
C.NOM_CLI,
C.PRENOM_CLI,
E.DATE_ENCAISSEMENT,
utilisateur.NOM_USER
FROM
client AS C
LEFT JOIN vente AS V ON V.CODE_CLI = C.CODE_CLI
LEFT JOIN encaissement AS E ON V.CODE_ENCAISSEMENT = E.CODE_ENCAISSEMENT
LEFT JOIN produit_vendu AS P ON P.CODE_VENTE = V.CODE_VENTE ,
utilisateur WHERE E.DATE_ENCAISSEMENT BETWEEN ".$_POST['dated']." AND ".$_POST['datef'] ;
 $req=$bdd->query($sql4);



      }
    $sql= "SELECT
V.CODE_VENTE,
V.CODE_ENCAISSEMENT,
P.MONTANT_VENTE,
C.NOM_CLI,
C.PRENOM_CLI,
E.DATE_ENCAISSEMENT,
utilisateur.NOM_USER
FROM
client AS C
LEFT JOIN vente AS V ON V.CODE_CLI = C.CODE_CLI
LEFT JOIN encaissement AS E ON V.CODE_ENCAISSEMENT = E.CODE_ENCAISSEMENT
LEFT JOIN produit_vendu AS P ON P.CODE_VENTE = V.CODE_VENTE ,
utilisateur";
  $req=$bdd->query($sql);
  }

?>
<div class="row">
                <div class="collg-12">
                    <h1 class="page-header"> Tableau des encaissements</h1>
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
                             <table class="table table-striped table-bordered table-hover">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                             <thead> 
                              <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Operateur</th>
                                        <th>Identifiant de vente</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>    
                                <tbody>
                               <?php  while($donnees = $req->fetch(PDO::FETCH_ASSOC)){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['DATE_ENCAISSEMENT']; ?></td>
                                        <td><?php echo $donnees['NOM_CLI']; ?>
                                        <?php echo $donnees['PRENOM_CLI']; ?></td>
                                        <td><?php echo $donnees['NOM_USER']; ?></td>
                                        <td><?php echo $donnees['CODE_VENTE']; ?></td>
                                        <td><?php echo $donnees['MONTANT_VENTE']; ?></td>
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


