<ul class="nav nav-pills flex-column">

        
<li class="nav-item">
<?php
include("userp.php");
?>

<li class="nav-item">

<hr>
<li class="nav-item">
          <a class="nav-link" href="page.php"><img src="https://img.icons8.com/material-two-tone/30/000000/home--v2.png"/> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php?section=kangoa"><img src="images/KANGOA-removebg-preview.png" width="30" height="20"> A propos de KANGOA STUDIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php?section=galeries"><img src="https://img.icons8.com/emoji/30/000000/video-game.png"/> Nos différents jeux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php?section=historique"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/30/000000/external-history-dance-flaticons-flat-flat-icons.png"/> Historique des parties</a>
        </li>
<hr>
<li class="nav-item">
          <a class="nav-link" href="page.php?section=ajout"><img src="https://img.icons8.com/office/30/000000/coins.png"/> Ajouter des pièces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php?section=retrait"><img src="https://img.icons8.com/color/30/000000/money-transfer.png"/> Retirer de l'argent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php?section=transaction"><img src="https://img.icons8.com/plasticine/30/000000/pay-date.png"/> Mes Transactions</a>
        </li>
        <hr>
        <!-- <button type="button" class="btn btn-warning">Gestion profil</button><br> -->
        
        <a href="logout.php"><button type="button" class="btn btn-danger">Déconnexion</button></a>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <style>
        .nav-item a{
          color:black;
          font-size: larger;
          font-weight: bold;
        }
        .nav-item a:hover{
          background-color: lightgreen;
        }
      </style>