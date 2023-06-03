<!DOCTYPE html>
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
    <?php     session_start(); 
    if (isset($_SESSION['profil'])) {
        echo 'qqun est co';        
    }
    else{
        echo 'personne n\'est co';
    }
    ?>

   <nav>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="parcourir.php">Tout Parcourir</a></li>
        <li><a href="recherche.php">Recherche</a></li>
        <!--que les clients-->
        <?php if (isset($_SESSION['profil']) && $_SESSION['profil'] === 'client'): ?>
        <li><a href="rendez_vous.php">Rendez-vous</a></li>
        <?php endif ?>
        <!--que si personne n'est co-->
        <li><a href="compte.php">Votre Compte</a></li>
        <?php if (isset($_SESSION['profil']) && $_SESSION['profil'] === 'admin'): ?>
        <li><a href="ajouter.php">Inscrire</a></li>        
        <li><a href="supprimer.php">Supprimer</a></li>
            <?php endif ?>
        <li><a href="deconnexion.php">SE DECO</a></li>
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

    <p>VOTRE COMPTE</p><br><br><br>

    <form method="POST" action="compte.php">
      <choix_id style="display: flex; justify-content: center;">
          <input type="radio" name="user_type" value="client" required>Client&nbsp;&nbsp;&nbsp;
          <input type="radio" name="user_type" value="coach" required>Coach&nbsp;&nbsp;&nbsp;
          <input type="radio" name="user_type" value="admin" required>Administrateur
      </choix_id><br><br>
      <input type="text" name="nom" placeholder="Nom :">
      <input type="text" name="prenom" placeholder="Prenom :">
      <input type="mail" name="mail" placeholder="Mail :">
      <button type="submit">Se connecter</button>
    </form>

        <?php

    $baseDeDonnees = "fitness";
    $connexion = mysqli_connect('localhost', 'root', '',$baseDeDonnees);

    if (!$connexion) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userType = $_POST["user_type"];
        $mail = $_POST["mail"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];

        // coach
        if($userType == 'coach'){
            $_SESSION['profil'] = 'coach';
            $requete = "SELECT * FROM coach WHERE Mail = '$mail' AND Nom = '$nom' AND Prénom = '$prenom'";
            $resultat = mysqli_query($connexion, $requete);

            if (mysqli_num_rows($resultat) > 0) {
                // Les champs correspondent, on crée la session coach
                $coach = mysqli_fetch_assoc($resultat);
                $_SESSION["Coach"] = true;
                $_SESSION["Mail"] = $mail;
                $_SESSION["Nom"] = $nom;
                $_SESSION["Prenom"] = $prenom;
                

                // Redirection vers la page réservée aux coachs
                exit();
            }
            echo "Vous n'êtes pas enregistré dans la base de données des coachs.";
        }

        //client
        if($userType == 'client'){
            $_SESSION['profil'] = 'client';
            $requete = "SELECT * FROM client WHERE Mail = '$mail' AND Nom = '$nom' AND Prénom = '$prenom'";
            $resultat = mysqli_query($connexion, $requete);

            if (mysqli_num_rows($resultat) > 0) {
                // Les champs correspondent, on crée la session coach
                $coach = mysqli_fetch_assoc($resultat);
                $_SESSION["Coach"] = true;
                $_SESSION["Mail"] = $mail;
                $_SESSION["Nom"] = $nom;
                $_SESSION["Prenom"] = $prenom;
                
                
                // Redirection vers la page réservée aux clients
                exit();
            }
            echo "Vous n'êtes pas enregistré dans la base de données des clients.";
        }

        //admin
        if($userType == 'admin'){
            $_SESSION['profil'] = 'admin';
            $requete = "SELECT * FROM administrateur
             WHERE Mail = '$mail' AND Nom = '$nom' AND Prénom = '$prenom'";
            $resultat = mysqli_query($connexion, $requete);

            if (mysqli_num_rows($resultat) > 0) {
                // Les champs correspondent, on crée la session coach
                $coach = mysqli_fetch_assoc($resultat);
                $_SESSION["Coach"] = true;
                $_SESSION["Mail"] = $mail;
                $_SESSION["Nom"] = $nom;
                $_SESSION["Prenom"] = $prenom;
                
                
                // Redirection vers la page réservée aux clients
                exit();
            }
            echo "Vous n'êtes pas enregistré dans la base de données des administrateurs.";
        }

    }

    else{
        echo "marche pas";
    }
    mysqli_close($connexion);
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
