<?php /* fichier  - 20180703-PBO */

/* RECUP QUESTION PSEUDO ==================================================== */
    if(isset($_POST['login'])){
        $login=(string) $_POST['login'];
    } else {$login=""; }

/* RECUP QUESTION TEXTE ================================================ */
    if(isset($_POST['mdp'])){
        $mdp=(string) $_POST['mdp'];
    } else {$mdp=""; }
