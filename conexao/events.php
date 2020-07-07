<?php
 $json = array();
 $requete = "SELECT * FROM agenda ORDER BY id";
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=agenda', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>