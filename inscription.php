<!-- /****************************************************************
* Projet : Projet ICT305
* Code PHP : inscription.php 
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 16-11-2022 (16 Novembre 2022)
* Dernière modification : 16-11-2022 (16 Novembre 2022)
****************************************************************
* Historique des modifications
* 16-11-2022: Le script inscription.php permet de vérifier que les modules  
* sont chargés
* 14-11-2022 : Le script enregistrement.php crypte le mot de 
* passe avant de le sauvegarder 
***************************************************************/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="scripts.js" ></script>

</head>
<body>
    <div class="container-fluid tt">
        <nav >
           <h1>Gestion des Etudiants</h1>

        <img src="ICT.jpg" alt="absent" class="icon">

            
         </nav>
      
            <div class="row justify-content-center">
                    <form action="enregistrement.php" class="form-container" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="nom" id=" nom"  class="form-control" placeholder="Entrer votre nom" required>
                             <small id=>not share you name please</small>
                        </div>
                        <div class="form-group">
                            <label for="name">Prenom</label>
                            <input type="text" name="prenom" id=" prenom"  class="form-control" placeholder="Entrer votre prenom" required>
                             <small id=>not share you firstname please</small>
                        </div>
                        <div class="form-group">
                            <label for="name">Matricule</label>
                            <input type="text" name="mat" id=" mat"  class="form-control" placeholder="Entrer votre matricule" required>
                             <small id=>not share you matricule please</small>
                        </div>
                        <input type="radio" name="sex" value="Femme"> une femme
                        <input type="radio" name="sex" value="Homme"> un homme<br>
                        <div class="form-group">
                            <label for="name">Adresse</label>
                            <input type="text" name="adresse" id="adresse"  class="form-control" placeholder="Entrer votre adresse" required>
                             <small id=>not share you name please</small>
                        </div>
                        <div class="form-group">
                            <label for="formqil">Email</label>
                            <input type="email" name="email" id=" email"  class="form-control" placeholder="Entrer votre email" required>
                             <small id=>not share you email please</small>
                        </div>
                        <div class="form-group">
                             <label for="forpassword">Mot de Passe</label>
                             <input type="password" name="password" id="password"  class="form-control" placeholder="Entrer password" required>
                             <small id=>place modal password</small>
                        </div>
                        <div class="form-group">
                             <label for="forpassword">Confirmer le Mot de Passe</label>
                             <input type="password" name="confirmpassword" id="confirmpassword"  class="form-control" placeholder="confirmer password" required>
                             <small id=>place modal password</small>
                        </div>
                        <div class="form-group form-check">
                           <input type="checkbox" class="form-chexbox-input" id="check">
                           <label  class="form-chexbox-input" for="echeck"> Check  out</label>
                        </div>
                        <div class="vv">
                        <button type="submit" name="validate"  class="btn btn-info" onclick="matchPassword()" >Submit</button>

                        <button type="reset"  class="btn btn-info btw">Reset</button>
                        </div>
                           
                    </form>
                   
                </section>
            </div>
    </div>
   

</body>
</html>