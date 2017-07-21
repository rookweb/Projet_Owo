
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Entree en stock</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- /.section des identifiants -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">

                                <form role="form" method="post" action="http://localhost/OwoNew/index.php?page=entree_stock">

                                    
                                    <div class="row">
                                        
                                        <div class="col-lg-10 col-lg-push-1">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="fournisseur">Fournisseur</label>
                                                    <select class="form-control" id="fournisseur" name="fournisseur">
                                                        <option value="fournisseur1">fournisseur1</option>
                                                        <option value="fournisseur12">fournisseur12</option>
                                                        <option value="fournisseur13">fournisseur13</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="date">Date d'entree</label>
                                                    <input class="form-control" id="date" name="date">
                                                </div>
                                                <div class="form-group col-lg-6 col-xm-2">
                                                    <label for="facture">Numero facture</label>
                                                    <input type="facture" class="form-control" id="facture" name="facture">
                                                </div>
                                                <div class="form-group col-lg-12 col-xm-2">
                                                    <label for="bordereau">Numero de bordereau</label>
                                                    <input class="form-control" id="bordereau" name="bordereau">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tableau de produits existants dans la base-->
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-push-1">
                                            <div class="form-group">
                                                <div class="form-group">
                                                <hr style="border-top: 0.2em solid grey">
                                                    <label for="produit" ><h2 >Produit</h2></label>
                                                <hr style="border-top: 0.2em solid grey">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            Base de donnee des produits
                                                        </div>
                                                        <!-- /.panel-heading -->
                                                        <div class="panel-body">
                                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Designation</th>
                                                                        <th>Qte en stock</th>
                                                                        <th>Forme</th>
                                                                        <th>DCI</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td class="center">
<<<<<<< HEAD
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter</button>
=======
                                                                            <button class="btn btn-outline btn-primary fa fa-plus" id="popup" onclick="div_show()">Ajouter</button>
>>>>>>> 6a71bc1a03919584d65d54d26070be33d1b112d6
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <!-- tableau des produits livres avec leurs quantites respectives -->
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-push-1">
                                            <div class="form-group">
                                                <div class="form-group">
                                                <hr style="border-top: 0.2em solid grey">
                                                    <label for="produit" ><h2 >Entree en stock</h2></label>
                                                <hr style="border-top: 0.2em solid grey">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            Liste des produits
                                                        </div>
                                                        <!-- /.panel-heading -->
                                                        <div class="panel-body">
                                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Designation</th>
                                                                        <th>Quantite livree</th>
                                                                        <th>Qte gratuite</th>
                                                                        <th>Qte payante</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td><?php echo 'donnees'; ?></td>
                                                                        <td class="center">
                                                                            <a class="btn btn-outline btn-primary fa fa-gear" href="#"></a>
                                                                            <a class="btn btn-outline btn-success fa fa-times" href="#"></a>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    

                                    <div class="col-lg-8 col-lg-push-2">
                                        <button type="submit" class="btn btn-success col-lg-5" name="submit">Enregistrer le commercial</button>
                                        <button type="reset" class="btn btn-danger col-lg-5 col-lg-push-2">Annuler l'enregistrement</button>
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

            <!-- formulaire popup -->
<<<<<<< HEAD
            <!--Begin Modal Window--> 
<div class="modal fade left" id="myModal"> 
    <div class="modal-dialog"> 
        <div class="modal-content"> 
        <div class="modal-header"> 
            <h3 class="pull-left no-margin">Les quantités</h3>
                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
            </button> 
        </div> 
        <div class="modal-body">

        <form class="form-horizontal" role="form" method="post" action="form_to_email_script.php "> 
                <span class="required">* Requis</span> 
                <div class="form-group"> 
                    <label for="quantite" class="col-sm-3 control-label">
                        <span class="required">*</span> Quantité livrée:
                    </label> 
                    <div class="col-sm-9"> 
                        <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Quantité de produit livré" required> 
                    </div> 
                </div> 
                <div class="form-group"> 
                    <label for="number" class="col-sm-3 control-label">
                        <span class="required">*</span> Quantité payante: 
                    </label> 
                    <div class="col-sm-9"> 
                        <input type="number" class="form-control" id="payante" name="payante" placeholder="Quantité payante" required>
                    </div> 
                </div> 
                    <div class="form-group"> 
                    <label for="gratuite" class="col-sm-3 control-label">
                        <span class="required">*</span> Quantité gratuite:
                    </label> 
                    <div class="col-sm-9"> 
                        <input type="number" class="form-control" id="gratuite" name="gratuite" placeholder="Quantité gratuite" required>
                    </div> 
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3"> 
                        <button type="submit" id="submit" name="submit" class="btn-lg btn-primary">Envoyer</button> 
                    </div> 
                </div> 
            <!--end Form-->
        </form>

        </div>
            <div class="modal-footer"> 
                <div class="col-xs-10 pull-left text-left text-muted"> 
                    <small>
                        <strong>Privacy Policy:</strong>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                        Mauris vitae libero lacus, vel hendrerit nisi! Maecenas quis 
                        velit nisl, volutpat viverra felis. Vestibulum luctus mauris 
                        sed sem dapibus luctus.
                    </small> 
                </div> 
                <button class="btn-sm close" type="button" data-dismiss="modal">Fermer</button> 
            </div> 
        </div> 
    </div> 
</div>
=======
            <form action="#" id="form" method="post" name="form">
                <div id="body" style="overflow: hidden;">
                    <div class="row" id="abc">
                        <div class="col-lg-8" id="popupContact">
                            <div class="form-group">
                                <h2> les quantites</h2>
                                <div class="form-group col-lg-6">
                                    <label for="quantite">Quantite livree</label>
                                    <input class="form-control" id="quantite" name="quantite">
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-6">
                                        <label for="payante">Quantite payante</label>
                                        <input class="form-control" id="payante" name="payante">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-6">
                                        <label for="gratuite">Quantite gratuite </label>
                                        <input class="form-control" id="gratuite" name="gratuite    ">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-lg-push-2">
                                    <a class="btn btn-outline btn-primary fa fa-check" href="javascript:%20check_empty()" id="submit">Valider</a>
                                    <a class="btn btn-outline btn-danger fa fa-times" href="#" onclick="div_hide()" id="close"></a>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </form>
>>>>>>> 6a71bc1a03919584d65d54d26070be33d1b112d6





    <!-- Custom Theme JavaScript -->
    
    <script type="text/javascript" src="/assets/js/bootstrap-datepicker.min.js"></script>
    <script>
        // Validating Empty Field
function check_empty() {
if (document.getElementById('quantite').value == "" || document.getElementById('payante').value == "" || document.getElementById('gratuite').value == "") {
alert("Remplissez tous les champs !");
} else {
document.getElementById('form').submit();
alert("Enregistre...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
    </script>
    
</body>

</html>