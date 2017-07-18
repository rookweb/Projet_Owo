
<!DOCTYPE html>
<html lang="en">

<?php include("pages/include/headerNormal.php"); ?>
<?php include("pages/include/script.php"); ?>
<?php include("pages/include/connexionDB.php"); ?>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CONNECTEZ VOUS A OWO PHARMA</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="post" name="connect">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nom utilisateur" name="Login" type="text" id = "Login" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de Passe" name="Pwd" type="password"  id = "Pwd" value="">
                            </div>
                            <div class="checkbox">
                                <label  >
                                    <input  name="remember" type="checkbox" value="Remember Me">     Se Rappeler </input>
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type ="submit"  name = "Submit" class="btn btn-lg btn-success btn-block" value="Connexion">

                        </fieldset>

                </form>
                    <p style="background: #A6EA30;"align="center" class="titre">
                        <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "login")) { // Affiche l'erreur  ?><strong class="erreur">Echec d'authentification !!! &gt; login ou mot de passe incorrect</strong>
                        <?php } ?>
                        <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "delog")) { // Affiche l'erreur ?><strong class="reussite">Session cl&ocirc;tur&eacute;e avec succ&egrave;s...  <br>
                            A bient&ocirc;t <?php echo $_GET['prenom'];?> !</strong>
                        <?php } ?>
                        <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "intru")) { // Affiche l'erreur ?>
                            <strong  class="erreur"><h3 style="background: #A6EA30; width: 500px;">Echec d'authentification !!! &gt; Aucune session n'est
                                    ouverte ou vous n'avez pas les droits pour afficher cette page</h3></strong>
                        <?php } ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<?php include("pages/include/footerNormal.php"); ?>
<?php include("pages/include/connexionDB.php"); ?>
</body>

</html>
