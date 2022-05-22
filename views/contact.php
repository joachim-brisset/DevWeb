<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> ShoesZone | Contact </title>

        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
    </head>

    <body>
        
        <?php include "component/header.php" ?> </php>

        <main>
            <h1> Nous contacter : </h1>
            <form method="GET" action="contact.php" id="form_Saisie" novalidate>

                    <div id="prenom">
                        <input type="text" name="prenom" class="input1" placeholder="Prenom" value="<?= $prenom ?? "" ?>"/>
                        <span class="inputError"><?= $errors['prenom'] ?? "" ?></span>
                    </div>

                    <div id="nom">
                        <input type="text" name="nom" class="input1" placeholder="Nom" value="<?= $nom ?? "" ?>"/>
                        <span class="inputError"><?= $errors['nom'] ?? "" ?></span>
                    </div>
                    
                    <div id="email">
                        <input type="email" name="email" class="input2" placeholder="Email" value="<?= $email ?? "" ?>"/>
                        <span class="inputError"><?= $errors['email'] ?? "" ?></span>
                    </div>
                    <div id="lol">
                        <div id="radio1">
                            <input <?= isset($sexe) && $sexe == "homme" ? "checked" : "" ?> id="homme" type="radio" name="sexe" value="homme"/>
                            <label <?= isset($sexe) && $sexe == "femme" ? "checked" : "" ?> for="homme">Homme</label>
                        </div>
                        <div id="radio2">
                            <input id="femme" type="radio" name="sexe" value="femme"/>
                            <label for="femme">Femme</label>
                        </div>
                        <span id="fixSexe" class="inputError"><?= $errors['sexe'] ?? "" ?></span>
                    </div>

                    <div id="date">
                        <label for="naissance"> Date de naissance </label>
                        <input type="date" id="naissance" name="naissance" value="<?= $naissance ?? "" ?>">
                        <span class="inputError"><?= $errors['naissance'] ?? "" ?></span>
                    </div>
                    <div id="metier">
                        <select type="text" name="metier" class="input1">
                            <option selected disabled> Metier</option>
                            <option <?= isset($metier) && $metier == "Etudiant" ? "selected" : ""?>> Etudiant </option>
                            <option <?= isset($metier) && $metier == "Entrepeneur" ? "selected" : ""?>> Entrepeneur </option>
                            <option <?= isset($metier) && $metier == "Cadre" ? "selected" : ""?>> Cadre </option>
                            <option <?= isset($metier) && $metier == "Salarié" ? "selected" : ""?>> Salarié </option>
                            <option <?= isset($metier) && $metier == "Sans emploi" ? "selected" : ""?>> Sans emploi </option>
                        </select>
                        <span class="inputError"><?= $errors['metier'] ?? "" ?></span>
                    </div>
                    <div id="sujet">
                        <input type="text" name="sujet" class="input2" placeholder="Sujet" value="<?= $sujet ?? "" ?>"/>
                        <span class="inputError"><?= $errors['sujet'] ?? "" ?></span>
                    </div>
                    <div id="message">
                        <textarea type="text" name="message" placeholder="Message"><?= $message ?? "" ?></textarea>
                        <span class="inputError"><?= $errors['message'] ?? "" ?></span>
                    </div>

                    <input type="submit" value="Contacter">
            </form>
        </main>

        <?php include "component/footer.php" ?> </php>

    </body>
</html>