<?php
$servername = "localhost";
$database = "dragon";
$username = "root";
$password = "";
$datepost = date("Y-m-d");

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}

   if(isset($_POST['email'])){
    echo "<br>";
      $email = addslashes($_POST ['email']);
      $password = md5($_POST ['pass']);
      $prix = $_POST['prix'];
      $motif = addslashes($_POST['motif']);
      //$motif
      $query = mysqli_query($conn, "SELECT * FROM users WHERE pass='$password' AND email ='$email'");
          $rows = mysqli_num_rows($query);
          if($rows==1){
          $array = $query->fetch_assoc();
        //   header('location:page.php');
        $id = $_GET['id'];
        $coins = $_POST['coins'];
        if($coins > $prix){
            $coins = $coins-$prix;
       
        //===update======
        $sqlu = "UPDATE users SET coins ='$coins' WHERE id= '$id'";

if ($conn->query($sqlu) === TRUE) {
//==== insertion dans la table transaction =======
$sqltr = "INSERT INTO trans (montant, iduser, motif,datepost)
VALUES ('$montant', '$motif', '')";
mysqli_query($conn, $sqltr);
echo "paiement fait";


} else {
  echo "Error updating record: " . $conn->error;
}
}else{
    echo "crediter votre compte";
}
        


          }else{
        
            


          }
          
  }
  ?>