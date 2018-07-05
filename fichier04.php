<?php /* fichier  - 20180703-PBO */

/* RECUP question LISTE ===================================================== */
    unset($_GET);
    $requete05="SELECT user_login, user_mdp "
              ."FROM user "
              ."WHERE user_login='".$login."' AND user_mdp='".$mdp."'";
    /* DEBUG */// echo 'requete05 : '.$requete05.'<br/>';
    $resultat05 = $con->query($requete05);

  while($donnees05 = $resultat05->fetch()) { 
    /* DEBUG */// echo "ok<br/>";
    $_SESSION['login']=$donnees05["user_login"];
  } ?>
