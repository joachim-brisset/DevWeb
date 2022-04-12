

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

form.sexe[0].addEventListener('change', function() {
    validSexe(form.sexe);
})
form.sexe[1].addEventListener('change', function() {
    validSexe(form.sexe);
})

form.metier.addEventListener('change', function() {
    validSexe(this);
})
form.naissance.addEventListener('change', function() {
    validDate(this);
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

    valid = true
    if(!validEmail(form.email)) valid = false
    if(!validPrenom(form.prenom)) valid = false
    if(!validNom(form.nom)) valid = false
    if(!validSexe(form.sexe)) valid = false
    if(!validMetier(form.metier)) valid = false
    if(!validSujet(form.sujet)) valid = false
    if(!validMessage(form.message)) valid = false
    if(!validDate(form.naissance)) valid = false
    
    if(valid) form.submit()
});


function setErrorMessage(element, message) {
    let span = element.parentElement.querySelector(".inputError")
    span.innerHTML = message
}

let letters = new RegExp('^[A-z-]+$','g')
let email = new RegExp('^[A-z0-9._-]+[@]{1}[a-zA-Z0-9._-]+[.]{1}[a-zA-Z]{2,10}$','g');

const validPrenom = function(inputPrenom){
    // creation de la reg exp pour la validation email
    let testPrenom = letters.test(inputPrenom.value);

    if(!testPrenom){
        setErrorMessage(inputPrenom, 'Votre prenom doit être composé de lettre et de au moins 1 caractère');
        return false;
    }
    setErrorMessage(inputPrenom, '')
    return true
}

const validNom = function(inputNom){
    // creation de la reg exp pour la validation email
    let testNom = letters.test(inputNom.value);

    if(!testNom){
        setErrorMessage(inputNom, 'Votre nom doit être composé de lettre et de au moins 1 caractère');
        return false;
    }
    setErrorMessage(inputNom, '')
    return true
}



const validMetier = function(metierInput){
    // creation de la validation metier
    if(metierInput.value == "" || metierInput.value=="Metier"){
        setErrorMessage(metierInput, 'Veuillez choisir un metier')
        return false;
    }
    setErrorMessage(metierInput, '')
    return true
}

const validSexe = function(sexeInput){
    // creation de la validation pour le sexe
    if(sexeInput["value"] == ""){
        setErrorMessage(sexeInput[0].parentElement, "Veuillez choisir un sexe")
        return false;
    }
    setErrorMessage(sexeInput[0].parentElement, '')
    return true
}



const validEmail = function(inputEmail){
    // creation de la reg exp pour la validation email
    let testEmail = email.test(inputEmail.value);

    if(!testEmail){
        setErrorMessage(inputEmail, 'Veuillez entrez un email valide');
        return false;
    }
    setErrorMessage(inputEmail, '')
    return true
}

const validSujet = function(inputSujet){
    if ((inputSujet.value.length>30) || (inputSujet.value.length<3)){
        setErrorMessage(inputSujet, 'le sujet doit comporter 3 à 30 caractères');
        return false
    }
    setErrorMessage(inputSujet, '')
    return true
}

const validMessage = function(inputMessage){
    if ((inputMessage.value.length>160) || (inputMessage.value.length<3)){
        setErrorMessage(inputMessage,'le message doit comporter 3 à 160 caractères');
        return false
    }
    setErrorMessage(inputMessage, '')
    return true
}

const validDate = function(inputDate) {
    now = new Date()
    date = new Date(inputDate.value)
    if(inputDate.value == '' || new Date(inputDate.value).getFullYear() < new Date().getFullYear() - 150 ||  new Date(inputDate.value) > new Date() ) {
        setErrorMessage(inputDate,'Entrez une date valide');
        return false
    }
    setErrorMessage(inputDate, '')
    return true
}
