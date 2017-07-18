
<?php 
session_start();

  include("pages/include/connexionDB.php");
  //

  //verifier si la pages existe on scan toute les pages du controleurs
  $pages=scandir("controleurs/");

     // var_dump($pages);
  $page=!empty($_GET["page"])?$_GET["page"]:"login";
  //rec
  if (in_array($page.".php", $pages)) {
    if ($page !== "login") {
      ?>
      <!DOCTYPE html>
      <html lang="fr">
      <?php include("pages/include/headerNormal.php"); ?>

      <body>

          <div id="wrapper">
              <!-- Navigation -->
              <?php include("pages/include/menu.php"); ?>

          </div>
          <!-- /#wrapper -->
          <div id="page-wrapper">
              <?php include("controleurs/".$page.".php"); ?>
          </div>
              
          <?php include("pages/include/footerNormal.php"); ?>

      </body>

      </html>
      <?php
    }
    else
    {
      include("controleurs/".$page.".php");
    }

    $_SESSION["courante_page"] =$page;
  }
   else{
     include("controleurs/".$_SESSION["courante_page"].".php");
         
   }

  





