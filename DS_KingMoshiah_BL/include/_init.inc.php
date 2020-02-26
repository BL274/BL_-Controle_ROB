<?php
/** 
 * Initialise les ressources nécessaires au fonctionnement de l'application
 * @package default
 * @todo  RAS
 */
  require("_bdGestionDonnees.lib.php");
  require("_utilitairesEtGestionErreurs.lib.php");
  
  // démarrage ou reprise de la session
  connecterServeurBD();
  
  // initialement, aucune erreur ...
  $tabErreurs = array();
    
?>
