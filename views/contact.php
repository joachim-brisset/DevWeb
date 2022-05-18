<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> ShoesZone | Contact </title>
        <script type="text/javascript" src="js/contact.js" defer>   </script>

        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
    </head>

    <body>
        
        <?php include "components/header.php" ?> </php>

        <main>
            <h1> Nous contacter : </h1>
            <form method="POST" action="traitement.php" id="form_Saisie" novalidate>

                    <div id="prenom">
                        <input type="text" name="prenom" class="input1" placeholder="Prenom" />
                        <span class="inputError"></span>
                    </div>

                    <div id="nom">
                        <input type="text" name="nom" class="input1" placeholder="Nom"/>
                        <span class="inputError"></span>
                    </div>
                    
                    <div id="email">
                        <input type="email" name="email" class="input2" placeholder="Email"/>
                        <span class="inputError"></span>
                    </div>
                    <div id="lol">
                        <div id="radio1">
                            <input id="homme" type="radio" name="sexe"/>
                            <label for="homme">Homme</label>
                        </div>
                        <div id="radio2">
                            <input id="femme" type="radio" name="sexe"/>
                            <label for="femme">Femme</label>
                        </div>
                        <span id="fixSexe" class="inputError"></span>
                    </div>

                    <div id="date">
                        <label for="naissance"> Date de naissance </label>
                        <input type="date" id="naissance" name="naissance" value="0">
                        <span class="inputError"></span>
                    </div>
                    <div id="metier">
                        <select type="text" name="metier" class="input1">
                            <option selected disabled> Metier</option>
                            <option> Etudiant </option>
                            <option> Entrepeneur </option>
                            <option> Cadre </option>
                            <option> Salarié </option>
                            <option> Sans emploi </option>
                        </select>
                        <span class="inputError"></span>
                    </div>
                    <div id="sujet">
                        <input type="text" name="sujet" class="input2" placeholder="Sujet"/>
                        <span class="inputError"></span>
                    </div>
                    <div id="message">
                        <textarea type="text" name="message" placeholder="Message"></textarea>
                        <span class="inputError"></span>
                    </div>

                    <input type="submit" value="Contacter">
            </form>
        </main>

        <?php include "components/footer.php" ?> </php>

    </body>
</html>