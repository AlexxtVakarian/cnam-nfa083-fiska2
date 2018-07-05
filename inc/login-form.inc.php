<?php /* fichier  20180703-PBO */
    unset($_GET);

/* FORMULAIRE LOGIN  ===================================================== */ ?>
  <section>
    <h2>Connexion à l'espace privé</h2>
    <form action="" method="POST" name="form_login" action="login-form.php" >

      <p><strong><label for="login" >Login *</label></strong>      <!-- PSEUDO -->
          <input type="text" maxlength=20 required
              name="login" id="login"  /></p>

      <p><strong><label for="mdp" >Mot de passe *</label></strong>      <!-- QUESTION -->
          <input type="password" required name="mdp" id="mdp" />
      </p>

      <p><input type="submit" value="Se connecter" name="question_submit" class="actif"/></p>
    </form>
    
    <?php if(isset($_POST['login'])){ ?>
              <p class="important">Vous avez du faire une erreur de login ou mot de passe</p><?php 
          } ?>
  </section>
