<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : fichier.php (Ou Code JS/CSS : fichier.js/css)
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 22-11-2022 (21 Novembre 2022)
* Dernière modification : 22-11-2022
****************************************************************
* Historique des modifications
* 21-11-2022: Le script journal.php se connecter a la base de donnee et afficher le tableau journal
***************************************************************/ -->
<?php
include("connexion_inc.php");

    $sql = "SELECT adresse,date_journal,matricule,statut FROM journal";
    $pdo =  $connection->query($sql);
    if(!$pdo){
      echo "erreur lors de l execution de la requete";
      $em =  $connection->emunInfo();
      echo "<br> $em</br>";
    }else{
      echo "<table border ='e'>";
      while($lg = $pdo->fetch(2)){
        foreach($lg as $val){
          echo "<td> $val</td>";
        }
        echo "</tr>";
      }
    }
  
  
?>