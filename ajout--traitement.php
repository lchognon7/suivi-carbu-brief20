<?php

  // récupère les données postées
  $prixLitre   = $_POST["prix-au-litre"] ?? false;
  $volumePlein = $_POST["volume-plein"] ?? false;
  $kmParcourus = $_POST["kilometres-parcourus"] ?? false;

  // affiche un message si un champ n'est pas rempli
  if ($prixLitre == false) exit("merci de renseigner le prix au litre, payé à la pompe svp");

  // calcul à effectuer
  $moyenneLitresAuCent = ($volumePlein * 100)/$kmParcourus; // nombre de litres x100 / km parcourus

  // date à cet instant T
  $dateObjet = new DateTime(null, new DateTimeZone("Europe/Paris"));
  $datePlein = $dateObjet->format("Y-m-d");

  // dépose un nouveau cookie
  $cookieIndex = $dateObjet->format("YmdHisu");
  $cookieContent = "$datePlein|$prixLitre|$moyenneLitresAuCent";
  setcookie("plein[$cookieIndex]", $cookieContent, strtotime( "+182 days" ));

  // redirection vers la page d'accueil
  header("Location: index.php");
  exit; // force l'arrêt de ce script après avoir demander la redirection

?>