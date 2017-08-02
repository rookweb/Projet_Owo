<?php 
    global $bdd;
    $id=$_GET['id'];
$clients= $bdd->prepare('SELECT CL.CODE_CLI, CL.TITRE, CL.NOM_CLI, CL.PRENOM_CLI, CL.EMAIL, CL.ADRESSE, CL.TEL1, CL.TEL2, CL.STATUT,CL.TOTAL_DU,CL.CREDIT_MAX,CL.NUM_PIECE,CL.DATE_PIECE, CL.CREDIT_MAX, CL.DELAI_PAIEMENT, CL.REMISE, CL.DROIT_CREDIT, CL.DEPASSEMENT, CM.CODE_COM, CM.NOM_COM, CM.PRENOM_COM FROM client CL JOIN commerciale CM ON CL.CODE_COM=CM.CODE_COM WHERE CL.CODE_CLI=?');
    $clients->execute(array($id));
$data=$clients->fetchAll();
$four=array();

?>

        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ENREGISTREMENT CLIENT</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- /.section des identifiants -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">

                                <form role="form" method="post" action="pages/administration/Client/script_update_client.php">
                                <?php foreach ($data as $d) { ?>
                                    <div class="col-lg-8 col-lg-push-2">
                                        <div class="row">
                                            <div class="form-group">
                                            <input type="hidden" name="memids" value="<?php echo $id; ?>" />
                                                <div class="form-group col-lg-5">
                                                    <label for="titre">Titre</label>
                                                    <input class="form-control"  type="text" id="titre" name="titre" REQUIRED value="<?php echo $d->TITRE; ?>" />

                                                </div>
                                            
                                                <div class="form-group col-lg-5">
                                                    <label for="commercial">Commercial</label>
                                                    <input class="form-control"  type="text" id="commercial" name="commercial" REQUIRED value="<?php echo $d->NOM_COM.' '.$d->PRENOM_COM; ?>"/>
                                                </div> 
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input <?php if ($d->DROIT_CREDIT==1){echo "type='checkbox' name='droit' value='1' checked='' ";} else {echo "type='checkbox' name='droit' value='1'";}; ?>>droit au credit </input>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8 col-lg-push-2">

                                         <div class="form-group col-lg-6" >
                                            <label for="nom">Nom du client</label>
                                            <input class="form-control"  type="text" id="nom" name="nom" REQUIRED  value="<?php echo $d->NOM_CLI; ?>"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="prenom">Prenom du client</label>
                                            <input class="form-control" type="text" id="prenom" name="prenom" REQUIRED value="<?php echo $d->PRENOM_CLI; ?>"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="piece">Type piece </label>
                                            <select  class="form-control"  id="piece" name="piece">
                                            <option value="CNI">CNI</option>
                                            <option value="PP">PASSEPORT</option>
                                            <option value="CE">CARTE ELECTEUR</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="numpiece">Numero Piece</label>
                                            <input type="text" class="form-control "  id="numpiece" name="numpiece" value="<?php echo $d->NUM_PIECE; ?>"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="datep">Date piece </label>
                                            <input type="text" class="form-control datepicker" data-provide="datepicker" placeholder="YYYY/MM/DD" id="datep" name="datep" value="<?php echo $d->DATE_PIECE; ?>"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="calendrar"> </label>
                                            <i class="fa fa-calendar"></i>
                                     </div>

                                    </div> 

                                    <div class="col-lg-8 col-lg-push-2">
                                        <div class="form-group">
                                            <div class="form-group col-lg-6">
                                                <label for="tel1">Telephone 1 </label>
                                                <input class="form-control" id="tel1" name="tel1" REQUIRED value="<?php echo $d->TEL1; ?>"/>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="tel2">Telephone 2</label>
                                                <input class="form-control" id="tel2" name="tel2" value="<?php echo $d->TEL2; ?>">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $d->EMAIL; ?>">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="adresse">Adresse</label>
                                                <input class="form-control" id="adresse" name="adresse" REQUIRED value="<?php echo $d->ADRESSE; ?>"/>
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="credit">Credit maximum (FCFA)</label>
                                                <input class="form-control" id="credit" name="credit" value="<?php echo $d->CREDIT_MAX; ?>">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="remise">Remise (%)</label>
                                                <input class="form-control" id="remise" name="remise" value="<?php echo $d->REMISE; ?>">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="depassement">Depassement (%)</label>
                                                    <input type="text" class="form-control" id="depassement" name="depassement" value="<?php echo $d->DEPASSEMENT; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="delai">Delai(en jours)</label>
                                                    <input type="text" class="form-control" id="delai" name="delai" value="<?php echo $d->DELAI_PAIEMENT; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-lg-8 col-lg-push-2">
                                        <input type="submit" class="btn btn-success col-lg-5" name="update_cli" value="Enregistrer" />
                                        <input type="reset" class="btn btn-danger col-lg-5 col-lg-push-2" value="Annuler" name="reset" />
                                    </div>
                                <?php } ?> 
                                </form>
                            </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                    </div>
                        <!-- /.panel-body -->
                </div>
                    <!-- /.section des prix -->

                    <!-- /.panel -->
            </div>
        
            <!-- /.row -->


    <!-- Custom Theme JavaScript -->

    <script type="text/javascript" src="../../../assets/js/bootstrap-datepicker.min.js"></script>
    <script>
    $(document).ready(function(){
        var date_input=$('input[name="datep"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            language: 'fr',
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>

</body>

</html>