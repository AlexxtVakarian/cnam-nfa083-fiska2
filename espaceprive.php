<!-- fichier  - 20180703-PBO -->

<!-- ENTETE HTML =============================================================== --><?php
    include("inc/entete.inc.php");
    entete("NFA083 CF2 : Réseaux - Espace privé"); /* pour le title et le h1 */ 
 ?>

<!-- CONNEXION A LA BDD ======================================================== --><?php
    include("inc/connexion.inc.php"); ?>

<!-- CONNEXION A L ESPACE PRIVE ============================================================== -->
  <section><?php 
                 if(!isset($_SESSION['login'])){ include("inc/login-recup.inc.php"); }
                 if(!isset($_SESSION['login'])){ include("inc/autorisation.inc.php"); }
                 include("inc/session.inc.php");
                 if(!isset($_SESSION['login'])){ include("inc/login-recup.inc.php"); }
                 if(!isset($_SESSION['login'])){ include("inc/login-form.inc.php"); }
                 ?>
  </section>

<!-- ESPACE PRIVE ============================================================== --><?php
  if(isset($_SESSION['login'])){ ?>
      <section><?php include("inc/article-liste.inc.php"); ?>
      </section><?php
  } ?>

<!-- RETOUR PAGE ACCUEIL ======================================================= -->

<a href="index.php" class="actif">Retour à l'accueil</a>

<!-- PIED DE PAGE ============================================================== -->
  <footer>Copyright P.BOUQUET</footer>

</body>
</html>
