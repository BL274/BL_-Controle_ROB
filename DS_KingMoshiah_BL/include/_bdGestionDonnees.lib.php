<?php

function connecterServeurBD()
{
    
    $PARAM_hote='localhost'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='prod'; // le nom de votre base de donn�es
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    return $connect;

  
}


/**
 * Ferme la connexion au serveur de donn�es.
*/
function deconnecterServeurBD($idCnx) {

}


function lister($nom_prodBL)
{
  $connexion = connecterServeurBD();

  // Si la connexion au SGBD � r�ussi
  if (TRUE)
  {


      $requete="select * from produit_utf8";

      $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le r�sultat soit r�cup�rable sous forme d'objet
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          $iphonemodelBL[$i]['nom']=$ligne->nom_prod;
          $iphonemodelBL[$i]['description']=$ligne->description;
          $iphonemodelBL[$i]['image']=$ligne->url_img;
          $iphonemodelBL[$i]['prix']=$ligne->prix;

          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
  }
  $jeuResultat->closeCursor();
  return $iphonemodelBL;
}


function get_prod($unId)
{
  $connexion = connecterServeurBD();

  // Si la connexion au SGBD � r�ussi
  if (TRUE)
  {

      $requete="select * from produit_utf8 where id_prod = '".$i."';";
      

      $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le r�sultat soit r�cup�rable sous forme d'objet
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          $iphonemodelBL[$i]['nom']=$ligne->nom_prod;
          $iphonemodelBL[$i]['description']=$ligne->description;
          $iphonemodelBL[$i]['image']=$ligne->url_img;
          $iphonemodelBL[$i]['prix']=$ligne->prix;

          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
  }
  $jeuResultat->closeCursor();
  return $iphonemodelBL;
}



?>