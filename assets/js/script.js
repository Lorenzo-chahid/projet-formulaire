(()=>{

  document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.slider');
    let instances = M.Slider.init(elems);
    instances
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  document.getElementById("submit").addEventListener("click", ()=>{
    
    
    let xmlhttp;
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
    document.getElementById(test).innerHTML = "Validating..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById(test).innerHTML = xmlhttp.responseText;
    } else {
    document.getElementById(test).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
    }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
      
  })
  
  
  let emailTry = document.getElementById('email').value;
    let nameTry = document.getElementById('prenom').value;
    let nameRegex = /^[a-zA-Z ]{2,30}$/;

    let nameResult = nameRegex.test(nameTry)
    if(nameResult == false){
      alert("Merci de rentrer un nom valide")
      
    };

    let emailRegex = /^[A-Z0-9](\.?[A-Z0-9])+@[A-Z0-9](\.?[A-Z0-9])+\.[A-Z]{2,3}$/i;
    let emailResult = emailRegex.test(emailTry);
    if(emailResult == false){
      alert("Merci de rentrer un email valide")
      return document.getElementById("inscription")
    };


 
})()