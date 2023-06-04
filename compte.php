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

    <form method="POST" action="inscription_client.php">
    <button type="submit">Inscription</button>
    </form>


    <?php
    $baseDeDonnees = "fitness";
    $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);

    // ...
    ?>

  </div>

  <footer>
    <p style="text-align: center; font-size: 10pt;">© 2023 Sportify - Tous droits reserves</p>
  </footer>
</body>
</html>
