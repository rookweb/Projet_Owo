
        
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

                                <form role="form" method="post" action="pages/administration/Client/script_ajout_client.php">

                                    <div class="col-lg-8 col-lg-push-2">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="titre">Titre</label>
                                                    <select class="form-control" id="titre" name="titre">
                                                        <option value="Mr">Monsieur</option>
                                                        <option value="Mme">Madame</option>
                                                        <option value="Dle">Demoiselle</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-lg-push-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name = "droit" value="1">droit au credit </input>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8 col-lg-push-2">

                                         <div class="form-group col-lg-6" >
                                            <label for="nom">Nom du client</label>
                                            <input class="form-control"  type="text" id="nom" name="nom" REQUIRED/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="prenom">Prenom du client</label>
                                            <input class="form-control" type="text" id="prenom" name="prenom" REQUIRED/>
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
                                            <input type="text" class="form-control "  id="numpiece" name="numpiece"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="datep">Date piece </label>
                                            <input type="text" class="form-control datepicker" data-provide="datepicker" placeholder="DD/MM/YYYY" id="datep" name="datep"/>
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
                                                <input class="form-control" id="tel1" name="tel1" REQUIRED/>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="tel2">Telephone 2</label>
                                                <input class="form-control" id="tel2" name="tel2">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="adresse">Adresse</label>
                                                <input class="form-control" id="adresse" name="adresse" REQUIRED/>
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="credit">Credit maximum (FCFA)</label>
                                                <input class="form-control" id="credit" name="credit">
                                            </div>
                                            <div class="form-group col-lg-6 col-xm-2">
                                                <label for="remise">Remise (%)</label>
                                                <input class="form-control" id="remise" name="remise">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="depassement">Depassement (%)</label>
                                                    <select class="form-control" id="depassement" name="depassement">
                                                        <option value="1">1</option>
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="delai">Delai(en jours)</label>
                                                    <select class="form-control" id="delai" name="delai">
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                        <option value="60">60</option>
                                                        <option value="90">90</option>
                                                        <option value="180">180</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    

                                    <div class="col-lg-8 col-lg-push-2">
                                        <input type="submit" class="btn btn-success col-lg-5" name="addcli" value="Enregistrer" />
                                        <input type="reset" class="btn btn-danger col-lg-5 col-lg-push-2" value="Annuler" name="reset" />
                                    </div>
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
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>

</body>

</html>