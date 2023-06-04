<?php
session_start(); 
// Informations de connexion à la base de donnees
$baseDeDonnees = "fitness";

// Connexion à la base de donnees
$connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

// Verifier la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
    echo "non";
}

// ID du coach
$idCoach = $_GET['info']; 

// Verification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jour"]) && isset($_POST["heure"])) {
    $jour = $_POST["jour"];
    $heure = $_POST["heure"];

    // Verification de la disponibilite du creneau
    $requeteVerif = "SELECT Occupe FROM planning WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
    $resultatVerif = mysqli_query($connexion, $requeteVerif);
    if (mysqli_num_rows($resultatVerif) > 0) {
        $creneau = mysqli_fetch_assoc($resultatVerif);
        $occupe = $creneau['Occupe'];

        if (!$occupe) {
            // Mettre à jour le creneau
            $requeteMiseAJour = "UPDATE planning SET Occupe = 1 WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
            mysqli_query($connexion, $requeteMiseAJour);
        } else {
            // Annuler le rendez-vous
            $requeteAnnulation = "UPDATE planning SET Occupe = 0 WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
            mysqli_query($connexion, $requeteAnnulation);
        }
    }
}

// Requête pour recuperer le planning du coach
$requete = "SELECT * FROM planning WHERE Id_Coach = $idCoach";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    // Recuperation des jours distincts
    $jours = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $jour = $creneau['Jour'];
        if (!in_array($jour, $jours)) {
            array_push($jours, $jour);
        }
    }

    // Recuperation des heures de debut et de fin distinctes
    mysqli_data_seek($resultat, 0); // Reinitialiser le pointeur du resultat
    $heuresDebut = array();
    $heuresFin = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $heureDebut = $creneau['Heure_Debut'];
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

    // Lignes du tableau avec les heures de debut et de fin
    foreach ($heuresDebut as $heureDebut) {
        echo "<tr>";
        echo "<th>$heureDebut - " . $heuresFin[0] . "</th>";

        // Cellules avec l'occupation
        foreach ($jours as $jour) {
            mysqli_data_seek($resultat, 0); // Reinitialiser le pointeur du resultat
            $occupe = false;
            while ($creneau = mysqli_fetch_assoc($resultat)) {
                if ($creneau['Jour'] == $jour && $creneau['Heure_Debut'] == $heureDebut) {
                    $occupe = $creneau['Occupe'];
                    break;
                }
            }
            $occupation = $occupe ? "Occupe" : "Libre";
            if (!$occupe) {
                echo "<td><button onclick='prendreRendezVous(\"$jour\", \"$heureDebut\")'>Reserver</button></td>";
            } else {
                echo "<td>$occupation<br/><button onclick='annulerRendezVous(\"$jour\", \"$heureDebut\")'>Annuler</button></td>";
            }

        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun creneau trouve pour ce coach.";
}
?>

<script>
function prendreRendezVous(jour, heure) {
    if (confirm("Voulez-vous reserver ce creneau ?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                location.reload(); // Actualiser la page après la reservation
            }
        };
        xhttp.open("POST", "", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("jour=" + jour + "&heure=" + heure);
    }
}

function annulerRendezVous(jour, heure) {
    if (confirm("Voulez-vous annuler ce rendez-vous ?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                location.reload(); // Actualiser la page après l'annulation
            }
        };
        xhttp.open("POST", "", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("jour=" + jour + "&heure=" + heure);
    }
}
</script>