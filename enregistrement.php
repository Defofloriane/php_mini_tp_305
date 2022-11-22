<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : fichier.php (Ou Code JS/CSS : fichier.js/css)
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 16-11-2022 (16 Novembre 2022)
* Dernière modification : 21-11-2022
****************************************************************
* Historique des modifications
* 16-11-2022: Le script enregistrement.php sauvegarde les 
* informations dans la table "etudiants"
* 21-11-2022 : Le script enregistrement.php crypte le mot de 
* passe avant de le sauvegarder 
***************************************************************/ -->
<?php
require("connexion_inc.php");
if (isset ($_POST['validate']) ) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mat = $_POST['mat'];
  $sex = $_POST['sex'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
//   extract($nom);
echo "Les informations sur L'utilisateur:"."</br>";
$newnon = trim($nom);
$newnon = strtolower($nom);
$newnon = ucwords($nom);

$newprenon = trim($prenom);
$newprenon = strtolower($prenom);
$newprenon = ucwords($prenom);

$newmat = trim($mat);
$newmat = strtolower($mat);
$newmat = ucwords($mat);

$newsex = trim($sex);
$newsex = strtolower($sex);
$newsex = ucwords($sex);

$newsadres = trim($adresse);
$newsadres = strtolower($adresse);
$newsadres = ucwords($adresse);

$newsemail = trim($email);
$newsemail = strtolower($email);
// $newsemail = ucwords($email);

$newsepass = trim($password);
$newsepass = strtolower($password);
$newsepass =md5($newsepass);

  echo 'nom: '.$newnon."<br>";
  echo 'prenom: '.$newprenon."<br>";
  echo 'matricule: '.$newmat."<br>";
  echo 'sex: '.$newsex."<br>";
  echo 'Adresse: '.$newsadres."<br>";
  echo 'Email: '.$newsemail."<br>";
  echo 'Mot de passe: '.$newsepass."<br>";
  echo 'Confirm password: '.$confirmpassword."<br>";
  $statement = "SELECT matricule FROM etudiants WHERE matricule = '".$_POST['mat']."'";
  $statement = $connection->prepare($statement);
  $statement->execute([$newmat]); 
  $is_mat = $statement->fetch();
  if ($is_mat) {
     echo "matriculle existant";
     header('location: inscription.php');
  } else {
    echo"new matricule";
    $sql_insert = 'INSERT INTO etudiants(matricule,noms,prenoms,sexe,email,password_sect) VALUES(:newmat, :newnon, :newprenon ,:newsex,:newsemail,:newsepass)';
    $statement = $connection->prepare($sql_insert);
    if ($statement->execute([':newmat' => $newmat,':newnon' => $newnon,':newprenon' => $newprenon,':newsex' => $newsex,':newsemail' => $newsemail,':newsepass' => $newsepass])) {
      $message = 'data inserted successfully';
      // header('location: index.php');
    }
  }
 
}else{
    echo"rien";
}
?>