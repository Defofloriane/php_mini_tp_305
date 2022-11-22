<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : setup.php 
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 16-11-2022 (16 Novembre 2022)
* Dernière modification : 17-11-2022
****************************************************************
* Historique des modifications
* 16-11-2022: Le script setup.php permet de vérifier que les modules  
* sont chargés
* 17-11-2022: Le script setup.php ajout de la connection a la base de donnee 
***************************************************************/ -->
<?php
$arr = get_loaded_extensions();
$tableau =  [0 => "Core", 1 => "curl",2 => "pdo",3 => "date",4 => "hash",5 => "mbstring",6=>"openssl",7 => "session",8=>"standard", 9 => "cgi"];
natcasesort($arr);
natcasesort($tableau);
$is_trouve = false;
// print_r($arr);
// print_r($tableau);
echo "****************************************************************************"."<br>";
echo "Verification des extensions Chargées:"."<br>";
foreach ($tableau as $keys => $value1) {
  foreach($arr as $key => $value){
    if ( $value1 == $value) {
      $is_trouve = true;
      echo "Extension ".$value1."  .......... Oui"."<br>";
    }
  }
  if ($is_trouve == false) {
    echo "Extension ".$value1."  .......... Non"."<br>";
  }
  $is_trouve = false;
}

echo "****************************************************************************"."<br>";
echo "Connection au SGBD mariadb"."<br>";
$dsn = 'mysql:host=localhost;dbname=ictL3';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
echo "vous etes connectez"."<br>";
// $sql = 'INSERT INTO etudiant(nom,matricule,email,filiere) VALUES(:nom, :mat, :email ,:filiere)';
$sql = 'CREATE DATABASE ict4d';
$statement = $connection->prepare($sql);
 $pdo =  $connection->query($sql);
if(!$statement){
  echo "erreur lors de l execution de la requete";
}else{
  echo "Base de donnee creer"."<br>"; 
  // $sql_grant = 'GRANT USAGE ON DATABASE ict4d  TO  admin IDENTIFIED BY "mdp" '; 
//    $sql_create_user ="  CREATE USER 'admin'@'localhost'
//    IDENTIFIED BY 'mdp';
//  GRANT ALL
//    ON .
//    TO 'finley'@'localhost'
//    WITH GRANT OPTION;";
 
$sql_create_user = "CREATE USER IF NOT EXISTS'admin'@'localhost' IDENTIFIED BY 'mdp'";

$sql_grant = "GRANT ALL PRIVILEGES ON ict4d.* TO 'admin'@'localhost'";
  
  $sql_create_etu = "CREATE TABLE ict4d.etudiants(
    matricule VARCHAR(255),
    noms  VARCHAR(255),
    prenoms  VARCHAR(255),
    sexe  VARCHAR(255),
    email  VARCHAR(255),
    password_sect  VARCHAR(255)
  )";
   $sql_create_journal = "CREATE TABLE ict4d.journal(
   adresse VARCHAR(255),
   date_journal  DATE,
   matricule  VARCHAR(255),
   statut  VARCHAR(255)
 )";
 $req = $connection->exec($sql_create_etu);
 if ($req){
  echo "Cretaion de la table etudiant a echoue"."<br>"; 
 }else {
  echo "Cretaion de la table etudiant reussit"."<br>"; 
 }
 $req1 = $connection->exec($sql_create_journal);
 if ($req1){
  echo "Cretaion de la table Journal a echoue"."<br>"; 
 }else {
  echo "Cretaion de la table Journal reussit"."<br>"; 
 }
 $req2 = $connection->exec( $sql_create_user);
 if ($req2){
  echo "User n a pas ete creer "."<br>"; 
 }else {
  echo "User reussit"."<br>"; 
 }
 $req3 = $connection->exec($sql_grant);
 if ($req3){
  echo "Privileges admin echoue"."<br>"; 
 }else {
  echo "Privileges admin reussit"."<br>"; 
 }
}
} catch(PDOException $e) {
  $connection = NULL;
    echo "$e";
    exit();
}
?>