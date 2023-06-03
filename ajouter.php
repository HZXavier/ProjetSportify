<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AJOUTER.PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="wrapper">
    <header>
      <h1><br>SPORTIFY : Consultation Sportive</h1>
      <a href="Page_accueil.html">
        <img src="logo.png" width="200" height="100" style="position: absolute; top: 6%; right: 8%; border-radius: 10px;">
      <br></a>
      <div class="line" style="height: 3px; background-color: darkblue;"></div>
      <br><br>
    </header>

   <nav>
        <li><a href="Page_accueil.html">Accueil</a></li>
        <li><a href="parcourir.html">Tout Parcourir</a></li>
        <li><a href="recherche.html">Recherche</a></li>
        <li><a href="rendez_vous.html">Rendez-vous</a></li>
        <li><a href="compte.html">Votre Compte</a></li>
        <li><a href="ajouter.html">inscrire</a></li>
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

        <?php
    // Informations de connexion à la base de données
    $baseDeDonnees = "fitness";

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
        $adresse = $_POST["adresse"];
        $code_postal = $_POST["code_postal"];
        $ville = $_POST["ville"];
        $pays = $_POST["pays"];
        $mdp = $_POST["mdp"];
        $telephone = $_POST["telephone"];

        //coach
        if ($userType == 'coach') {
            $requete = "INSERT INTO coach (Id_Coach, Nom, Prénom, Mail, Mdp, Téléphone) VALUES ('', '$nom', '$prenom', '$mail', '$mdp', '$telephone')";
            echo 'après sql';

            $resultat = mysqli_query($connexion, $requete);

            if ($resultat) {
                echo 'BIENVENUE $prenom';
            } else {
                echo 'Échec de l\'insertion des données du coach : ' . mysqli_error($connexion);
            }
        }
    } else {
        echo "Le formulaire n'a pas été soumis.";
    }

    mysqli_close($connexion);
    ?>
    <nav>
      
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        
    </nav>



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




