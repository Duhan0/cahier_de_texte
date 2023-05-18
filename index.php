<?php 
  require("./config/connexion.php")
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <style>
      body{
        height: 100vh;
      }
    </style>
    <!-- <?php include("./header.php") ?> -->
    <div class="container" >
      <div class="login">
        <h1>Connexion</h1>
        <form action="./controller/connexion_sys.php" method="post">
          <label for="username">Nom d'utilisateur:</label>
          <input type="text" id="username" name="username" required>
          <br>
          <label for="password">Mot de passe:</label>
          <input type="password" id="password" name="password" required>
          <br>
          <div class="button-container">
            <button type="submit">Connexion</button>
            <button type="reset">Annuler</button>
          </div>
        </form>
      </div>
    </div>
   
    <!-- <?php include("./footer.php") ?> -->

