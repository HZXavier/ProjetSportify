<?php
session_start();

$baseDeDonnees = "fitness";
$connexion = mysqli_connect('localhost', 'root', '',$baseDeDonnees);
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motCle = $_POST["texte_recherche"];
}

$resultats = array();
$tables = array("administrateur", "coach", "client", "carte_bancaire", "salle", "sport", "planning");

foreach ($tables as $table) {
    $requete = "SELECT * FROM " . $table . " WHERE ";
    $colonnes = getCol($table);
    $conditions = array();
    foreach ($colonnes as $colonne) {
        $conditions[] = $colonne . " LIKE '%" . $motCle . "%'";
    }
    $requete .= implode(" OR ", $conditions);
    $resultat = mysqli_query($connexion, $requete);
    if (mysqli_num_rows($resultat) > 0) {
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            $resultats[] = $ligne;
        }
    }
}

echo "Résultats de la recherche : <br><br>";
foreach ($resultats as $resultat) {
    foreach ($resultat as $colonne => $valeur) {
        echo $colonne . ": " . $valeur . "<br>";
    }
    echo "<br>";
}

function getCol($table) {
    $baseDeDonnees = "fitness";
    $connexion = mysqli_connect('localhost', 'root', '',$baseDeDonnees);
    if (!$connexion) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }
    $requete = "SHOW COLUMNS FROM " . $table;
    $resultat = mysqli_query($connexion, $requete);
    $colonnes = array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $colonnes[] = $ligne['Field'];
    }
    mysqli_close($connexion);
    return $colonnes;
}
mysqli_close($connexion);

?>
