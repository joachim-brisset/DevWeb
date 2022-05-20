<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        require '../views/forbiden.php';
        die();
    }

    $prenom = valid_donnees($_GET["prenom"]);
    $email = valid_donnees($_GET["mail"]);
    $nom = valid_donnees($_GET["nom"]);
    $sexe = valid_donnees($_GET["sexe"]);
    $metier = valid_donnees($_GET["metier"]);
    $sujet = valid_donnees($_GET["sujet"]);
    $message = valid_donnees($_GET["message"]);

    
    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['nom']) && isset($_GET['email']) && isset($_GET['metier']) && isset($_GET['sujet']) && isset($_GET['sexe']) && isset($_GET['message'])){

        if (strlen($_GET['prenom'])<=1 || strlen($_GET['prenom'])){
            $errors['prenom'] = 'le prenom doit être composé entre 1 et 30 caractères';
        }
        if (strlen($_GET['nom'])<=1 || strlen($_GET['nom'])>=30){
            $errors['nom'] = 'le nom doit être composé entre 1 et 30 caractères';
        }
        if (strlen($_GET['sujet'])<=3 || strlen($_GET['sujet']>=30)){
            $errors['sujet'] = 'le sujet doit être composé entre 1 et 30 caractères';
        }
        if (strlen($_GET['message'])<=3 || strlen($_GET['message']>160)){
            $errors['message'] = 'le message doit être composé de 3 à 160 caractères';
        }
        if ($_GET['metier']!= 'Etudiant' && $_GET['metier']!= 'Entrepeneur' && $_GET['metier']!= 'Cadre' && $_GET['metier']!= 'Salarié' && $_GET['metier']!= 'Sans emploi'){
            $errors['metier'] = 'l utilisateur n as pas renplit la case metier';
        }
        if ($_GET['sexe']!='homme' && $_GET['sexe']!='femme'){
            $errors['sexe'] = 'l utilisateur n a pas inscrit sont sexe';
        }
        if preg_match("^[A-z0-9._-]+[@]{1}[a-zA-Z0-9._-]+[.]{1}[a-zA-Z]{2,10}$",$_GET['email']){
            $_errors['email'] = 'l email est incorrecte';
        }
        $prenom = valid_donnees($_GET["prenom"]);
        $email = valid_donnees($_GET["mail"]);
        $nom = valid_donnees($_GET["nom"]);
        $sexe = valid_donnees($_GET["sexe"]);
        $metier = valid_donnees($_GET["metier"]);
        $sujet = valid_donnees($_GET["sujet"]);
        $message = valid_donnees($_GET["message"]);

        
        function valid_donnees($donnees){
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
    }

    if (empty($_GET['prenom'])) {
        $errors['prenom'] = 'Le prenom est obligatoire.';
    }
    if (empty($_GET['nom'])) {
        $errors['nom'] = 'Le nom est obligatoire.';
    }
    if (empty($_GET['email'])) {
        $errors['email'] = "l'email est obligatoire.";
    }
    if (empty($_GET['metier'])) {
        $errors['metier'] = 'Le metier est obligatoire.';
    }
    if (empty($_GET['sujet'])) {
        $errors['sujet'] = 'Le sujet est obligatoire.';
    }
    if (empty($_GET['message'])) {
        $errors['message'] = 'Le message est obligatoire.';
    }
    if (empty($_GET['sexe'])) {
        $errors['sexe'] = 'Le sexe est obligatoire.';
    }

    if (empty($errors)) {
        $pdo = pdo();
        $pdo->prepare('INSERT INTO posts (prenom, nom, email, metier, sujet, `message`, sexe) VALUES (?,?,?,?,?,?,?)');
        $success= $pdo->execute($prenom, $nom, $email, $metier,$sujet, $message, $sexe);

        die();

    } 


require_once("../views/contact.php");
/*
?>
<?php html_partial('header')*/ ?>