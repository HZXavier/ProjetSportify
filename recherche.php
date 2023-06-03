<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>RECHERCHE</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <header>
      <h1><br>SPORTIFY : Consultation Sportive</h1>
      <a href="accueil.php">
        <img src="logo.png" width="200" height="100" style="position: absolute; top: 6%; right: 8%; border-radius: 10px;">
        <br>
      </a>
      <div class="line" style="height: 3px; background-color: darkblue;"></div>
      <br><br>
    </header>

    <nav>
      <ul>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="parcourir.php">Tout Parcourir</a></li>
        <li><a href="recherche.php">Recherche</a></li>
        <li><a href="rendez_vous.php">Rendez-vous</a></li>
        <li><a href="compte.php">Votre Compte</a></li>
        <li><a href="ajouter.php">Inscrire</a></li>
        <li><a href="supprimer.php">Supprimer</a></li>
      </ul>
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

    <p>Faites vos recherches</p><br>

    <form method="POST" action="recherche.php">
      <input type="text" name="texte_recherche" placeholder="Rechercher...">
      <button type="submit">Rechercher</button>
    </form>

    <?php
    function getCol($table, $connexion) {
      $requete = "SHOW COLUMNS FROM " . $table;
      $resultat = mysqli_query($connexion, $requete);
      $colonnes = array();
      while ($ligne = mysqli_fetch_assoc($resultat)) {
        $colonnes[] = $ligne['Field'];
      }
      return $colonnes;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $motCle = $_POST["texte_recherche"];

      $baseDeDonnees = "fitness";
      $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
      if (!$connexion) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
      }

      $resultats = array();
      $tables = array("administrateur", "coach", "client", "carte_bancaire", "salle", "sport", "planning");

      foreach ($tables as $table) {
        $requete = "SELECT * FROM " . $table . " WHERE ";
        $colonnes = getCol($table, $connexion);
        $conditions = array();
        foreach ($colonnes as $colonne) {
          $conditions[] = $colonne . " LIKE '%" . $motCle . "%'";
        }
        $requete .= implode(" OR ", $conditions);
        $resultat = mysqli_query($connexion, $requete);

        // Vérification de la réussite de la requête
        if ($resultat && mysqli_num_rows($resultat) > 0) {
          while ($ligne = mysqli_fetch_assoc($resultat)) {
            $resultats[] = $ligne;
          }
        } else {
          // Gestion de l'erreur de requête
          if (!$resultat) {
            echo "Erreur de requête : " . mysqli_error($connexion);
          } else {
            echo "Aucun résultat trouvé pour la recherche.";
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

      mysqli_close($connexion);
    }
    ?>

    <br><br>
    <footer class="footer">
      <p1>Nous contacter :<br><u>+33 6 61 48 19 96</u>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; 
        <a href="mailto:xavier.heitz@edu.ece.fr">xavier.heitz@edu.ece.fr</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
        <a href="https://maps.google.com/maps?q=66 rue des Champarons, 92700, Colombes" target="_blank">
        66 rue des Champarons, 92700, Colombes</a><br>
        &copy;2023 Sportify</p1>
    </footer>
  </div>
</body>
</html>
