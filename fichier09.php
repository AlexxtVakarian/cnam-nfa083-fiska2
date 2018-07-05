<?php /* fichier  20180703-PBO */

  function entete($title) {
    session_start(); ?>
    <!DOCTYPE html><html lang="fr">
    <head><title><?php echo $title; ?></title>
          <meta charset='UTF-8' />
          <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body><h1><?php echo $title; ?></h1><?php
    /* DEBUG */// echo 'login : '.$_SESSION['login'].'<br/>';
  } ?>
