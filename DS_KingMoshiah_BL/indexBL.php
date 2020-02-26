<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vues/';
  
  require($repInclude . "_init.inc.php");
 
  // Construction de la page Accueil
  // pour l'affichage (appel des vues) 
  include($repVues."BLentete.php") ;
  include($repVues."BLmenu.php") ;
  include($repVues."BLvAccueil.php");
  include($repVues."BLpied.php") ;
?>
    
