

let form = document.querySelector('#form_Saisie');

// écouter la modification du prenom
form.prenom.addEventListener('change', function() {
    validPrenom(this);
})

// écouter la modification du nom
form.nom.addEventListener('change', function() {
    validNom(this);
})

//écouter la modification de l'email
form.email.addEventListener('change', function() {
    validEmail(this);
})

//écouter la modification du sujet
form.sujet.addEventListener('change', function() {
    validSujet(this);
})

//écouter la modification du message
form.message.addEventListener('change', function() {
    validMessage(this);
})





//Écouter la soumission du formulaire
form.addEventListener('submit', function(e){
    e.preventDefault()
    if (validEmail(form.email) && validPrenom(form.prenom) && validNom(form.nom) && validSexe(form.sexe) && validMetier(form.metier) && validSujet(form.sujet) && validMessage(form.message)){
        form.submit()
    }


});


const validPrenom = function(inputPrenom){
    // creation de la reg exp pour la validation email
    let prenomRegExp = new RegExp('[A-z-]+','g');
    let testPrenom = prenomRegExp.test(inputPrenom.value);
    let prenom = inputPrenom.nextElementSibling;

    if(testPrenom){
        prenom.innerHTML = 'Prenom Valide';
        prenom.classList.remove('test-danger')
        prenom.classList.add('test-sucess')
        return true;
    } else{
        prenom.innerHTML = 'Prenom Non Valide';
        prenom.classList.remove('test-sucess')
        prenom.classList.add('test-danger')
        return false;
    }
}

const validNom = function(inputNom){
    // creation de la reg exp pour la validation email
    let nomRegExp = new RegExp('[A-z-]+','g');
    let testNom = nomRegExp.test(inputNom.value);
    let nom = inputNom.nextElementSibling;

   

    if(testNom){
        nom.innerHTML = 'Nom Valide';
        nom.classList.remove('test-danger')
        nom.classList.add('test-sucess')
        return true;
    } else{
        nom.innerHTML = 'Nom Non Valide';
        nom.classList.remove('test-sucess')
        nom.classList.add('test-danger')
        return false;
    }
}



const validMetier = function(){
    // creation de la validation metier
    var metier = document.forms["form_Saisie"]["metier"];
    if(metier.value == "" || metier.value=="Metier"){
        document.getElementById("metier").focus()
        return false;
    } else{
        return true;
    }
}

const validSexe = function(){
    // creation de la validation pour le sexe
    var sexe = document.forms["form_Saisie"]["sexe"];
    if(sexe.value == ""){
        document.getElementById("sexe").focus()
        return false;
    } else{
        return true;
    }
}



const validEmail = function(inputEmail){
    // creation de la reg exp pour la validation email
    let emailRegExp = new RegExp('[A-z0-9._-]+[@]{1}[a-zA-Z0-9._-]+[.]{1}[a-zA-Z]{2,10}','g');
    let testEmail = emailRegExp.test(inputEmail.value);
    let small = inputEmail.nextElementSibling;

    if(testEmail){
        small.innerHTML = 'Adresse Valide';
        small.classList.remove('text-danger')
        small.classList.add('test-sucess')

        return true;
    } else{
        small.innerHTML = 'Adresse Non Valide';
        small.classList.add('test-sucess')
        small.classList.remove('text-danger')        
        return false;
    }
}

const validSujet = function(inputSujet){
    let sujet = inputSujet.nextElementSibling;;
    if ((inputSujet.value.length>30) || (inputSujet.value.length<3)){
        sujet.innerHTML ='le sujet doit comporter 3 à 30 caractères';
        return false
    }
    else{
        return true
    }
}

const validMessage = function(inputMessage){
    let message = inputMessage.nextElementSibling;;
    if ((inputMessage.value.length>160) || (inputMessage.value.length<3)){
        message.innerHTML ='le message doit comporter 3 à 160 caractères';
        return false
    }
    else{
        return true
    }
}






























/*function valider() {

   var nom = document.forms["form_Saisie"]["nom"];
   var prenom = document.forms["form_Saisie"]["prenom"];
   var email = document.forms["form_Saisie"]["email"];
   var sexe = document.forms["form_Saisie"]["sexe"];
   var naissance = document.forms["form_Saisie"]["naissance"];
   var metier = document.forms["form_Saisie"]["metier"];
   var sujet = document.forms["form_Saisie"]["sujet"];
    
   if(prenom.value == "")
    {
        alert("Mettez votre prenom");
        prenom.focus();
        return false;
    }

  
   if(nom.value == "")
    {
        alert("Mettez votre nom");
        nom.focus();
        return false;
    }

    if(email.value == "")
    {
        alert("Mettez votre adresse");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if(sexe.value == "")
    {
        alert("Choississez une case entre homme ou femme");
        sexe.focus();
        return false;
    }
    if(naissance.value == "")
    {
        alert("Mettez votre date de naissance");
        naissance.focus();
        return false;
    }


    if(metier.value == "" || metier.value=="Metier")
    {
        alert("Mettez votre metier");
        metier.focus();
        return false;
    }

    if(sujet.value == "")
    {
        alert("Mettez votre sujet");
        sujet.focus();
        return false;
    }
    if (sujet.value.length>=30)
    {
        alert("Votre sujet est trop long");
        alert("Votre sujet doit comporter entre 1 à 30 caractères");
        sujet.focus();
        return false;
    }
    if(message.value == "")
    {
        alert("Mettez votre message");
        message.focus();
        return false;
    }
    if (message.value.length>=160)
    {
        alert("Votre message est trop long");
        alert("Votre message doit comporter moins de 160 caractères");
        sujet.focus();
        return false;
    }
    


    
}*/