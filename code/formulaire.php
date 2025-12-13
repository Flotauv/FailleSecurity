<?php
    $nom = '';
    $prenom = '';
    $email = '';
    $telephone = '';
    $numero_carte = '';
    $date = '';
    $pictogramme = '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatureEmoi - Ventes de plantes en ligne</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <section class="test">
        <header class="header-f">
            
            <img src="images/logo.png" alt="Logo du site">
            <nav class="nav-f">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#bests-items">Nos meilleurs ventes</a></li>
                <li><a href="#all-plants">Nos plantes</a></li>
            </nav>
        </header>

    </section>
    <section class="infos-formulaire">
        <h1>Formulaire d'achat</h1>
        <form id='formulaire' method="post">
            <label for="nom">Nom*</label>
            <input type="text" id="nom" name="nom" required />
    

            <label for="prenom">Prénom*</label>
            <input type="text" id="prenom" name="prenom" required />

            <label for="email">Email*</label>
            <input type="text" id="email" name="email" required />

            <label for="telephone">Téléphone*</label>
            <input type="text" id="telephone" name="telephone" required /> <br>

            <h2>Données bancaires</h2>

            <label for="numero-carte">Numéro de carte*</label>
            <input type="text" id="numero-carte" name="numero-carte" required />

            <label for="mois-annee">Mois/Année (MM/AAAA)*</label>
            <input type="text" id="mois-annee" name="mois-annee" required />

            <label for="pictogramme">Pictogramme*</label>
            <input type="text" id="pictogramme" name="pictogramme" required />

            <button type="submit" name="formsend" id="formsend">Valider</button>

        </form>
        <?php

            if(isset($_POST['formsend'])){
                echo "Votre nom :".$_POST['nom'];
                echo "Votre prénom :".$_POST['prénom'];


            }

        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("formulaire").addEventListener("submit", function(e){
                    e.preventDefault();

                    let formData = new FormData();
                    formData.append("nom", document.querySelector("#nom").value.trim());
                    formData.append("prenom", document.querySelector("#prenom").value.trim());
                    formData.append("email", document.querySelector("#email").value.trim());
                    formData.append("telephone", document.querySelector("#telephone").value.trim());
                    formData.append("numero-carte", document.querySelector("#numero-carte").value.trim());
                    formData.append("mois-annee", document.querySelector("#mois-annee").value.trim());
                    formData.append("pictogramme", document.querySelector("#pictogramme").value.trim());

                    let dataObject = Object.fromEntries(formData.entries());
                    console.log(dataObject);

                    document.getElementById("formulaire").reset();

                    // Message de confirmation 
                    // document.getElementById("formulaire").innerHTML = "Commande validée"
                });
                
            });
        </script>
        

    </section>
    
</body>

