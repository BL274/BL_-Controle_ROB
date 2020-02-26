<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vues/';
  
  require($repInclude . "_init.inc.php");
 
  $nom_prodBL="";
  $iphonemodelBL = lister($nom_prodBL);
  
  // Construction de la page Rechercher
  // pour l'affichage (appel des vues)
  include($repVues."BLentete.php") ;
  include($repVues."BLmenu.php") ;
  include($repVues."BLvPizza.php");
  include($repVues."BLpied.php") ;
  ?>
    
