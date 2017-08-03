<?php 
    global $bdd;
$clients= $bdd->prepare('SELECT CODE_CLI, TITRE, NOM_CLI, PRENOM_CLI, EMAIL, ADRESSE, TEL1, TEL2, STATUT,TOTAL_DU SOLDE, CREDIT_MAX, DELAI_PAIEMENT, REMISE, DROIT_CREDIT, DEPASSEMENT FROM client');
$clients->execute();
$data=$clients->fetchAll();
$four=array();

?>


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LISTE CLIENTS </h1>
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
                            <a class="btn btn-outline btn-warning fa fa-plus" href="?page=ajout_client"> NOUVEAU</a>
                            <B>  <h3> Information sur les clients </h3></B>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>Credit</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                               <?php foreach ($data as $d){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $d->TITRE; ?></td>
                                        <td><?php echo $d->NOM_CLI; ?></td>
                                        <td><?php echo $d->PRENOM_CLI; ?></td>
                                        <td><?php echo $d->TEL2; ?></td>
                                        <td><?php echo $d->EMAIL; ?></td>
                                        <td><?php echo $d->SOLDE; ?></td>
                                        <td class="center"><?php if($d->STATUT==0){echo "En regle";} else{echo "Credit";} ?></td>
                                        <td class="center">
                                            <a type="button" id="" class="btn btn-primary" data-toggle="modal" data-target=""" href="?page=update_client&amp;id=<?php echo $d->CODE_CLI; ?>"> Mod</a>
                                            <a class="btn btn-outline btn-success fa fa-eye" href="#"> Aff</a>
                                            <a class="btn btn-outline btn-warning fa fa-times" href="pages/administration/Client/script_delete_client.php?id=<?php echo $d->CODE_CLI; ?>" onclick = "if (! confirm('Confirmer la suppression?')) return false;"> Sup</a>
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
<!--
            
            *** debut de boucle php a inserer ici


                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <h3 class="pull-left no-margin">Modification de l'enregistrement</h3>
                                <button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
                            </button> 
                        </div> 

                        <div class="modal-body">

                            <form role="form" method="post" action="pages/administration/Client/script_ajout_client.php">
                                    
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-group col-lg-4">
                                                    <label for="titre">Titre</label>
                                                    <select class="form-control" id="titre" name="titre">
                                                        <option value="Mr">Monsieur</option>
                                                        <option value="Mme">Madame</option>
                                                        <option value="Dle">Demoiselle</option>
                                                    </select> 
                                                </div>
                                            
                                                <div class="form-group col-lg-4">
                                                    <label for="commercial">Commercial</label>
                                                    <select class="form-control" id="commercial" name="commercial">
                                                    <?php foreach ($data as $d) { ?>
                                                        <option value="<?php echo $d->code_com; ?>"><?php echo $d->nom_com." ".$d->prenom_com; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name = "droit" value="1">droit au credit </input>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <hr style="border-top: black 1em solid;">
                                    <div class="col-lg-12">

                                        <div class="form-group col-lg-4" >
                                            <label for="nom">Nom du client</label>
                                            <input class="form-control"  type="text" id="nom" name="nom" REQUIRED/>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="prenom">Prenom du client</label>
                                            <input class="form-control" type="text" id="prenom" name="prenom" REQUIRED/>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="piece">Type piece </label>
                                            <select  class="form-control"  id="piece" name="piece">
                                                <option value="CNI">CNI</option>
                                                <option value="PP">PASSEPORT</option>
                                                <option value="CE">CARTE ELECTEUR</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="numpiece">Numero Piece</label>
                                            <input type="text" class="form-control "  id="numpiece" name="numpiece"/>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="datep">Date piece </label>
                                            <input type="text" class="form-control datepicker" data-provide="datepicker" placeholder="YYYY/MM/DD" id="datep" name="datep"/>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="calendrar"> </label>
                                            <i class="fa fa-calendar"></i>
                                        </div>

                                    </div> 
                                 <hr style="border-top: black 1em solid;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-group col-lg-4">
                                                <label for="tel1">Telephone 1 </label>
                                                <input class="form-control" id="tel1" name="tel1" REQUIRED/>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="tel2">Telephone 2</label>
                                                <input class="form-control" id="tel2" name="tel2">
                                            </div>
                                            <div class="form-group col-lg-4 col-xm-2">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group col-lg-4 col-xm-2">
                                                <label for="adresse">Adresse</label>
                                                <input class="form-control" id="adresse" name="adresse" REQUIRED/>
                                            </div>
                                            <div class="form-group col-lg-4 col-xm-2">
                                                <label for="credit">Credit max (FCFA)</label>
                                                <input class="form-control" id="credit" name="credit">
                                            </div>
                                            <div class="form-group col-lg-4 col-xm-2">
                                                <label for="remise">Remise (%)</label>
                                                <input class="form-control" id="remise" name="remise">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-lg-4">
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
                                                <div class="form-group col-lg-4">
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
                                    
                                    *** fin de bloc php a inserer ici ***
                                    <div class="col-lg-8 col-lg-push-2">
                                        <input type="submit" class="btn btn-success col-lg-5" name="addcli" value="Enregistrer" />
                                        <input type="reset" class="btn btn-danger col-lg-5 col-lg-push-2" value="Annuler" name="reset" />
                                    </div>
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


-->