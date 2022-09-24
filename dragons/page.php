<?php
include("check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("title.php");
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<?php
// include("banner.php");
include("menu.php");
?>




<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      
      <?php
      include("leftmenu.php");
      ?>
    
      <?php
      if(!$_GET['section']){
        include("info.php");
      }else if($_GET['section'] == "ajout"){
        include("ajoutc.php");
    }else if($_GET['section'] == "retrait"){
        include("retrait.php");
     }else if($_GET['section'] == "transaction"){
        include("transaction.php");
    }else if($_GET['section'] == "historique"){
        include("historique.php");
     }else if($_GET['section'] == "jeu"){
      include("dragons.php");
   }else if($_GET['section'] == "galeries"){
    include("galerie.php");
  }else if($_GET['section'] == "kangoa"){
    include("kangoa.php");
   }
  
      ?>
      <!-- <?php
      // if($_GET['jouer']){
      //   include("dragons.php");
      // }
      ?> -->
    </div>
  </div>
</div>

<?php
include("footer.php");
?>

</body>
</html>
