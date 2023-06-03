<?php
// Informations de connexion à la base de données
$baseDeDonnees = "fitness";

// Connexion à la base de données
$connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    echo "non";
}

// ID du coach
$idCoach = 1; // Remplacez cette valeur par l'ID du coach que vous souhaitez afficher le planning

// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jour"]) && isset($_POST["heure"])) {
    $jour = $_POST["jour"];
    $heure = $_POST["heure"];

    // Vérification de la disponibilité du créneau
    $requeteVerif = "SELECT Occupé FROM planning WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Début = '$heure'";
    $resultatVerif = mysqli_query($connexion, $requeteVerif);
    if (mysqli_num_rows($resultatVerif) > 0) {
        $creneau = mysqli_fetch_assoc($resultatVerif);
        $occupe = $creneau['Occupé'];

        if (!$occupe) {
            // Mettre à jour le créneau
            $requeteMiseAJour = "UPDATE planning SET Occupé = 1 WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Début = '$heure'";
            mysqli_query($connexion, $requeteMiseAJour);
        }
    }
}

// Requête pour récupérer le planning du coach
$requete = "SELECT * FROM planning WHERE Id_Coach = $idCoach";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    // Récupération des jours distincts
    $jours = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $jour = $creneau['Jour'];
        if (!in_array($jour, $jours)) {
            array_push($jours, $jour);
        }
    }

    // Récupération des heures de début et de fin distinctes
    mysqli_data_seek($resultat, 0); // Réinitialiser le pointeur du résultat
    $heuresDebut = array();
    $heuresFin = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $heureDebut = $creneau['Heure_Début'];
        $heureFin = $creneau['Heure_Fin'];
        if (!in_array($heureDebut, $heuresDebut)) {
            array_push($heuresDebut, $heureDebut);
        }
        if (!in_array($heureFin, $heuresFin)) {
            array_push($heuresFin, $heureFin);
        }
    }

    // Affichage du tableau
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th></th>"; // Cellule vide en haut à gauche

    // En-tête des colonnes avec les jours
    foreach ($jours as $jour) {
        echo "<th>$jour</th>";
    }
    echo "</tr>";

    // Lignes du tableau avec les heures de début et de fin
    foreach ($heuresDebut as $heureDebut) {
        echo "<tr>";
        echo "<th>$heureDebut - " . $heuresFin[0] . "</th>";

        // Cellules avec l'occupation
        foreach ($jours as $jour) {
            mysqli_data_seek($resultat, 0); // Réinitialiser le pointeur du résultat
            $occupe = false;
            while ($creneau = mysqli_fetch_assoc($resultat)) {
                if ($creneau['Jour'] == $jour && $creneau['Heure_Début'] == $heureDebut) {
                    $occupe = $creneau['Occupé'];
                    break;
                }
            }
            $occupation = $occupe ? "Occupé" : "Libre";
            if (!$occupe) {
                echo "<td><button onclick='prendreRendezVous(\"$jour\", \"$heureDebut\")'>Réserver</button></td>";
            } else {
                echo "<td>$occupation</td>";
            }

        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun créneau trouvé pour ce coach.";
}
?>

<script>
function prendreRendezVous(jour, heure) {
    if (confirm("Voulez-vous réserver ce créneau ?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                location.reload(); // Actualiser la page après la réservation
            }
        };
        xhttp.open("POST", "", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("jour=" + jour + "&heure=" + heure);
    }
}
</script>
