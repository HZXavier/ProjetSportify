<!DOCTYPE html>
<html>
<head>
    <title>Inscription Client</title>
</head>
<body>
    <h2>Inscription Client</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>

        <label for="mdp">Mot de passe:</label>
        <input type="password" name="mdp" required><br><br>

        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" required><br><br>

        <label for="carte_etd">Carte etudiante:</label>
        <input type="text" name="carte_etd"><br><br>

        <label for="code_postal">Code postal:</label>
        <input type="number" name="code_postal" required><br><br>

        <label for="ville">Ville:</label>
        <input type="text" name="ville" required><br><br>

        <label for="pays">Pays:</label>
        <input type="text" name="pays" required><br><br>

        <input type="submit" value="S'inscrire">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </form>
    <?php
    session_start(); 
    $baseDeDonnees = "fitness";
    $connexion = new mysqli('localhost', 'root', '', $baseDeDonnees);
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Nom = $_POST["nom"];
        $Prenom = $_POST["prenom"];
        $Mail = $_POST["email"];
        $Mdp = $_POST["mdp"];
        $Adresse = $_POST["adresse"];
        $Carte_Etd = $_POST["carte_etd"];
        $Code_Postal = $_POST["code_postal"];
        $Ville = $_POST["ville"];
        $Pays = $_POST["pays"];

        $sql = "INSERT INTO client (Id_Client, Nom, Prenom, Mail, Mdp, Adresse, Carte_Etd, Code_Postal, Ville, Pays)
                VALUES ('', '$Nom', '$Prenom', '$Mail', '$Mdp', '$Adresse', '$Carte_Etd', $Code_Postal, '$Ville', '$Pays')";

        if ($connexion->query($sql) === TRUE) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . $connexion->error;
        }
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
