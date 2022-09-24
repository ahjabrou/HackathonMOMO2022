<br>
<div class="card" style= "opacity: 0.8;">
  <div class="card-header"style="background-color: black">
   <p style="font-size:30px; text-align:center; font-weight: bold; color: yellow">CONNEXION</p>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
    <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="kouadio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="digbeu" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" value="login" class="btn btn-warning">Connexion</button>
</form>
    </p>
   <?php
   if(isset($_POST['login'])){
    echo "<br>";
      $email = addslashes($_POST ['kouadio']);
      $password = md5($_POST ['digbeu']);
      $query = mysqli_query($conn, "SELECT * FROM users WHERE mot_de_passe='$password' AND email ='$email'");
          $rows = mysqli_num_rows($query);
          if($rows==1){
          $array = $query->fetch_assoc();
          $_SESSION['logged_in']= true;
          $_SESSION['id'] = $array['id'];
          $_SESSION['nom_prenom'] = $array['nom_prenom'];
          $_SESSION['email'] = $array['email'];
          header('location:page.php');
          }else{
          echo "<font color = 'red'>";
            echo "Wrong Email or Wrong Password click";
          echo "</font>";
          echo "<br>";
          echo "<font color = 'green'><b>";
          echo "<a href = 'forget.php'>";
          echo "Here";
          echo "</a>";
          echo "</b></font>";
          echo "<font color = 'red'>";
          echo " to get a new password .";
          echo "</font>";
          }
          echo "</center>";
  }
  ?>
  </div>
</div>


