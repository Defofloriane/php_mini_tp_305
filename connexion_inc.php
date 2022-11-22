<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : connexion_inc.php 
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 18-11-2022 (16 Novembre 2022)
* Dernière modification : 18-11-2022 (16 Novembre 2022)
****************************************************************
* Historique des modifications
* 18-11-2022: Le script connexion_inc.php permet de vérifier que les modules  
* sont chargés
* 
***************************************************************/ -->
<?php
echo "Connection au SGBD mariadb"."<br>";
$dsn = 'mysql:host=localhost;dbname=ict4d';
$username = 'admin';
$password = 'mdp';
$options = [];
try {
    $connection = new PDO($dsn, $username, $password, $options);
    echo "Connexion a reussit.</br>";
} catch(PDOException $e) {
    $connection = NULL;
      echo "$e"."</br>";
      echo "Connexion a echouee";
      exit();
  }

?>