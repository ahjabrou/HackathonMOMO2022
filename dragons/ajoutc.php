<style>
  form{
    margin-left: 10px;
    margin-top: 10px;
    height: 70px;
    width: 750px;
    font-size: medium;
  }
  .form-control{
   font-size: large;
   padding: 10px;
  }
#depot{
  padding: 10px;
  width: 180px;
  height: 50px;
  font-size: large;
  border: 1px solid black;
  margin-left: 30px;
}
</style>
<form  action=""   method="POST">
  <div class="form-group row">
    <label for="inputEmail3"    class="col-sm-2 col-form-label">Nombre de pièces</label>
    <div class="col-sm-10">
      <input type="number"  name="nombre_pieces" class="form-control" id="inputEmail3" placeholder="pièces">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">votre numéro MTN</label>
    <div class="col-sm-10">
      <input type="text" name="numero" class="form-control" id="inputPassword3" placeholder="+22505XXXXXX">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-2">Termes et conditions</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          J'accepte
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
        <br>
      <button type="submit" name="submit" class="btn btn-warning" id="depot">Ajouter des pièces</button>
    </div>
  </div>
</form>


<?php

include('config.php');
if(isset($_POST['submit'])){

  $numero = ($_POST ['numero']);
  $nombre_pieces=($_POST['nombre_pieces']);
   $prix=200;
   $total =  $prix * $nombre_pieces;
    $query =mysqli_query($conn, "INSERT INTO ajoutpieces (nombre_pieces,numero,date_paiement) 
        VALUES ('$nombre_pieces','$numero','$datepost')");
        echo "Félicitations vous venez d'acheter des pièces";
        echo  $total ; 
         
      }
   
 else{ 
  
  
 }
// if(isset($_POST['submit'])){
//   $nombre_pieces = ($_POST ['nombre_pieces']);
      
        
        
//         } else{
         
//         }
  ?>
  
  
  
  
  
  
  <?php
// session_start();
// $_SESSION['userp.php'] = 0;
// if(isset($_GET['submit']))
// {
// $_SESSION['depot']++;
// }+
// echo $_SESSION['depot'];
?>