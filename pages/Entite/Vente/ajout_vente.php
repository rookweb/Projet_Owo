<?php
global $bdd;
$produit= $bdd->prepare('SELECT * FROM produit p, localisation l, exploitant e, famille_produit f
where p.CODE_LOCALISATION=l.CODE_LOCALISATION 
and p.CODE_EXPLOITANT=e.CODE_EXPLOITANT
and p.CODE_FAMILLE=f.CODE_FAMILLE ');
$produit->execute();
$data=$produit->fetchAll();
$prod=array();
?>



<div class="col-lg-12">
    <h1 class="page-header">VENDRE</h1>
</div>


           <br>
            <div class="row">

                <div class="col-lg-12">
                   <div  class="col-lg-8">
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
                                        <th>Quantite</th>
                                        <th>PRIX</th>
                                        <th>FAMILLE</th>
                                        <th>Peremption</th>
                                        <th>Localisation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $d) { ?>
                                <?php echo'<tr class="odd gradeX" data-id="'.$d->CODE_PRODUIT.'">' ?>
                                    <td><?php echo $d->DESIGNATION; ?></td>
                                    <td><?php echo $d->QTE_STOCK; ?></td>
                                    <td><?php echo $d->PRIX_PRODUIT; ?></td>
                                    <td><?php echo $d->NOM_FAMILLE; ?></td>
                                    <td><?php echo $d->DATE_PEREMPTION; ?></td>
                                    <td><?php echo $d->NOM_LOCALISATION; ?></td>
                                    <td class="center">
                                        <a class="btn btn-outline btn-success fa fa-eye add_panier"></a>
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

                <div class="col-lg-4">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Acheter produit
                          </div>
                          <br> 
                            <select id="optgroup" class="ms" multiple="multiple">
                            <?php foreach ($data as $d) { ?>
                                <optgroup label="<?php echo $d->NOM_FAMILLE; ?>">
                                    <option value="<?php echo $d->CODE_PRODUIT; ?>">
                                    <?php echo $d->DESIGNATION; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d->PRIX_PRODUIT; ?> </option>
                                </optgroup>
                                <?php } ?>
                            </select>
                            
                            <br>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>

        </div>
</div>
