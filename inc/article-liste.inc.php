<?php /* fichier  - 20180703-PBO */

/* RECUP LISTE ===================================================== */ 
    $requete10="SELECT article_title, article_img "
              ."FROM article";
    $resultat10 = $con->query($requete10);

  while($donnees10 = $resultat10->fetch()) { ?>
      <section>
      <h2><?php echo $donnees10["article_title"]; ?></h2>
      <p><img src="img/<?php echo $donnees10["article_img"]; ?>" />
      </p>
      </section><?php                     // Retour à la ligne à chaque enregistrement
  } ?>
