<?php
include("/pages/include/connexionDB.php");
$labo=$bdd->query('SELECT code_lab,nom_laboratoire FROM laboratoire');
$classe=$bdd->query('SELECT code_classe,description FROM classe_produit');
$exploitant = $bdd->query('SELECT code_exploitant,libelle FROM exploitant');
$specialite=$bdd->query('SELECT code_specialite,nom_specialite FROM specialite');
$localisation=$bdd->query('SELECT code_localisation,nom_localisation FROM localisation');
$forme = $bdd->query('SELECT code_forme,nom_forme FROM forme');
 /*$tva = $_POST['tva'] =0; 
 $achat =  $_POST['achat']=0; 
 $coef = $_POST['coef']=0; 
 $reduction = $_POST['reduction']=0;*/
 $vente=0;
?>

<?php

    if(!empty($_POST['pv'])){
        if($Auth->vente($_POST['pv'])){
            $vente=vente($_POST['pv']);
            header("Location:?page=produit");

        }else { ?>
            <script type="text/javascript">
                alert('Le Login ou le mot de passe est incorrect! \n veuillez re-essayer s\'il vous plait');
            </script>
       <?php }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">ENREGISTREMENT PRODUIT</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

                    <!-- /.section des identifiants -->
<div class="panel panel-default">
    
    <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Programme</a></li>
          <li><a href="#tab2" data-toggle="tab">Public</a></li>
          <li><a href="#tab3" data-toggle="tab">Objectifs</a></li>
          <li><a href="#tab4" data-toggle="tab">En complément</a></li>
        </ul>

        <div class="panel-body">
            <form role="form" method="post" action="pages/administration/Produit/script_ajout.php">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                        <div class="col-lg-8">
                        <h1>les identifiants</h1>
                        <h3>Les codes</h3>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="cip">CIP</label>
                                    <input class="form-control" id="cip" name="cip">
                                </div>
                                <div class="form-group col-lg-4 col-xm-2">
                                    <label for="barre">Barre</label>
                                    <input class="form-control" id="barre" name="barre">
                                </div>
                                <div class="form-group col-lg-4 col-xm-2">
                                    <label for="interne">Interne</label>
                                    <input class="form-control" id="interne" name="interne">
                                </div>
                                <div class="form-group col-lg-4 col-xm-2">
                                    <a class="btn btn-primary" role="tab" data-toggle="tab2" href="#tab2" >suivant</a>
                                </div>
                            </div>   
                        </div>
                        <div class="col-lg-3">
                            <h3>La photo</h3>
                            <div class="form-group">
                            <br/>
                                <textarea class="form-control" rows="4" id="photo"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">File input</label>
                                <input type="file" id="photo" name="photo">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab2">

                        <div class="col-lg-10">
                                        
                            <h1>Informations</h1>
                            <div class="form-group col-lg-6">
                                <label for="dci">Denomination Commune Internatioanl</label>
                                <input class="form-control" id="dci" name="dci">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="designation">Designation</label>
                                <input class="form-control" id="designation" name="designation">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="commercialisation">Date commercialisation</label>
                                <input type="text" class="form-control mydatepicker"  data-provide="datepicker" placeholder="DD/MM/YYY" id="commercialisation" name="commercialisation"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="peremption">Date peremption</label>
                                <input type="text" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYY" id="peremption" name="peremption"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="enregistrement">Date enregistrement</label>
                                <input class="form-control datepicker" data-provide="datepicker" id="enregistrement" name="enregistrement" placeholder="DD/MM/YYY" type="text"/>
                            </div>

                            <div class="form-group col-lg-6">
                                <a class="btn btn-primary col-lg-12" role="tab" data-toggle="tab" href="#tab3" >suivant</a>
                            </div>
                        </div> 
                    </div>

                    <div class="tab-pane" id="tab3">

                        <div class="col-lg-8">
                            
                        <h1>Prix</h1>
                            
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="tva" name="tva">Soumis a la TVA
                                    </label>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="tva">Taux TVA</label>
                                    <input class="form-control" type="number" min="0" max="100" id="tva" name="tva">

                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="achat">Prix d'achat</label>
                                    <input class="form-control" type="number" id="achat" name="achat">
                                    
                                </div>
                                <div class="form-group col-lg-6 col-xm-2">
                                    <label for="coef">Coeficient</label>
                                    <input class="form-control" type="number" id="coef" name="coef">

                                </div>
                                <div class="form-group col-lg-6 col-xm-2">
                                    <label for="reduction">Reduction</label>
                                    <input class="form-control" type="number" id="reduction" name="reduction">

                                </div>
                                
                                <div class="form-group col-lg-6 col-xm-2">
                                    <label for="vente">Prix de vente</label>
                                    <input class="form-control" id="vente" name="vente" value = "<?php echo $vente;?>"  readonly/>
                                </div>
                                <div class="form-group col-lg-6 col-xm-2">
                                    <label for="pv">Lancer le calcul du Prix de vente</label>
                                    <button type="submit" class="btn btn-primary col-lg-5" name="pv">Calculer</button>
                                    
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <a class="btn btn-primary col-lg-12" role="tab" data-toggle="tab" href="#tab4" >suivant</a>
                            </div>
                        </div> 

                        
                    </div>

                    <div class="tab-pane" id="tab4">

                        <div class="col-lg-11">
                            <h1 class="text-center">Autres informations</h1>
                                
                            <div class="form-group col-lg-4">
                                <label for="laboratoire">Laboratoire</label>
                                <select class="form-control" id="laboratoire" name="laboratoire">
                                    <?php while ($donnees = $labo->fetch()){
                                        echo '<option value="'.$donnees['code_lab'].'">';

                                        echo $donnees['nom_laboratoire'];

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="localisation">Localisation</label>
                                <select class="form-control" id="localisation" name="localisation">
                                    <?php while ($donnees = $localisation->fetch()){
                                        echo '<option value="'.$donnees['code_localisation'].'">';

                                                echo $donnees['nom_localisation'];

                                        echo '</option>';
                                     } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="exploitant">Exploitant</label>
                                <select class="form-control" id="exploitant" name="exploitant">
                                    <?php while ($donnees = $exploitant->fetch()){
                                        echo '<option value="'.$donnees['code_exploitant'].'">';

                                        echo $donnees['libelle'];

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="classe">Classe</label>
                                <select class="form-control" id="classe" name="classe">
                                    <?php while ($donnees = $classe->fetch()){
                                        echo '<option value="'.$donnees['code_clas'].'">';

                                        echo $donnees['description'];

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="specialite">Specialite</label>
                                <select class="form-control" id="specialite" name="specialite">
                                    <?php while ($donnees = $specialite->fetch()){
                                        echo '<option value="'.$donnees['code_specialite'].'">';

                                        echo $donnees['nom_specialite'];

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="forme">Forme</label>
                                <select class="form-control" id="forme" name="forme">
                                    <?php while ($donnees = $forme->fetch()){
                                        echo '<option value="'.$donnees['code_forme'].'">';

                                        echo $donnees['nom_forme'];

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>      
                        </div>
                        <div class="col-lg-9 col-lg-push-1">
                            <button type="submit" class="btn btn-success col-lg-5" name="addprod">Enregistrer le produit</button>
                            <button type="reset" class="btn btn-danger col-lg-5 col-lg-push-2">Annuler l'enregistrement</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>     
</div>




<!-- DES FONCTIONS POUR LA GESTION DES TABS -->

<script type="text/javascript">
    
        var element = document.getElementById('tab1');
        element.onclick = function() {
            var clas1 = tab1.getAttribute('class');
            element.setAttribute('clas1', 'tab-pane'); 
};
   
</script>
