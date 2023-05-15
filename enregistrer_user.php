<?php
require("./config/fonction.php");

$grades = afficher_grade();
$sexes = afficher_sexe();
$specialites = afficher_specialite();


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Page d'enregistrement</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
  <?php include("./header.php") ?>
    <div class="container" style="margin-top: 5%;">
      <div class="login">
        <h1>Enregistrer les enseignants</h1>
        <form action="./controller/enregistrement.php" method="POST">
        <label for="nom">Nom:</label>
          <input type="text" id="nom" name="nom" required>
          <br>
          <label for="prenom">Prenom:</label>
          <input type="text" id="prenom" name="prenom" required>
          <br>
          <label for="contact">Contact:</label>
          <input type="email" id="contact" name="contact" required>
          <br>
          <label for="username">Nom d'utilisateur:</label>
          <input type="text" id="username" name="username" required>
          <br>
          <label for="role">Role:</label>
          <select class="role" id="role" name="role"  aria-label="Default select example">
            <option selected>Role</option>
            <option value="Administrateur">Administrateur</option>
            <option value="enseignant">Enseignant</option>
          </select>
          <br>
          <label for="grade">Grade:</label>
          <select class="role" id="grade" name="grade"  aria-label="Default select example">
            <option selected>Grade</option>
            <?php 
                foreach($grades as $grade ):
            ?>
            <option value="<?= $grade->ID_GRADE?>"><?= $grade->LIB_GRADE?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <label for="specialite">Specialité:</label>
          <select class="role" id="specialite" name="specialite"  aria-label="Default select example">
            <option selected>specialite</option>
            <?php 
                foreach($specialites as $specialite ):
            ?>
            <option value="<?= $specialite->ID_SPECIALITE?>"><?= $specialite->LIB_SPECIALITE?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <label for="sexe">Sexe:</label>
          <select class="role" id="sexe" name="sexe"  aria-label="Default select example">
            <option selected>Sexe</option>
            <?php 
                foreach($sexes as $sexe ):
            ?>
            <option value="<?= $sexe->ID_SEXE?>"><?= $sexe->LIB_SEXE?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <label for="password">Mot de passe:</label>
          <input type="password" id="password" name="password" required>
          <br>
          <div class="button-container">
            <button type="submit" name="envoyer">Enregistrer</button>
            <button type="reset">Annuler</button>
          </div>
        </form>
        
      </div>
    </div>
    <!-- <script>
        let form = document.querySelector("form")
        form.addEventListener("submit",(e)=>{
            e.preventDefault()
        })
    </script> -->
    <?php include("./footer.php") ?>