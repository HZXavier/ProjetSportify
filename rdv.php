<?php
session_start(); 
$baseDeDonnees = "fitness";
$connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
if (!$connexion) {
    die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
    echo "non";
}

$idCoach = $_GET['info'];
$idclient=$_SESSION['client']['Id_Client'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jour"]) && isset($_POST["heure"])) {
    $jour = $_POST["jour"];
    $heure = $_POST["heure"];

    // Verif de la dispo du creneau
    $requeteVerif = "SELECT Occupe FROM planning WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
    $resultatVerif = mysqli_query($connexion, $requeteVerif);
    if (mysqli_num_rows($resultatVerif) > 0) {
        $creneau = mysqli_fetch_assoc($resultatVerif);
        $occupe = $creneau['Occupe'];

        if (!$occupe) {
                // Mettre à jour créneau avec ID client
                $requeteReservation = "UPDATE planning SET Occupe = 1, Id_Client = $idclient WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
                mysqli_query($connexion, $requeteReservation);
            } else {
                // Annuler rdv
                $requeteAnnulation = "UPDATE planning SET Occupe = 0, Id_Client = NULL WHERE Id_Coach = $idCoach AND Jour = '$jour' AND Heure_Debut = '$heure'";
                mysqli_query($connexion, $requeteAnnulation);
            }
    }
}

// Requête pr rqpr planning coach
$requete = "SELECT * FROM planning WHERE Id_Coach = $idCoach";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    // Recuperation jours distincts
    $jours = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $jour = $creneau['Jour'];
        if (!in_array($jour, $jours)) {
            array_push($jours, $jour);
        }
    }

    // Recuperation heures debut et fin distinctes
    mysqli_data_seek($resultat, 0); // Reinitialiser le pointeur du resultat
    $heures = array();
    while ($creneau = mysqli_fetch_assoc($resultat)) {
        $heureDebut = $creneau['Heure_Debut'];
        $heureFin = $creneau['Heure_Fin'];
        if (!isset($heures[$heureDebut])) {
            $heures[$heureDebut] = $heureFin;
        }
    }


    // Affichage tableau
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th></th>";

    foreach ($jours as $jour) {
        echo "<th>$jour</th>";
    }
    echo "</tr>";

    foreach ($heures as $heureDebut => $heureFin) {
        echo "<th>$heureDebut - $heureFin</th>";

        foreach ($jours as $jour) {
            mysqli_data_seek($resultat, 0); // Reinitialiser pointeur resultat
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
                location.reload();
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
                location.reload();
            }
        };
        xhttp.open("POST", "", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("jour=" + jour + "&heure=" + heure);
    }
}
</script>
