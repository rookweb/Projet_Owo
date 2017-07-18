<?php

if (isset($_GET['opt'])) {
if ($_GET['opt'] == "mvt_jour" || $_GET['opt'] == "mvt_mens") {//Mouvements
$_SESSION['option']="mvt_mens";
$mvt = 'm';
$typemvt = 'Modification des ventes ';
$requete_v = "SELECT v.code_vente, v.code_cli code_client, s.montant_regle montant_vente, DATE_FORMAT( date_encaissement, '%H : %i : %s' ) heure, DATE_FORMAT( date_encaissement, '%d - %m - %Y' ) date, j.statut
FROM vente v
INNER JOIN mouvement m ON v.code_vente = m.code_vente
INNER JOIN journee j ON j.date = v.date_vente
INNER JOIN encaissement e ON e.code_vente = v.code_vente
INNER JOIN espece s ON s.code_encaissement = e.code_encaissement WHERE";

$requete_e = "SELECT v.code_vente, v.code_cli code_client, s.montant_regle montant_vente, DATE_FORMAT( date_encaissement, '%H : %i : %s' ) heure, DATE_FORMAT( date_encaissement, '%d - %m - %Y' ) date, j.statut
FROM vente v
INNER JOIN mouvement m ON v.code_vente = m.code_vente
INNER JOIN journee j ON j.date = v.date_vente
INNER JOIN encaissement e ON e.code_vente = v.code_vente
INNER JOIN espece s ON s.code_encaissement = e.code_encaissement
WHERE";

$req0="SELECT date FROM journee WHERE statut=0 ";
$res0=mysql_query($req0);
$dt="01-01-1900";
while($dat=mysql_fetch_array($res0))
{
    $dt = $dat['date'];
}
if ($_GET['opt'] == "mvt_jour") {
    $_SESSION['option']="mvt_jour";
    $typemvt .= 'de la journée';
    $mvt = 'j';
    $requete_v .= "DATE(date) = '".$dt."' ";
    $requete_e .= "DATE(date) = '".$dt."' ";
} else {
    $typemvt .= 'du mois';
    $requete_v .= "MONTH(date) = MONTH('".$dt."')";
    $requete_e .= "MONTH(date) = MONTH('".$dt."')";
}
echo "<p style='text-align: center;font-size: 35px;font-weight: bold;color: white;'>" . $typemvt . "<br /><hr /></p>";
$requete_v .= " ORDER BY ID DESC";
$requete_e .= " ORDER BY ID DESC";
$req = $bdd->query($requete_v);
if ($req->rowCount() > 0) {
    ?>
    <?php
} else {
    ?>
    <br />
    <center class="ui-state-highlight ui-corner-all">Aucun mouvement lié aux ventes n' est enregistré pour l' instant ...</center>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste des ventes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des ventes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Vendeur</th>
                                        <th>Type</th>
                                        <th>Produit</th>
                                        <th>Quantite</th>
                                        <th>Client</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                                <?php
                                $i = 0;
                                while ($data = $req->fetch()) {
                                    $i++;
                                    $rq = $bdd->prepare('SELECT nom_cli, prenom_cli FROM client WHERE code_cli=?');
                                    $rq->execute(array((int) $data['code_client']));
                                    $rq = $rq->fetch();
                                    $data['nom_client'] = $rq['nom']; //Nom du client
                                    $rq = $bdd->prepare('SELECT p_v.code_produit,designation,nb_vendu quantite,total_vendu FROM produit_vendu p_v INNER JOIN produit p ON p_v.code_produit = p.code_produit WHERE p_v.code_vente = ?');
                                    $rq->execute(array((int) $data['ID']));
                                    $n = $rq->rowCount();
                                    $contenu = '<tr class="ligne_' . $i % 2 . '"><td rowspan="' . $n . '" class="bordure_droite col_num" >' . $data['ID'] . '</td><td rowspan="' . $n . '" class="bordure_droite">' . $data['nom_client'] . '</td>';
                                    $donnee = $rq->fetch();
                                    if($data['statut']!=2)
                                    {
                                        $contenu .= '<td>' . $donnee['nom_article'] . '</td><td style="bordure_gauche">' . $donnee['quantite'] . '</td><td class="bordure_gauche">' . $donnee['total_vendu'] . '</td><td style="bordure_gauche">' . '<a href="update-vente.php?code_vente='. $data['code_vente'] .'&code_produit=' . $donnee['code_produit'].'&designation=' . $donnee['designation'] . '&quantite=' . $donnee['quantite'] . '&total_vendu=' . $donnee['total_vendu'] . '&nom_cli=' . $data['nom_cli'].'&montant_regle=' . $data['montant_regle']. '" ><input type="submit" value="Modifier article" name="submit" id="submit"/></a>' . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['total_vente'] . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['heure'] . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['date'] . '</td><form method="post" action="../view_facture.php"><td rowspan="'.$n.'" class="bordure_gauche"><input type="submit" value="Facture" name="fact'.$data['code_vente'].'" id="submit"/></td></form></tr>';
                                        while ($donnee = $rq->fetch()) {
                                            $contenu .= '<tr class="ligne_' . $i % 2 . '"><td>' . $donnee['code_produit'] . '</td><td class="bordure_gauche">' . $donnee['quantite'] . '</td><td class="bordure_gauche">' . $donnee['total_vendu'] . '</td><td class="bordure_gauche">' . '<a href="update-vente.php?id-vente='. $data['code_vente'] .'&code_produit=' . $donnee['code_produit'].'&designation=' . $donnee['designation'] . '&quantite=' . $donnee['quantite'] . '&total_vendu=' . $donnee['total_vendu'] . '&nom_cli=' . $data['nom_cli'].'&montant_regle=' . $data['montant_regle']. '" ><input type="submit" value="Modifier article" name="submit" id="submit"/></a>' . '</td></tr>';
                                        }
                                    }
                                    else
                                    {
                                        $contenu .= '<td>' . $donnee['designation'] . '</td><td style="bordure_gauche">' . $donnee['quantite'] . '</td><td class="bordure_gauche">' . $donnee['total_vendu'] . '</td><td style="bordure_gauche">' . '<a href="update-vente.php?id-vente='. $data['code_vente'] .'&designation=' . $donnee['designation'] . '&quantite=' . $donnee['quantite'] . '&total_vendu=' . $donnee['total_vendu'] . '&nom_cli=' . $data['nom_cli'].'&montant_regle=' . $data['montant_regle']. '" ></a>' . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['montant_regle'] . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['heure'] . '</td><td rowspan="' . $n . '" class="bordure_gauche">' . $data['date'] . '</td><form method="post" action="../view_facture.php"><td rowspan="'.$n.'" class="bordure_gauche"><input type="submit" value="Facture" name="fact'.$data['ID'].'" id="submit"/></td></form></tr>';
                                        while ($donnee = $rq->fetch()) {
                                            $contenu .= '<tr class="ligne_' . $i % 2 . '"><td>' . $donnee['designation'] . '</td><td class="bordure_gauche">' . $donnee['quantite'] . '</td><td class="bordure_gauche">' . $donnee['total_vendu'] . '</td><td class="bordure_gauche">' . '<a href="update-vente.php?code_vente='. $data['code_vente'] .'&designation=' . $donnee['designation'] . '&quantite=' . $donnee['quantite'] . '&total_vendu=' . $donnee['total_vendu'] . '&nom_cli=' . $data['nom_cli'].'&montant_regle=' . $data['montant_regle']. '" ></a>' . '</td>';
                                        }
                                    }
                                    echo $contenu;
                                }
                                ?>
                                        <td class="center">
                                            <a class="btn btn-outline btn-primary fa fa-gear" href="#"></a>
                                            <a class="btn btn-outline btn-success fa fa-times" href="#"></a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="#"></a>
                                        </td>
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


<?php } ?>
<?php } ?>
