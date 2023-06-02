<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "sportify";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    // Requête pour vérifier si les champs correspondent à la base de données
    $requete = "SELECT * FROM coach WHERE Mail = '$mail' AND Nom = '$nom' AND Prenom = '$prenom'";
    $resultat = mysqli_query($connexion, $requete);

    if (mysqli_num_rows($resultat) > 0) {
        // Les champs correspondent, on crée la session coach
        $coach = mysqli_fetch_assoc($resultat);
        $_SESSION["coach"] = true;
        $_SESSION["mail"] = $mail;
        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;

        // Redirection vers la page réservée aux coachs
        echo "Identifiants c bon .";
        
        exit();
    } else {

        // Les champs ne correspondent pas, afficher un message d'erreur ou effectuer une action appropriée
        echo "Identifiants invalides.";
    }
}

?>
