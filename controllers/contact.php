<?php

    require_once "../variables.php";
    
    if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['nom']) && isset($_GET['email']) && isset($_GET['metier']) && isset($_GET['sujet']) && isset($_GET['sexe']) && isset($_GET['message'])){

        function valid_donnees($donnees){
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $prenom = valid_donnees($_GET["prenom"]);
        $email = valid_donnees($_GET["email"]);
        $nom = valid_donnees($_GET["nom"]);
        $sexe = valid_donnees($_GET["sexe"]);
        $metier = valid_donnees($_GET["metier"]);
        $sujet = valid_donnees($_GET["sujet"]);
        $message = valid_donnees($_GET["message"]);

        
        if (strlen($prenom)<=1 || strlen($prenom)>=30){
            $errors['prenom'] = 'le\'prenom doit être composé entre 2 et 30 caractères';
        }
        if (strlen($nom)<=1 || strlen($nom)>=30){
            $errors['nom'] = 'le nom doit être composé entre 2 et 30 caractères';
        }
        if (strlen($sujet)<=3 || strlen($sujet>=30)){
            $errors['sujet'] = 'le sujet doit être composé entre 4 et 30 caractères';
        }
        if (strlen($message)<=3 || strlen($message>160)){
            $errors['message'] = 'le message doit être composé de 4 à 160 caractères';
        }
        if ($metier!= 'Etudiant' && $metier!= 'Entrepeneur' && $metier!= 'Cadre' && $metier!= 'Salarié' && $metier!= 'Sans emploi'){
            $errors['metier'] = 'l\'utilisateur n as pas renplit la case metier';
        }
        if ($sexe!='homme' && $sexe!='femme'){
            $errors['sexe'] = 'l\'utilisateur n a pas inscrit sont sexe';
        }
        if (!preg_match("/^[A-z0-9._-]+[@]{1}[a-zA-Z0-9._-]+[.]{1}[a-zA-Z]{2,10}$/",$email)){
            $errors['email'] = 'l\'email est incorrecte';
        }

        if (empty($errors)) {
            //mail("myaddress@mail.com", $sujet, $message . "\n\n\n prenom : " . $prenom . "\n nom:" . $nom . "\n email:" . $email. "\n sexe :" . $sexe . "\n metier:" . $metier)
            header("Location: /");
            die();
        } 
        
    } else {
        if (isset($_GET['prenom']) && empty($_GET['prenom'])) {
            $errors['prenom'] = 'Le prenom est obligatoire.';
        }
        if (isset($_GET['nom']) && empty($_GET['nom'])) {
            $errors['nom'] = 'Le nom est obligatoire.';
        }
        if (isset($_GET['email']) && empty($_GET['email'])) {
            $errors['email'] = "l'email est obligatoire.";
        }
        if (isset($_GET['metier']) && empty($_GET['metier'])) {
            $errors['metier'] = 'Le metier est obligatoire.';
        }
        if (isset($_GET['sujet']) && empty($_GET['sujet'])) {
            $errors['sujet'] = 'Le sujet est obligatoire.';
        }
        if (isset($_GET['message']) && empty($_GET['message'])) {
            $errors['message'] = 'Le message est obligatoire.';
        }
        if (isset($_GET['sexe']) && empty($_GET['sexe'])) {
            $errors['sexe'] = 'Le sexe est obligatoire.';
        }
    }

require_once("../views/contact.php");
