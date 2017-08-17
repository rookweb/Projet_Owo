<?php
global $bdd;
$sql="SELECT client.TITRE,client.NOM_CLI,client.PRENOM_CLI,client.DROIT_CREDIT,client.CREDIT_MAX,client.DELAI_PAIEMENT,client.REMISE,client.TOTAL_DU,client.DEPASSEMENT, operationcompte.SOLDE FROM client ,operationcompte";
$req= $bdd->query($sql);
?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">COMPTE CLIENT</h1>
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
                            <B>  <h3> Liste des comptes clients </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Nom</th>
                                        <th>Credit Max</th>
                                        <th>Delai</th>
                                        <th>Remise</th>
                                        <th>Droit au credit</th>
                                        <th>Solde</th>
                                        <th>Depassement</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['TITRE']; ?></td>
                                        <td><?php echo $donnees['NOM_CLI']; ?>
                                        <?php echo $donnees['PRENOM_CLI']; ?></td>
                                        <td><?php echo $donnees['CREDIT_MAX']; ?> FCFA</td>
                                        <td><?php echo $donnees['DELAI_PAIEMENT']; ?></td>
                                        <td><?php echo $donnees['REMISE']; ?></td>
                                        <td><?php echo $donnees['DROIT_CREDIT']; ?></td>
                                        <td><?php echo $donnees['DEPASSEMENT']; ?></td>
                                        <td><?php echo $donnees['SOLDE']; ?></td>
                                    </tr>
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

