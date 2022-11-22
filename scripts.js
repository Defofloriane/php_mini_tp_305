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


var pw1 = document.getElementById("password");  
var pw2 = document.getElementById("confirmpassword");  
console.log("bonjour");
pw1.addEventListener("change", (e)=>{
  console.log(e.target.value);
  pw1 = e.target.value;
})
pw2.addEventListener("change", (e)=>{
  console.log(e.target.value);
  pw2 = e.target.value;
})
var isChecked=false;

let button = document.getElementById('submit');
button.disabled = true;
pw2.addEventListener("change", stateHandle);
function stateHandle() {
  if ((pw1 != pw2)) {
    button.disabled = true; 
  } else {
    button.disabled = false;
  }
}
