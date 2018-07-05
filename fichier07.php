<!-- fichier  20180703-PBO --><?php
  
  /* DEBUG */// echo 'login : '.$_SESSION['login'].'<br/>';
  
  if(isset($_SESSION['login']) AND (!isset($_GET['deconnexion']))) { ?>
      <strong><?php echo $_SESSION['login']; ?></strong>
      <a href="espaceprive.php?deconnexion=0" /><strong>Deconnexion</strong></a>
      <?php
  } else {
      session_unset(); unset($_SESSION); 
  }
