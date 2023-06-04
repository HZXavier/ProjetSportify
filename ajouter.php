<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AJOUTER </title>
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
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

    <p>AJOUT D'UN COACH </p><br><br><br>

    <form method="POST" action="ajouter.php">
      <choix_id style="display: flex; justify-content: center;">
          <input type="radio" name="user_type" value="coach" required>Coach&nbsp;&nbsp;&nbsp;
      </choix_id><br><br>
      <input type="text" name="nom" placeholder="Nom :">
      <input type="text" name="prenom" placeholder="Prenom :">
      <input type="mail" name="mail" placeholder="Mail :">
      <input type="text" name="mdp" placeholder="Mot de passe :">
      <input type="text" name="adresse" placeholder="adresse :">
      <input type="text" name="ville" placeholder="ville :">
      <input type="text" name="pays" placeholder="pays :">
      <input type="text" name="code_postal" placeholder="code_postal :">
      <input type="text" name="telephone" placeholder="telephone :">

      <button type="submit">inscrire</button>
    </form>

     <?php
    // Informations de connexion à la base de donnees
    $baseDeDonnees = "fitness";

    // Connexion à la base de donnees
    $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

    // Verifier la connexion
    if (!$connexion) {
        die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
    }
    if ($_SESSION['profil'] === 'admin') {

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
            $requete = "INSERT INTO coach (Id_Coach, Nom, Prenom, Mail, Mdp, Telephone) VALUES ('', '$nom', '$prenom', '$mail', '$mdp', '$telephone')";
            echo 'après sql';

            $resultat = mysqli_query($connexion, $requete);

            if ($resultat) {
                echo 'BIENVENUE $prenom';
            } else {
                echo 'echec de l\'insertion des donnees du coach : ' . mysqli_error($connexion);
            }
        }
    }
    }

     else {
        echo "Le formulaire n'a pas ete soumis.";
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
