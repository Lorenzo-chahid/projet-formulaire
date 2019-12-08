(()=>{
  document.getElementById("submit").addEventListener("click", ()=>{
    let emailTry = document.getElementById('email').value;
    let nameTry = document.getElementById('prenom').value;
    let nameRegex = /^[a-zA-Z ]{2,30}$/;

    let nameResult = nameRegex.test(nameTry)
    
 
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

    let emailRegex = /^[A-Z0-9](\.?[A-Z0-9])+@[A-Z0-9](\.?[A-Z0-9])+\.[A-Z]{2,3}$/i;
    let emailResult = emailRegex.test(emailTry);
    


    
    if(this.status == 200 &&
      this.responseXML != null &&
      this.responseXML.getElementById('test').textContent) {
      // success!
      processData(this.responseXML.getElementById('test').textContent("Succes"));
    } else {
      // something went wrong
      console.error(error)
      
    }

    if(nameResult == false){
      alert("Merci de rentrer un nom valide")
      
    };

    if(emailResult == false){
      alert("Merci de rentrer un email valide")
      return document.getElementById("inscription")
    };
      
  })

  document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.slider');
    let instances = M.Slider.init(elems);
    instances
  });


  
  
 
 
})()