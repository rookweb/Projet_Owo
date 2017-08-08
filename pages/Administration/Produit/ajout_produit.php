<?php
include("/pages/include/connexionDB.php");

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
          <li class="active"><a data-toggle="tab" href="#tab1" >Les identifiants</a></li>
          <li><a data-toggle="tab" href="#tab2" >Informations</a></li>
          <li><a data-toggle="tab" href="#tab3" >Prix</a></li>
          <li><a data-toggle="tab" href="#tab4" >Autre</a></li>
        </ul>

        <div class="panel-body">
            <form role="form" method="post" action="pages/administration/Produit/script_ajout_new.php" name="insert_produit">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                    <?php
                                global $bdd;
                                    $localisation= $bdd->prepare('SELECT CODE_FAMILLE,NOM_FAMILLE FROM famille_produit');
                                    $localisation->execute();
                                    $data=$localisation->fetchAll();
                                    $four=array();
                            ?>
                        <div class="col-lg-12">
                        <h1>les identifiants</h1>
                        
                            <div class="row">
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
                                <div class="form-group col-lg-4">
                                    <label for="cip">CIP</label>
                                    <input class="form-control" id="cip" name="cip">
                                </div>
                                <div class="form-group col-lg-3 col-xm-2">
                                    <label for="barre">Barre</label>
                                    <input class="form-control" id="barre" name="barre">
                                </div>
                                <div class="form-group col-lg-1 col-xm-2">
                                <br/>
                                    <a class="btn btn-primary"  href="#" >lire</a>
                                </div>
                               <!--  <div class="form-group col-lg-4 col-xm-2">
                                    <label for="interne">Interne</label>
                                    <input class="form-control" id="interne" name="interne">
                                </div> -->
                                <div class="form-group col-lg-4 col-xm-2">
                                    <label for="famille">Famille</label>
                                    <select class="form-control" id="famille" name="famille">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_FAMILLE.'">';

                                        echo $d->NOM_FAMILLE;

                                        echo '</option>';
                                    } ?>
                                </select> 
                                </div>

                                <div class="form-group col-lg-4 col-xm-2" style="padding-top: 1.8em;">
                                    <a class="btn btn-primary" role="tab" data-toggle="tab" href="#tab2" >suivant</a>
                                </div>
                            </div>  
                        </div>
                        <!--
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
                        -->
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
                            <br/>
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
                                    <label for="taux_tva">Taux TVA</label>
                                    <input class="form-control" type="text" id="taux_tva" name="taux_tva">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="achat">Prix d'achat</label>
                                    <input class="form-control" type="text" id="achat" name="achat">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="coef">Coeficient</label>
                                    <input class="form-control" type="text" id="coef" name="coef" onblur="calculPrix();">
                                </div>
                                <div class="form-group col-lg-6 col-xm-2">
                                    <label for="vente">Prix de vente</label>
                                    <input class="form-control" type="text" id="vente" name="vente" />
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
                                <?php
                                global $bdd;
                                    $labo= $bdd->prepare('SELECT CODE_LAB,NOM_LABORATOIRE FROM laboratoire');
                                    $labo->execute();
                                    $data=$labo->fetchAll();
                                    $four=array();
                                ?>
                            <div class="form-group col-lg-4">
                                <label for="laboratoire">Laboratoire</label>
                                <select class="form-control" id="laboratoire" name="laboratoire">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_LAB.'">';

                                        echo $d->NOM_LABORATOIRE;

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <?php
                                global $bdd;
                                    $localisation= $bdd->prepare('SELECT CODE_LOCALISATION,NOM_LOCALISATION FROM localisation');
                                    $localisation->execute();
                                    $data=$localisation->fetchAll();
                                    $four=array();
                            ?>
                            <div class="form-group col-lg-4">
                                <label for="localisation">Localisation</label>
                                <select class="form-control" id="localisation" name="localisation">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_LOCALISATION.'">';

                                                echo $d->NOM_LOCALISATION;

                                        echo '</option>';
                                     } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                            <?php
                                global $bdd;
                                    $exploitant= $bdd->prepare('SELECT CODE_EXPLOITANT,LIBELLE FROM exploitant');
                                    $exploitant->execute();
                                    $data=$exploitant->fetchAll();
                                    $four=array();
                                ?>
                                <label for="exploitant">Exploitant</label>
                                <select class="form-control" id="exploitant" name="exploitant">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_EXPLOITANT.'">';

                                        echo $d->LIBELLE;

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                            <?php
                                global $bdd;
                                    $classe= $bdd->prepare('SELECT CODE_CLASSE,DESCRIPTION FROM classe_produit');
                                    $classe->execute();
                                    $data=$classe->fetchAll();
                                    $four=array();
                                ?>
                                <label for="classe">Classe</label>
                                <select class="form-control" id="classe" name="classe">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_CLASSE.'">';

                                        echo $d->DESCRIPTION;

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                            <?php
                                global $bdd;
                                    $specialite= $bdd->prepare('SELECT CODE_SPECIALITE,NOM_SPECIALITE FROM specialite');
                                    $specialite->execute();
                                    $data=$specialite->fetchAll();
                                    $four=array();
                                ?>
                                <label for="specialite">Specialite</label>
                                <select class="form-control" id="specialite" name="specialite">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_SPECIALITE.'">';

                                        echo $d->NOM_SPECIALITE;

                                        echo '</option>';
                                    } ?>
                                </select> 
                            </div>
                            <div class="form-group col-lg-4">
                            <?php
                                global $bdd;
                                    $forme= $bdd->prepare('SELECT CODE_FORME,NOM_FORME FROM forme');
                                    $forme->execute();
                                    $data=$forme->fetchAll();
                                    $four=array();
                                ?>
                                <label for="forme">Forme</label>
                                <select class="form-control" id="forme" name="forme">
                                    <?php foreach ($data as $d) {
                                        echo '<option value="'.$d->CODE_FORME.'">';

                                        echo $d->NOM_FORME;

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
    
       function calculPrix() {

        var tva=document.insert_produit.taux_tva.value;
        var pa=document.insert_produit.achat.value;
        var coef=document.insert_produit.coef.value;
        var pv=(pa*coef)+(pa*tva);

        if (document.getElementById('tva').checked == true){
            var pv=(pa*coef)+(pa*tva);
        }
        else{
            var pv=(pa*coef);
        }

        document.insert_produit.vente.value=pv;
       }
   
</script>
