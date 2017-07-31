<script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/vendor/raphael/raphael.min.js"></script>
    <script src="assets/vendor/morrisjs/morris.min.js"></script>
    <script src="assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>
    <script src="assets/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.min.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({

            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
//            "bFilter": false,

            "language":{
                "emptyTable": "Aucune donnée valide dans la table",
                "lengthMenu": "Afficher _MENU_ éléments",
                "first": "Premier",
                "last": "Dernier",
                "paginate":{
                    "next": "Suivant",
                    "previous": "Précédent"
                },
                "info": "Affichage de _START_ à _END_ des _TOTAL_ éléments",
                "infoEmpty": "Aucune donnée à afficher",
                
                "loadingRecords":"- Chargement- Veuillez patienter... ",
                "processing": "-Calcul- Veuillez patienter...",
                "search": "Rechercher  "

            },

            responsive: true
        });
    });

    $(document).ready(function clic_modal(id) {
        var evt = document.createEvent("MouseEvents");
        evt.initMouseEvent("click, true, true, windows, 0, 0, 0, 0, 0, false, false, false, false, 0, null");
        document.getElementById(id).dispatchEvent(evt);
        alert("tête de con!!!");
    });

//    $(document).ready(function() {
//        document.getElementById(<?php //echo $id;  ?>//).click();
//        alert("tête de con!!!");
//    });
    </script>