<!DOCTYPE html>
<html>
<head>
    <title>Inscription Client</title>
</head>
<body>
    <h2>Inscription Client</h2>

    <?php
    session_start(); 
    $baseDeDonnees = "fitness";
    $conn = new mysqli('localhost', 'root', '', $baseDeDonnees);
    if ($conn->connect_error) {
        die("La connexion à la base de donnees a echoue : " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $adresse = $_POST["adresse"];
        $carteEtd = $_POST["carte_etd"];
        $codePostal = $_POST["code_postal"];
        $ville = $_POST["ville"];
        $pays = $_POST["pays"];

        $sql = "INSERT INTO Client (Id_Client, Nom, Prenom, Mail, Mdp, Adresse, Carte_Etd, Code_Postal, Ville, Pays)
                VALUES ('', '$nom', '$prenom', '$email', '$mdp', '$adresse', '$carteEtd', $codePostal, '$ville', '$pays')";

        if ($conn->query($sql) === TRUE) {
            echo "Inscription reussie !";
        } else {
            echo "Erreur lors de l'inscription : " . $conn->error;
        }
    }

    $conn->close();
    ?>

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
    </form>
</body>
</html>
