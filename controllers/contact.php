<?php
    require_once("../views/contact.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        
    }
    if (empty($_POST('prenom'))) {
        $errors = ['prenom'] = 'Le prenom est obligatoire.';
    }
    if (empty($_POST('nom'))) {
        $errors = ['nom'] = 'Le nom est obligatoire.';
    }
    if (empty($_POST('email'))) {
        $errors = ['email'] = "l'email est obligatoire.";
    }
    if (empty($_POST('metier'))) {
        $errors = ['metier'] = 'Le metier est obligatoire.';
    }
    if (empty($_POST('sujet'))) {
        $errors = ['sujet'] = 'Le sujet est obligatoire.';
    }
    if (empty($_POST('message'))) {
        $errors = ['message'] = 'Le message est obligatoire.';
    }
    if (empty($_POST('sexe'))) {
        $errors = ['sexe'] = 'Le sexe est obligatoire.';
    }
    if (empty($errors)) {
        $pdo = pdo();
        $pdo->prepare('INSERT INTO posts (prenom, nom) VALUES (?,?)')
            ->execute([$_POST['prenom'], $_POST['nom']);
        $id= $pdo->lastInsertId();

        header("Location: /contact.php?id=$id");
        die();
    }


}
?>
<?php html_partial('header') ?>