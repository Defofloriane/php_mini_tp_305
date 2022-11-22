 /****************************************************************
* Projet : Projet ICT305
* Code PHP : scrips.js
****************************************************************
* Auteur :KEMGNE DEFO FLORIANE INGRID 20V2512
* E-mail : florianekemgne@gmail.com
****************************************************************
* Date de création : 17-11-2022 (16 Novembre 2022)
* Dernière modification : 
****************************************************************
* Historique des modifications
* 17-11-2022: Le script.js permet de vérifier que les mots de passe sont identiques  
* 17-11-2022 : Lescript.js 
* passe avant de le sauvegarder 
***************************************************************/ 
function matchPassword() {  
    var pw1 = document.getElementById("password").value;  
    var pw2 = document.getElementById("confirmpassword").value;  
    if(pw1 != pw2)  
    {   
   
  alert("Mots de passe invalide");
        
    } else {  
      alert("Mots de passe valaides");  
      
    }  
  } 
