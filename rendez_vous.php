<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>RENDEZ-VOUS</title>
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
    <p>PRENEZ RENDEZ VOUS</p><br>

    <form>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="coach">Coach :</label>
    <select id="coach" name="coach">
      <option value="arnold">Arnold</option>
      <option value="camille">Camille</option>
      <option value="emilie">Emilie</option>
      <option value="nicole">Nicole</option>
      <option value="jean">Jean</option>
      <option value="florent">Florent</option>
      <option value="sebastien">Sebastien</option>
      <option value="pierre">Pierre</option>
      <option value="ragnar">Ragnar</option>
      <option value="tanguy">Tanguy</option>
      <option value="romain">Romain</option>

    </select>

    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required>

    <label for="heure">Heure :</label>
    <input type="time" id="heure" name="heure" required>

    <label for="activite">Activite :</label>
    <select id="activite" name="activite">
      <option value="muscu">Muscu</option>
      <option value="biking">Biking</option>
      <option value="fitness">Fitness</option>
      <option value="cardio_training">Cardio-training</option>
      <option value="cours_collectif">Cours Collectif</option>
      <option value="natation">Natation</option>
      <option value="tennis">Tennis</option>
      <option value="football">FootBall</option>
      <option value="basketball">BasketBall</option>
      <option value="plongeon">Plongeon</option>
    </select>

    <input type="submit" value="Envoyer">
  </form>

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
