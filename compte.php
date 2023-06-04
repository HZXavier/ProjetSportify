<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>COMPTE</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper"> 

    <header>
      <h1><br>SPORTIFY : Consultation Sportive</h1>
      <a href="accueil.php">
        <img src="logo.png" width="200" height="100" style="position: absolute; top: 6%; right: 8%; border-radius: 10px;">
      <br></a>
      <div class="line" style="height: 3px; background-color: darkblue;"></div>
      <br><br>
    </header>
    <?php
    session_start(); 
    if (isset($_SESSION['profil'])) {
        echo '<br><br>BIENVENUE '.$_SESSION['client']['Prenom'];
    } else {
        echo 'personne n\'est connecte';
    }
    ?>

   <nav>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="parcourir.php">Tout Parcourir</a></li>
        <li><a href="recherche.php">Recherche</a></li>
        <!-- Seulement pour les clients -->
        <?php if (isset($_SESSION['profil']['']) && $_SESSION['profil'][''] === 'client'): ?>
        <li><a href="rendez_vous.php">Rendez-vous</a></li>
        <?php endif ?>
        <!-- Seulement si personne n'est connecte -->
        <li><a href="compte.php">Votre Compte</a></li>
        <?php if (isset($_SESSION['profil']['']) && $_SESSION['profil'][''] === 'administrateur'): ?>
        <li><a href="ajouter.php">Inscrire</a></li>        
        <li><a href="supprimer.php">Supprimer</a></li>
            <?php endif ?>
        <li><a href="deconnexion.php">SE DECONNECTER</a></li>
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

    <p>VOTRE COMPTE</p><br><br><br>

    <form method="POST" action="compte.php">
      <div style="display: flex; justify-content: center;">
          <input type="radio" name="user_type" value="client" required>Client&nbsp;&nbsp;&nbsp;
          <input type="radio" name="user_type" value="coach" required>Coach&nbsp;&nbsp;&nbsp;
          <input type="radio" name="user_type" value="admin" required>Administrateur
      </div><br><br>
      <input type="text" name="nom" placeholder="Nom :">
      <input type="text" name="prenom" placeholder="Prenom :">
      <input type="mail" name="mail" placeholder="Mail :">
      <button type="submit">Se connecter</button>
    </form>

    <?php
    $baseDeDonnees = "fitness";
    $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

    if (!$connexion) {
        die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userType = $_POST["user_type"];
        echo $userType ;
        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];

        // Coach
        if ($userType == 'coach') {
            $_SESSION['profil'] = 'coach';
            $requete_connexion = "SELECT * FROM coach WHERE Mail = '$mail' AND Nom = '$nom' AND Prenom = '$prenom'";
            $resultat = mysqli_query($connexion, $requete_connexion);

            if (mysqli_num_rows($resultat) > 0) {
                // Les champs correspondent, on cree la session coach
                $requete_recup = "SELECT DISTINCT * FROM coach;";
                $result = mysqli_query($connexion, $requete_recup);
                while ($data = mysqli_fetch_assoc($result)) {
                    $_SESSION['coach']['Id_Coach'] = $data['Id_Coach'];
                    $_SESSION['coach']['Mail'] = $data['Mail'];
                    $_SESSION['coach']['Nom'] = $data['Nom'];
                    $_SESSION['coach']['Prenom'] = $data['Prenom'];
                }

                // Redirection vers la page reservee aux coachs
                exit();
            }
            echo "Vous n'êtes pas enregistre dans la base de donnees des coachs.";
        }

        // Client
        if ($userType == 'client') {
            $_SESSION['profil'][''] = 'client';
           $requete = "SELECT * FROM client WHERE Mail LIKE '".$mail."' AND Nom LIKE '".$nom."' AND Prenom LIKE '".$prenom."'";

            $resultat = mysqli_query($connexion, $requete);


            if ($resultat === false) {
                // Afficher l'erreur de requête
                echo "Erreur de requête : " . mysqli_error($connexion);
                exit();
            }


            if (mysqli_num_rows($resultat) > 0) {
                $requete_recup = "SELECT DISTINCT * FROM client;";
                $result = mysqli_query($connexion, $requete_recup);
                if ($data = mysqli_fetch_assoc($result)) {
                    $_SESSION['client']['Id_Client'] = $data['Id_Client'];
                    $_SESSION['client']['Mail'] = $data['Mail'];
                    $_SESSION['client']['Nom'] = $data['Nom'];
                    $_SESSION['client']['Prenom'] = $data['Prenom'];
                    echo '<pre>';
                    print_r($_SESSION['client']);
                    echo '</pre>';
                }

                // Redirection vers la page reservee aux clients
                exit();
            }
            echo "Vous n'êtes pas enregistre dans la base de donnees des clients.";
        }

        // Administrateur
        if ($userType == 'administrateur') {
            $_SESSION['profil'][''] = 'administrateur';
            $requete = "SELECT * FROM administrateur WHERE Mail = '$mail' AND Nom = '$nom' AND Prenom = '$prenom'";
            $resultat = mysqli_query($connexion, $requete);

            if (mysqli_num_rows($resultat) > 0) {
                // Les champs correspondent, on cree la session administrateur
                $requete_recup = "SELECT DISTINCT * FROM administrateur;";
                $result = mysqli_query($connexion, $requete_recup);
                while ($data = mysqli_fetch_assoc($result)) {
                    $_SESSION['administrateur']['Id_Admin'] = $data['Id_Admin'];
                    $_SESSION['administrateur']['Mail'] = $data['Mail'];
                    $_SESSION['administrateur']['Nom'] = $data['Nom'];
                    $_SESSION['administrateur']['Prenom'] = $data['Prenom'];
                }

                // Redirection vers la page reservee aux administrateurs
                exit();
            }
            echo "Vous n'êtes pas enregistre dans la base de donnees des administrateurs.";
        }
    }

   

    ?>

  </div>

  <footer>
    <p style="text-align: center; font-size: 10pt;">© 2023 Sportify - Tous droits reserves</p>
  </footer>
</body>
</html>
