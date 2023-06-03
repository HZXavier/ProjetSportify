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

    // coach
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

            // Redirection vers la page réservée aux coachs
            exit();
        } else {
            echo "Vous n'êtes pas enregistré dans la base de données des coachs.";
        }
    }

    //client
    if ($userType == 'client') {
        $requete = "SELECT * FROM client WHERE Mail = '$mail' AND Nom = '$nom' AND Prénom = '$prenom'";
        $resultat = mysqli_query($connexion, $requete);

        if ($resultat && mysqli_num_rows($resultat) > 0) {
            // Les champs correspondent, on crée la session client
            $client = mysqli_fetch_assoc($resultat);
            $_SESSION["client"] = true;
            $_SESSION["Mail"] = $mail;
            $_SESSION["Nom"] = $nom;
            $_SESSION["Prenom"] = $prenom;
            echo "Connexion réussie, bienvenue client $prenom";

            // Redirection vers la page réservée aux clients
            exit();
        } else {
            echo "Vous n'êtes pas enregistré dans la base de données des clients.";
        }
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
