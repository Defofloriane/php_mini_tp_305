<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : inscription.php 
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 16-11-2022 (16 Novembre 2022)
* Dernière modification : 
****************************************************************
* Historique des modifications
* 20-11-2022: Le script index.php 

* 20-11-2022 : Le script index.php crypte le mot de 
* passe avant de le sauvegarder 
***************************************************************/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="shortcut icon" href="first.ico"> -->
    <title>Index</title>
</head>
<body>
  


      <div>
            <img src="ICT.jpg" alt="absent" class="icon">
            <form action="verification.php" method="POST"  name="formulaire" >
                <fieldset>
                    <legend>Vos paramètres de connexion : </legend>
                    <input type="text" name="mat" maxlength="9" placeholder="saisissez votre matricule" class="txt" requiered>
                    <br>
                    <br>
                    <input type="password" name="pwd" placeholder="saisissez votre mot de passe" class="txt" requiered>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <input type="reset" value="Effacer" class="btn">
                    <input type="submit" name="validate" value="Connexion" class="btn">
                    <br>
                    <br>
                    <a href="inscription.php" class="btn btn-info"> S'inscrire</a>
                    
                    <a href="journal.php">Journal</a>
                </fieldset>
            </form>
    </div>
</body>
</html>
<?php
session_start(); 
 session_destroy()
?>