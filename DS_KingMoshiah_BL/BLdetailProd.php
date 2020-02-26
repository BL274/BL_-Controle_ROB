<?php
/**
 * Script de contr�le et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */

$repInclude = './include/';
$repVues = './vues/';

require($repInclude . "_init.inc.php");


$unMat=lireDonneePost("mat", "");
$unNom=lireDonneePost("name", "");
$unPrenom=lireDonneePost("prenom", "");

if (count($_POST)==0)
{
  $etape = 1;
}
elseif (count($_POST)==1)
{
  $etape = 2;
  $un_visiteur = get_visiteur($_POST["mat"],$tabErreurs);
}
elseif (count($_POST)>1)
{
  $etape = 3;
  modifierVisiteur($_POST["mat"], $_POST["nom"], $_POST["prenom"], $tabErreurs);
  header('Location: ./listerUtilisateurs.php');

}

// Construction de la page Rechercher
// pour l'affichage (appel des vues)
include($repVues."BLentete.php") ;
include($repVues."BLmenu.php") ;
include($repVues ."BLerreur.php");
if (count($_POST)==0)    {
  // On demande � l'utilisateur qu'elle "id" il faut modifier
  include($repVues."vModifierRefForm.php") ;
}
if (count($_POST)==1)   {
  // On affiche le forumaire permettant de modifier l'utilisateur
  include($repVues."vModifierForm.php") ;
}
include($repVues."BLpied.php") ;
?>
