<?php 
    $produits = $bdd->query('SELECT designation,nom_forme,code_cip,dci FROM produit P JOIN forme F WHERE F.code_forme = P.code_forme');
?>

      <div class="row">
                <div class="collg-12">
                    <h1 class="page-header">Tableau recapitulatif des mouvements des journees</h1>
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

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Journee de caisse</th>
                                        <th>Type d'operation</th>
                                        <th>Utilisateur</th>
                                        <th>Identifiant</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php while ($donnees = $produits->fetch()){  ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['code_cip']; ?></td>
                                        <td><?php echo $donnees['code_cip']; ?></td>
                                        <td><?php echo $donnees['designation']; ?></td>
                                        <td><?php echo $donnees['dci']; ?></td>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-gear" href="#"></a>
                                            <a class="btn btn-outline btn-success fa fa-times" href="#"></a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"></a>
                                        </td>
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

