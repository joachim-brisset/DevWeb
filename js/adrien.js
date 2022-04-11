function valider() {

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
    


    
}