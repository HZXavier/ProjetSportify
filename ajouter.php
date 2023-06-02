<?php
// Informations de connexion à la base de données
$baseDeDonnees = "sportify";

// Connexion à la base de données
$connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["user_type"];
    $mail = $_POST["mail"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $code_postal = $_POST["code_postal"];
    $ville = $_POST["ville"];
    $pays = $_POST["pays"];

    // client
    if ($userType == 'client') {
        $requete = "INSERT INTO client (Id_Client, Nom, Prénom, Ville, Pays, Code_Postal, Mail, Adresse) VALUES ('852', '$nom', '$prenom', '$ville', '$pays', '$code_postal', '$mail', '$adresse')";
        echo 'après sql';

        $resultat = mysqli_query($connexion, $requete);

        if ($resultat) {
            echo 'Insertion des données du coach réussie.';
        } else {
            echo 'Échec de l\'insertion des données du client : ' . mysqli_error($connexion);
        }
    }

    //coach
    if ($userType == 'coach') {
        $requete = "SELECT * FROM coach WHERE Mail = '$mail' AND Nom = '$nom' AND Prénom = '$prenom'";
        $resultat = mysqli_query($connexion, $requete);

        if ($resultat && mysqli_num_rows($resultat) > 0) {
            // Les champs correspondent, on crée la session coach
            $coach = mysqli_fetch_assoc($resultat);
            $_SESSION["coach"] = true;
            $_SESSION["Mail"] = $mail;
            $_SESSION["Nom"] = $nom;
            $_SESSION["Prenom"] = $prenom;
            echo "Connexion réussie, bienvenue coach $prenom";

            // Redirection vers la page réservée aux clients
            exit();
        } else {
            echo "Vous n'êtes pas enregistré dans la base de données des clients.";
        }
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}

mysqli_close($connexion);
?>
