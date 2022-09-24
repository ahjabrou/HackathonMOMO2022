<?php
          session_start();
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

  body{
    
    background-position:center;
    background-repeat: no-repeat;
    background-size: cover;
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
      include("indexmenu.php");
      ?>
    
      <?php
      if(!$_GET['section']){
        include("login.php");
      }else if($_GET['section'] == "signup"){
        include("signup.php");
    }
    
     
      
      ?>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>

</body>
</html>
