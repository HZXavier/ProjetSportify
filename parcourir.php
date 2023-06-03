<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>PARCOURIR</title>
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
    <?php     session_start(); ?>

    <nav>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="parcourir.php">Tout Parcourir</a></li>
        <li><a href="recherche.php">Recherche</a></li>
        <li><a href="rendez_vous.php">Rendez-vous</a></li>
        <li><a href="compte.php">Votre Compte</a></li>
        <li><a href="ajouter.php">Inscrire</a></li>

        <li><a href="supprimer.php">Supprimer</a></li>
      <br><br><br>
      <div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
    </nav>

    <p>DECOUVREZ NOUS EN PARCOURANT NOTRE SITE</p>
    <br><nav>
        <li><a href="activites_sport.php">ACTIVITES SPORTIVES</a></li>
        <li><a href="sports_compet.php">LES SPORTS DE COMPETITION</a></li>
        <li><a href="salle_sport.php">SALLE DE SPORT OMNES</a></li>
    </nav><br>
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
