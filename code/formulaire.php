<?php
    $nom = isset($_POST['nom']);
    $prenom = isset($_POST['prenom']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
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
    <h1>Formulaire d'achat</h1>
    <form method="post" id="formulaire">

        <label for="nom"><strong>Nom :</strong></label>
        <input type="text" name="name" placeholder="Nom" required >

        <label for="prenom"> <strong>Prénom :</strong></label>
        <input type="text" name="prenom" placeholder="Prénom" required >

        <label for="telephone"><strong>Téléphone :</strong></label>
        <input type="text" name="num_telephone" placeholder="Numéro" required>

        <h2>Données bancaires</h2>

        <label for="numero-carte"><strong>Numéro de carte :</strong><label>
        <input type="text" id="numero-carte" name="numero-carte" required />

        <label for="mois-annee"><strong>Mois/Année :</strong></label>
        <input type="text" id="mois-annee" name="mois-annee" required />

        <label for="pictogramme"><strong>Pictogramme :</strong></label>
        <input type="text" id="pictogramme" name="pictogramme" required />

        <input type="submit" name="formsend" id="formsend">
    </form>
    <div id='sumit-infos'>

    <p>
        <?php if (isset($_POST['formsend'])){
        echo "Coordonnées validées avec succès ! M/Mme : ".$_POST['name'].' '.$_POST['prenom'];

    }
    ?>
    </p>
    
    </div>


    
</body>
</html>
