
<?php
try {
    $journee = $bdd->prepare('SELECT * FROM journee ORDER BY code_journee DESC LIMIT 0, 30');
    $journee->execute(array());
} catch (Exception $e) {
    // En cas d'erreur précédemment, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['go'])) {

    try{
        $reqm=$bdd->query("SELECT COUNT(code_journee) AS nombre FROM journee WHERE date='".$_POST['date']."' ");
        $doms=$reqm->fetch();
        if($doms['nombre']==0){
            $reqt=$bdd->query("SELECT COUNT(code_journee) AS nombre2 FROM journee WHERE statut = 0");
            $domas=$reqt->fetch();
            if($domas['nombre2']==0){
                $req= $bdd->prepare('INSERT INTO journee(date, date_ouverture) VALUES(:date, :date_ouverture)');
                $req->execute(array ('date'=>(htmlspecialchars($_POST['date'])),'date_ouverture'=>(htmlspecialchars($_POST['date_ouverture']))));
                ?><script > alert('Ouverture réussie ') </script><?php
            }else{
                ?><script > alert('Une journée est deja ouverte, Fermez la avant toute autre opération ') </script><?php
            }
        }else{
            ?>
            <script > alert('Cette journée est deja ouverte ') </script>
        <?php }
    } catch (Exception $ex) {
        die('Erreur date : '.$e->getMessage());
    }
}

?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Bonjour! Merci de cliquer sur le bouton pour ouvrir la journee</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">

                            <table class="table table-striped table-bordered table-hover">
                                <thead >
                                <div>
                                    <center><h3> OUVERTURE DE JOURNEE</h3></center>
                                </div>

                                </thead>
                                <?php
                                $req4=$bdd->query("SELECT ADDDATE(MAX(date),INTERVAL 1 DAY) as dates FROM journee ");

                             while($dat4=$req4->fetch()) {
                                ?>
                                <tbody>
                                <tr>
									<th><label for="date"> Date : </label></th>
									<td><input type="text" name="date" id="date"
                                            value="<?php echo $dat4['dates'];
											} ?>" readonly="readonly"/>
											</td>
							     </tr>
                                <tr><th><label for="date_ouverture"> Date Ouverture: </label></th>
                                    <td><input type="text" name="date_ouverture" id="date_ouverture"
                                               value="<?php
                                               $datetime = date("Y-m-d      H:i:s");echo $datetime;?>" readonly="readonly"/></td></tr>
                                </tbody>
                            </table>
                            <td height="50" colspan="2"><div align="center"><br/>
                                    <input class="btn btn-outline btn-success" type="submit" name="go" id="go" value="Ouvrir" />
                                    <input class="btn btn-outline btn-warning" type="reset" name="reini" id="reini" value="Reinitialiser le formulaire" />
                                </div></td>

                        </form>

                    </div>
                </div>

                            <div class="col-lg-12">
                                <h1 class="page-header">Liste des Journees de caisse</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Liste des Journees
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>Journee</th>
                                                <th>Date ouverture</th>
                                                <th>Date fermeture</th>
                                                <th>Date cloture</th>
                                                <th>Operateur</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                            <?php while ($donnees = $journee->fetch()){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $donnees['date']; ?></td>
                                                    <td><?php echo $donnees['date_ouverture']; ?></td>
                                                    <td><?php echo $donnees['date_fermeture']; ?></td>
                                                    <td><?php echo $donnees['date_cloture']; ?></td>
                                                    <td><?php echo $donnees['code_user']; ?></td>
                                                    <td><?php echo $donnees['statut']; ?></td>
                                                    <td class="center">
                                                        <a class="btn btn-outline btn-warning fa fa-times" href="#"> Arret</a>
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



        </div>
