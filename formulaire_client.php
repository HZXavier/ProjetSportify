<!DOCTYPE html>
<html>

<head>
    <title>FORMULAIRE INSCRIPTION</title>
    <meta charset="utf-8">
    <link href="tennis.css" rel="stylesheet" type="text/css" />
    <?php
    // Informations de connexion à la base de données
    $servername = "localhost";
    $username = "nom_utilisateur";
    $password = "mot_de_passe";
    $database = "SPORTIFY";


    //connexion à la base de donnees
    $db_handle =mysqli_connect($servername, $username, $password, $database);
    //verifier si la base de donnees existe
    $db_found =mysqli_select_db($db_handle, $database);
    ?>
</head>

<body>

        <h1>FORMULAIRE INSCRIPTION</h1>
        <h2>CLIENT </h2>

        <div id="identification">
            <form method="post" action="formulaire.php">
                <p><label for="date_naissance"> Date de naissance :</label> <input type="date_naissance" name="date_naissance" id="date_naissance" required></p>

                <p><label for="prenom"> prenom :</label> <input type="text" name="prenom" id="prenom" required></p>
                <p><label for="nom"> nom :</label> <input type="text" name="nom" id="nom" required></p>

                <p><label for="adresse_mail"> adresse_mail </label> <input type="text" name="adresse_mail" id="adresse_mail" 
                        required>adresse_mail</p>

                <p><label for="adresse_postale"> adresse_postale </label> <input type="text" name="adresse_postale" id="adresse_postale" 
                    required>adresse_postale</p>

                <p><label for="info_paiement"> info_paiementinfo_paiement </label> <input type="text" name="info_paiement" id="info_paiement" 
                    required>info_paiement</p>

                <p><label for="mot_de_passe"> Mot_de_passe :</label> <input type="text" name="mot_de_passe" id="mot_de_passe"
                        required></p>

                <p><input name="submit_form" type="submit" value="INSCRIRE"></p>
            </form>
        </div>
    
    
        <h1>Récapitulatif du formulaire</h1>

        <div id="identification">
            <?php
            if (isset($_POST['submit_form'])) {
                // Récupérer les valeurs du formulaire
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $date_naissance = date('Y-m-d');
                $adresse_mail = $_POST['adresse_mail'];
                $mot_de_passe = $_POST['mot_de_passe'];
                $info_paiement = $_POST['info_paiement'];

                
				
				

                // Autres opérations à effectuer avec les données
            } else {
                echo "<p>Aucune donnée n'a été soumise.</p>";
            }

            $sql = "INSERT INTO CLIENT (nom, prenom, date_naissance,adresse_mail) VALUES ('$nom', '$prenom', '$date_naissance','$adresse_mail')";
            ?>
        </div>
    
</body>