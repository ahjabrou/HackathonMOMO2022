
<div class="card" style= "opacity: 0.8;">
  <div class="card-header" style="background-color:black;">
  <p style="font-size:35px; text-align:center; font-weight: bold; color:yellow">INSCRIPTION</p>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
    <form class="form-horizontal" name="myForm" method = "POST" enctype="multipart/form-data" action="">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom et prénoms</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="votre nom et prénom" name="nom_prenom" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Pseudo</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="votre pseudo" name="pseudo" required>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="mot de passe" name="mot_de_passe" required>
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="inputState">Pays</label>
      <select id="inputState" class="form-control" name="pays">
        <option selected>Choose...</option>
        <option value="Côte dIvoire">Côte d'Ivoire</option>
        <option value="Ghana">Ghana</option>
        <option value="Ouganda">Ouganda</option>
        <option value="Cameroun">Cameroun</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Congo Brazzaville">Congo Brazzaville</option>
        <option value="Guinée Conakry">Guinée Conakry</option>
        <option value="Zambie">Zambie</option>
        <option value="Bénin">Bénin</option>
        <option value="Eswatini">Eswatini</option>
      </select>
    </div>
    
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-danger" name="submit">Inscription</button>
</form>

<?php
if(isset($_POST['submit'])){
      $nom_prenom = addslashes($_POST ['nom_prenom']);
      $pseudo = addslashes($_POST ['pseudo']);
      $email = addslashes($_POST ['email']);
      $mot_de_passe = md5($_POST ['mot_de_passe']);
      $name = addslashes($_POST ['name']);
      $pays = addslashes($_POST ['pays']);
      $query = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email'");
      $rows = mysqli_num_rows($query);
      if($rows!=1){
      $array = $query->fetch_assoc();
      mysqli_query($conn, "INSERT INTO users (id,nom_prenom,pseudo,email,pays,mot_de_passe,date_publication,ip) 
      VALUES ('','$nom_prenom','$pseudo','$email','$pays','$mot_de_passe','$datepost','$ip')");
  
  
      //---- Send Email---------------------------
          /*
      // the message
      $msg = "Welcome to phpTest: \n Your login informations : \n Email = ".$email." Password = ".$password." \n Now you can log into your account. ";
      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);
      // send email
      mail($email,"Welcome to phpTest",$msg);
      //-------End sending Email-----------------
      */
  
      echo "Congratulation now you have an account";
      echo "<br>";
      echo "Now you can log into your account";
  
      }else{
            echo "Email already exists click";
          echo "<br><b>";
          echo "<font color = 'green'>";
          echo "<a href = 'login.php'>";
          echo "Here";
          echo "</b></a>";
          echo "</font>";
          echo " to log into your account.";
      }
    }
?>
    </p>
    
  </div>
</div>
