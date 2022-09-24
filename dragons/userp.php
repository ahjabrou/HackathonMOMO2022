 <style>
  .card{
    border: 2px solid black;
    color: black;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: medium;
  }
</style> 



<?php
    
    
  $conn = mysqli_connect($servername, $username, $password, $database);


    $result = mysqli_query($conn,"SELECT nombre_pieces FROM ajoutpieces");
    while($row = mysqli_fetch_assoc($result)) {
       $tab[] = $row;
    } 
   mysqli_close($conn); 
  
?>

<div class="card" style="width: 18rem;">
<!-- <center><img class= "img-thumbnail" src="https://img.icons8.com/color/96/000000/user.png" alt="Card image cap" width="100" height="150"></center> -->
  
  <div class="card-body">
    <p class="card-text">
        <?php 
        //afficher le nom et prénom de l'utilisateur
        echo $theuser;
        echo "<br>";
        //nombre de victoires
        echo "victoires:10/30";
        echo "<br>";
        //nombre de pièces
        // $nombre_pieces=$_POST['nombre_pieces'];
        // echo "$nombre_pieces";

      // if(isset($_POST['submit']))
      //   {
      //   $_SESSION['ajoutc.php']++;
      //   }
      //   echo $_SESSION['1000'];  

      //   echo $_POST['pieces']; 

     

    //  if(isset($_POST['submit'])){

    //   $nombre_pieces=$_POST['pieces'];
      
    //   $prix=200;
    //   $total =  $prix * $nombre_pieces;
      
    //   echo  $total ; 
            
    //       }
      
    //  else{ 
      // $nombre_pieces=$_POST['retait'];
      
      // echo  $total - $nombre_piece ; 
     
    //  }

      //   ?>

   
 </p>
    
 
  </div>
</div>


