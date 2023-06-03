<?php
// Informations de connexion à la base de données
$baseDeDonnees = "sportify";

// Connexion à la base de données
$connexion = mysqli_connect('localhost', 'root', '',$baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// ID du coach
$idCoach = 1; // Remplacez cette valeur par l'ID du coach que vous souhaitez afficher le planning

// Requête pour récupérer le planning du coach
$requete = "SELECT * FROM planning WHERE ID_COACH = $idCoach";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    // Récupération des jours distincts
    $jours = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $jour = $creneau['JOUR'];
        if (!in_array($jour, $jours)) {
            array_push($jours, $jour);
        }
    }

    // Récupération des heures de début et de fin distinctes
    mysqli_data_seek($resultat, 0); // Réinitialiser le pointeur du résultat
    $heuresDebut = array();
    $heuresFin = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $heureDebut = $creneau['HEURE_DEBUT'];
        $heureFin = $creneau['HEURE_FIN'];
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
                if ($creneau['JOUR'] == $jour && $creneau['HEURE_DEBUT'] == $heureDebut) {
                    $occupe = $creneau['OCCUPE'];
                    break;
                }
            }
            $occupation = $occupe ? "Occupé" : "Libre";
            echo "<td>$occupation</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun créneau trouvé pour ce coach.";
}

?>
