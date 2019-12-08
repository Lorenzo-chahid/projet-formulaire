(()=>{

  document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.slider');
    let instances = M.Slider.init(elems);
    instances
  });

  document.getElementById("submit").addEventListener("click", ()=>{
    let emailTry = document.getElementById('email').value;
    let nameTry = document.getElementById('prenom').value;
    let nameRegex = /^[a-zA-Z ]{2,30}$/

    let nameResult = nameRegex.test(nameTry)
    alert(nameResult +" Merci de rentrer un nom valide" )


    let emailRegex = /^[A-Z0-9](\.?[A-Z0-9])+@[A-Z0-9](\.?[A-Z0-9])+\.[A-Z]{2,3}$/i;
    let emailResult = emailRegex.test(emailTry);
    alert(emailResult + "Veuillez entrer un email valide !");
  })
  
  


 document.getElementById("sendemail").addEventListener("click", ()=>{


 { 
     var xhr; 
     try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
     catch (e) 
     {
         try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
         catch (e2) 
         {
            try {  xhr = new XMLHttpRequest();  }
            catch (e3) {  xhr = false;   }
          }
     }
   
     xhr.onreadystatechange  = function() 
     { 
        if(xhr.readyState  == 4)
        {
         if(xhr.status  == 200) 
             document.ajax.dyn="Received:"  + xhr.responseText; 
         else
             document.ajax.dyn="Error code " + xhr.status;
         }
     }; 
  
    xhr.open("GET", "data.xml",  true); 
    xhr.send(null); 
 } 
})

 var form  = document.getElementsByTagName('form')[0];
 var email = document.getElementById('mail');
 var error = document.querySelector('.error');
 
 email.addEventListener("input", function (event) {
   // Chaque fois que l'utilisateur saisit quelque chose
   // on vérifie la validité du champ e-mail.
   if (email.validity.valid) {
     // S'il y a un message d'erreur affiché et que le champ
     // est valide, on retire l'erreur
     error.innerHTML = ""; // On réinitialise le contenu
     error.className = "error"; // On réinitialise l'état visuel du message
   }
 }, false);
 form.addEventListener("submit", function (event) {
   // Chaque fois que l'utilisateur tente d'envoyer les données
   // on vérifie que le champ email est valide.
   if (!email.validity.valid) {
     
     // S'il est invalide, on affiche un message d'erreur personnalisé
     error.innerHTML = "J'attends une adresse e-mail correcte, mon cher !";
     error.className = "error active";
     // Et on empêche l'envoi des données du formulaire
     event.preventDefault();
   }
 }, false);

})()