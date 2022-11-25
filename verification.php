<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : verification.php (Ou Code JS/CSS : fichier.js/css)
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 20-11-2022 (21 Novembre 2022)
* Dernière modification : 25-11-2022
****************************************************************
* Historique des modifications
* 21-11-2022: Le script verification.php se connecter a la base de donnee et afficher le tableau journal
***************************************************************/ -->
<?php
session_unset();
include("connexion_inc.php");
function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
if (isset ($_POST['validate']) ) {
    $mat = $_POST['mat'];
    $password = md5($_POST['pwd']) ;
    $satut = "Echec - Matricule incorrect";
    $adresse = getIp();
    $date_jr = date('d/m/Y');
        $sql = "SELECT noms,prenoms,password_sect,matricule FROM etudiants WHERE matricule='".$mat."' ";
        $sql2 = "SELECT password_sect FROM etudiants WHERE password_sect='".$password."' ";
        //$sql = "SELECT noms FROM etudiants WHERE matricule='".$mat."' AND password_sect='".$password."'";
        $req =  $connection->query($sql);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        $req1 =  $connection->query($sql);
        $result1 = $req1->fetch(PDO::FETCH_ASSOC);
        try {
          if (is_array($result) || is_object($result) || is_array($result1) || is_object($result1))
            {
                foreach ($result as $keys => $value1 )
                {
                  foreach($result1 as $key => $value2) {
                    while($mat == $value1 && $password == $value2 ){
                      $statut = "Succes ";
                      echo "$value1</br>";
                      echo "$value2</br>";
                    
                    
                    
                      $sql_insert = 'INSERT INTO journal(adresse,date_journal,matricule,statut) VALUES(:adresse, :date_journal, :matricule ,:statut)';
                          $statement = $connection->prepare($sql_insert);
                          if ($statement->execute([':adresse' => $adresse,':date_journal' => $date_jr,':matricule' => $mat,':statut' => $statut])) {
                          echo"insert data dans la table journal";
                          }   
                          session_start();
                          $_SESSION["mat"]= $mat;
                          $_SESSION["message"] = "Bienvenue Mr/Mme ".$result["noms"]." ".$result["prenoms"]; 
                          header("location: accueil.php");
                         $value1 = "hello";
                    
                        }
                  }
                 
                 

                }
    echo "Mot de passe incorrect,Retour a la connection!.</br>";
              
            }else {
              echo"none result";
              $sql_insert = 'INSERT INTO journal(adresse,date_journal,matricule,statut) VALUES(:adresse, :date_journal, :matricule ,:statut)';
              $statement = $connection->prepare($sql_insert);
              if ($statement->execute([':adresse' => $adresse,':date_journal' => $date_jr,':matricule' => $mat,':statut' => $satut])) {
                  echo "insert data dans la table journal";
              }
           
              header("location: index.php");
             
            }
        
        }catch(Exception $e) {
          echo"$e";
         
        }

            
         }
?>