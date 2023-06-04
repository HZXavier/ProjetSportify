<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPORT DE COMPET</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<header>
	      <h1><br>SPORTIFY : Consultation Sportive</h1>
	      <a href="accueil.php">
	        <img src="logo.png" width="200" height="100"
	        	style="position: absolute; top: 6%; right: 8%; border-radius: 10px;">
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
	    <p>DECOUVREZ NOUS EN PARCOURANT NOTRE SITE</p>
	    <br><nav>
	        <li><a href="activites_sport.php">ACTIVITES SPORTIVES</a></li>
	        <li><a href="sports_compet.php">LES SPORTS DE COMPETITION</a></li>
	        <li><a href="salle_sport.php">SALLE DE SPORT OMNES</a></li>
	    </nav><br>
	    <br><div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
	    <h2>NOS SPORTS DE COMPETITION</h2><br><br>
		<p style ="text-align: justify;">Vivez l'excitation de la competition et poussez vos limites avec notre entreprise de sports de competition de renom. Que vous soyez passionne de basket, de foot, de rugby, de natation, de plongeon ou de tennis, nous offrons une experience inegalee pour tous les athlètes en herbe. Rejoignez-nous dès maintenant et decouvrez un environnement dynamique où la camaraderie et l'adrenaline se rencontrent. Avec nos installations de pointe et nos entraîneurs experimentes, vous serez soutenu et guide vers l'excellence sportive. Ne manquez pas l'opportunite de vous mesurer aux meilleurs et de faire partie d'une communaute de competiteurs devoues. Inscrivez-vous dès aujourd'hui et preparez-vous à vivre des moments de victoire et de depassement de soi inoubliables.<br>
		</p>
		<h1>NOS COACHS OMNES</h1>
 
    


  <div class="titre-volet"   onclick="ouvrirVolet('ragnar')"><h2>FOOTBALL</h2> </div>
  <div class="volet" id="ragnar">
    <div class="contenu-volet">
      <p><br>
        Le football est bien plus qu'un simple sport, c'est une activite qui offre de nombreux bienfaits pour la sante physique et mentale. En pratiquant regulièrement le football, on developpe une excellente condition physique. Les seances d'entraînement intensives sollicitent le système cardiovasculaire, ameliorant ainsi l'endurance et la capacite pulmonaire. Courir, sprinter, changer de direction et dribbler stimule la coordination motrice, la vitesse et l'agilite.<br>

Le football favorise egalement le renforcement musculaire. Les mouvements frequents tels que les passes, les tirs et les dribbles sollicitent les muscles des jambes, des bras et du tronc. Les sprints et les sauts repetes contribuent à renforcer les muscles du bas du corps, y compris les quadriceps, les ischio-jambiers et les mollets. Le jeu en equipe encourage egalement la cooperation, la communication et le travail d'equipe.<br>

En plus des bienfaits physiques, le football offre des avantages pour la sante mentale. Il contribue à la liberation d'endorphines, les hormones du bonheur, procurant une sensation de bien-être et de joie. Le football permet de gerer le stress, d'ameliorer la concentration et de developper des competences de prise de decision rapide. Il favorise egalement la discipline, la perseverance et la confiance en soi.<br>

Le football est un sport social qui permet de nouer des amities durables. Jouer en equipe favorise la communication, la cooperation et le respect des autres. Les matchs et les entraînements offrent egalement une opportunite de socialisation et de camaraderie.<br>

En conclusion, le football presente de nombreux bienfaits pour la sante physique et mentale. Il ameliore l'endurance, renforce les muscles, favorise la coordination et stimule le developpement de competences sociales. Que vous jouiez en equipe ou simplement pour le plaisir, le football est une activite complète qui offre des avantages à la fois sur le plan physique et mental. Alors, enfilez vos chaussures de football, prenez le ballon et profitez de tous les bienfaits que ce sport passionnant peut vous offrir.<br>
      </p>
      <figure style="text-align: center">
        <img class="centered"src="ragnar.png"  width="450" height="562"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=1">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	      <li> <button onclick="openProfile('cv_ragnar.xml')">CV </button></li>
      </nav>
      <p style="text-align: justify;">
        <?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 1";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
Professeur de Football | 30 ans<br>
Adresse : 1 impasse des cerises<br>
Telephone : +33620948312<br>

PROFIL PROFESSIONNEL<br><br>
Professeur de Football passionne avec une solide experience dans l'enseignement des techniques de fitness, de renforcement musculaire et de sports de combat. Expert dans la conception de programmes d'entraînement personnalises, axes sur les objectifs individuels des clients. Bon communicateur et motive à aider les autres à atteindre leur plein potentiel physique et mental.<br><br>

FORMATION<br><br>
- Licence en education Physique et Sportive, Universite de Paris, 2015<br>
- Certificat d'entraîneur de Football, 2016<br>
- Certificat d'entraîneur de Rugby, 2019<br><br>

EXPeRIENCE PROFESSIONNELLE<br><br>
- Professeur de Football |Terrain OMNES, Paris, 2010-Present<br>
- Concevoir et mettre en œuvre des programmes d'entraînement individualises pour les clients, en tenant compte de leurs objectifs, de leur condition physique et de leurs limitations.<br>
- Enseigner et demontrer les techniques de musculation et de MMA de manière sûre et efficace.<br>
- Fournir des conseils et un soutien nutritionnels pour maximiser les resultats des clients.<br>
- evaluer et suivre les progrès des clients, en ajustant les programmes d'entraînement en consequence.<br>
- Organiser des seminaires et des ateliers pour promouvoir les bienfaits de la musculation et des sports de combat.<br>
- Assistant d'entraîneur | Basic FIT, Orgeval, 2013-2015<br>
- Assister le professeur principal dans la supervision des seances d'entraînement de musculation et de MMA.<br>
- Encourager et motiver les clients pendant les seances d'entraînement.<br>
- Aider à la mise en place et au rangement du materiel d'entraînement.<br>
- Surveiller la securite des clients et intervenir en cas de besoin.<br><br>

COMPeTENCES<br><br>
- Excellente connaissance des techniques de musculation et des sports de combat.<br>
- Capacite à elaborer des programmes d'entraînement personnalises en fonction des objectifs et des besoins individuels.<br>
- Competences en communication pour transmettre efficacement les instructions et les conseils aux clients.<br>
- Sens de l'observation aigu pour corriger les erreurs de technique et prevenir les blessures.<br>
- Capacite à motiver et à inspirer les autres à atteindre leurs objectifs.<br>

      </p>
       
    </div>
  </div>

  <div class="titre-volet" onclick="ouvrirVolet('juju')"><h2>NATATION</h2></div>
  <div class="volet" id="juju">
    <div class="contenu-volet">
      <p><br>
        
        La natation est un sport complet qui offre de nombreux bienfaits pour la sante physique et mentale. En pratiquant regulièrement la natation, vous pouvez ameliorer votre endurance cardiorespiratoire. Les mouvements de nage constants sollicitent le cœur et les poumons, renforçant ainsi le système cardiovasculaire et ameliorant la capacite pulmonaire.<br>

La natation est egalement un excellent moyen de renforcer tous les groupes musculaires du corps. Les differents styles de nage, tels que la brasse, le crawl, le dos crawle et le papillon, font travailler les muscles des bras, des jambes, du dos, des epaules et du tronc. Cette activite contribue à developper la force musculaire et l'endurance.<br>

La natation est un sport à faible impact, ce qui signifie qu'elle exerce moins de stress sur les articulations par rapport à d'autres sports. Cela en fait une excellente option pour les personnes ayant des problèmes articulaires ou des blessures, ainsi que pour les personnes en phase de reeducation.<br>

La natation favorise egalement la flexibilite et l'amplitude des mouvements. Les mouvements fluides et repetitifs de la nage aident à ameliorer la souplesse des articulations, des muscles et des tendons, ce qui peut reduire le risque de blessures.<br>

La natation est un sport qui peut être pratique par tous, independamment de l'âge ou du niveau de condition physique. Elle convient aussi bien aux enfants qu'aux personnes âgees, offrant des bienfaits pour la sante tout au long de la vie.<br>

Outre les bienfaits physiques, la natation est egalement benefique pour la sante mentale. Elle peut aider à reduire le stress, l'anxiete et la tension musculaire. La sensation de legèrete et de liberte dans l'eau procure une sensation de bien-être et de relaxation.<br>

La natation est egalement un excellent moyen de socialiser. Que ce soit en participant à des cours en groupe, en s'entraînant avec des amis ou en rejoignant une equipe de natation, cela offre l'opportunite de rencontrer de nouvelles personnes partageant la même passion.<br>

La natation est egalement recommandee pour les personnes souffrant de certaines conditions medicales, comme l'asthme ou les problèmes de dos. Elle peut contribuer à ameliorer la fonction pulmonaire et à soulager les douleurs dorsales.<br>

En conclusion, la natation est un sport complet qui offre de nombreux bienfaits pour la sante physique et mentale. Elle ameliore l'endurance, renforce les muscles, favorise la flexibilite et offre une experience de relaxation dans l'eau. Que vous cherchiez à ameliorer votre condition physique, à vous detendre ou à socialiser, la natation est une activite polyvalente accessible à tous. Alors, enfilez votre maillot de bain, plongez dans l'eau et profitez des nombreux avantages que la natation a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="florent.png"  width="450" height="298"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=2">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	      <li> <button onclick="openProfile('cv_florent.xml')">CV </button></li>
      </nav>
      <p style="text-align: justify;"><br>
<?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 2";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
32 ans | Professeur de natation<br>
Adresse : 12 impasse des bassins<br>
Telephone : +33620268312<br>


EXPERIENCES PROFESSIONNELLES:<br><BR>
- 2010-present: Professeur de natation, Bassin de Omnes, Paris<br>
  - Enseigner les techniques de natation à des enfants et adultes de tous niveaux.<br>
  - elaborer des programmes d'entraînement personnalises pour les nageurs competitifs.<br>
  - Surveiller la securite des nageurs et fournir des conseils pour ameliorer leurs performances.<br>
  
- 2008-2010: Assistant Professeur de natation, Piscine Municipale, Lyon<br>
  - Assister les instructeurs de natation dans la gestion des cours collectifs.<br>
  - Aider les debutants à apprendre les bases de la natation.<br>
  - Encourager les nageurs à progresser et à developper leur confiance en eux.<br><BR>

FORMATION:<br><BR>
- 2006-2008: Brevet d'etat d'educateur Sportif, specialite Natation, Centre de Formation des educateurs Sportifs, Lyon<br>
  - Formation complète en natation, comprenant l'enseignement des techniques de nage, la securite aquatique et la pedagogie.
  <br>
- 2004-2006: Baccalaureat Scientifique, Lycee Louis Pasteur, Lyon<br>
  - Obtention du baccalaureat avec mention, mettant l'accent sur les sciences et les mathematiques.<br><BR>

COMPETENCES:<br><BR>
- Maîtrise des differentes techniques de natation (crawl, brasse, dos crawle, papillon).<br>
- Connaissance approfondie des principes de la securite aquatique.<br>
- Capacite à elaborer des programmes d'entraînement adaptes aux besoins individuels des nageurs.<br>
- Excellentes competences en communication pour expliquer les mouvements et les techniques de natation.<br>
- Aptitude à creer un environnement d'apprentissage positif et motivant.<br><BR>

LANGUES:<br><BR>
- Français (langue maternelle)<br>
- Anglais (niveau intermediaire)<br><br></p>
      
    </div>
  </div>

  

  <div class="titre-volet" onclick="ouvrirVolet('pierre')"><h2>TENNIS</h2></div>
  <div class="volet" id="pierre">
    <div class="contenu-volet">
      <p style="text-align: justify;"> <br>
        Le tennis est un sport passionnant qui offre de nombreux bienfaits pour la sante physique et mentale. En plus d'être une activite amusante, le tennis permet de developper l'endurance, la coordination, la force musculaire et la souplesse. Les mouvements rapides et les changements de direction frequents sollicitent tous les groupes musculaires du corps, contribuant ainsi à ameliorer la condition physique generale.<br>

En jouant au tennis regulièrement, vous pouvez ameliorer votre sante cardiovasculaire en augmentant votre frequence cardiaque et en favorisant la circulation sanguine. Cela aide à renforcer le cœur et les poumons, reduisant ainsi le risque de maladies cardiovasculaires.<br>

Le tennis est egalement benefique pour le renforcement des os, ce qui peut aider à prevenir l'osteoporose et à ameliorer la densite osseuse. Les mouvements de saut, de pivotement et de frappe de balle sollicitent les os, favorisant ainsi leur croissance et leur resistance.<br>

En plus des bienfaits physiques, le tennis offre egalement des avantages mentaux. Il favorise la concentration, la coordination œil-main et la prise de decision rapide. En anticipant les mouvements de l'adversaire et en reagissant rapidement, vous ameliorez vos capacites cognitives.<br>

Le tennis est un sport social qui favorise les interactions sociales et la creation de liens. Jouer en equipe ou en double permet de developper des competences de communication, de cooperation et de fair-play. De plus, participer à des tournois ou à des rencontres amicales peut être une excellente occasion de rencontrer de nouvelles personnes partageant la même passion.<br>

Enfin, le tennis est un excellent moyen de reduire le stress et de favoriser le bien-être mental. La concentration requise pendant le jeu permet de se deconnecter des soucis quotidiens et de se focaliser sur l'instant present. Les endorphines liberees pendant l'activite physique procurent une sensation de bien-être et aident à soulager le stress et l'anxiete.<br>
        

      </p>
      <figure style="text-align: center">
      <img class="centered"src="pierre_menes.png"  width="600" height="300"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=3">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	      <li> <button onclick="openProfile('cv_pierre.xml')">CV </button></li>
      </nav>
      <p style="text-align: justify;">
        <?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 3";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
Coach de Tennis | 56 ans<br>
Adresse : 123 Rue du Tennis, 75000 Paris<br>
Telephone : 06 78 56 45 12<br>

PROFIL PROFESSIONNEL<br><br>
Coach de tennis passionne avec plus de 20 ans d'experience dans l'enseignement du tennis à des joueurs de tous niveaux. Competent dans la conception de programmes d'entraînement adaptes aux besoins individuels des joueurs et dans la gestion de leur progression. Bon communicateur, motive à aider les joueurs à atteindre leurs objectifs et à ameliorer leurs performances sur le court.<br><br>

FORMATION<br><br>
- Diplôme d'Entraîneur de Tennis, Federation Française de Tennis, 1999<br>
- Formation en Gestion et Psychologie du Sport, Centre de Formation des Entraîneurs, 2002<br><br>

EXPeRIENCE PROFESSIONNELLE<br><br>
Coach de Tennis | SALLE OMNES, Paris | 2000 - Present<br>
- Enseignement du tennis à des joueurs de tous âges et de tous niveaux, des debutants aux joueurs de competition.<br>
- Conception de programmes d'entraînement personnalises pour les joueurs en fonction de leurs objectifs et de leurs capacites.<br>
- Organisation et animation de seances d'entraînement collectives et individuelles pour ameliorer les competences techniques, tactiques et physiques des joueurs.<br>
- Analyse des performances des joueurs lors des matchs et des entraînements, et fourniture de conseils pour ameliorer leur jeu.<br>
- Encouragement et motivation des joueurs à repousser leurs limites et à atteindre leurs objectifs tennistiques.<br><br>

Coach de Tennis | Centre de Formation de Jeunes Talents, Lyon | 1996 - 2000<br><br>
- Encadrement et entraînement de jeunes joueurs prometteurs âges de 12 à 18 ans.<br>
- Organisation de stages d'entraînement intensifs pour developper les competences techniques et tactiques des joueurs.<br>
- Suivi individuel des joueurs pour evaluer leur progression et apporter des ajustements aux programmes d'entraînement.<br><br>

COMPeTENCES<br><br>
- Excellente connaissance des techniques et des strategies du tennis.<br>
- Capacite à concevoir des programmes d'entraînement adaptes aux besoins individuels des joueurs.<br>
- Competences en communication pour transmettre efficacement les instructions et les conseils aux joueurs.<br>
- Capacite à analyser les performances des joueurs et à fournir des retours constructifs.<br>
- Souci de la securite des joueurs lors des seances d'entraînement.<br><br>
</p>
    </div>
  </div>

  

  

  <div class="titre-volet" onclick="ouvrirVolet('tanguy')"><h2>BASKETBALL</h2></div>
  <div class="volet" id="tanguy">
    <div class="contenu-volet">
      <p><br>
        Le basketball est un sport dynamique qui offre de nombreux bienfaits pour la sante physique et mentale. Jouer regulièrement au basketball permet de developper l'endurance, la coordination, l'agilite et la force musculaire. Les mouvements rapides, les sauts et les sprints sollicitent tous les groupes musculaires du corps, contribuant ainsi à ameliorer la condition physique globale.<br>

En pratiquant le basketball, vous pouvez ameliorer votre sante cardiovasculaire en augmentant votre frequence cardiaque et en favorisant la circulation sanguine. Cela aide à renforcer le cœur et les poumons, reduisant ainsi le risque de maladies cardiovasculaires.<br>

Le basketball favorise egalement le developpement des capacites motrices, en ameliorant l'equilibre, la coordination œil-main et la precision des mouvements. Les dribbles, les passes et les tirs necessitent une bonne coordination entre les mains, les yeux et les pieds, ce qui contribue à affiner les competences motrices fines.<br>

En plus des bienfaits physiques, le basketball offre egalement des avantages mentaux. Il stimule la concentration, la prise de decision rapide et la strategie. En anticipant les mouvements des adversaires et en prenant des decisions tactiques, vous ameliorez vos capacites cognitives et votre capacite à resoudre les problèmes en temps reel.<br>

Le basketball est un sport d'equipe qui favorise les interactions sociales et le travail en groupe. Jouer en equipe developpe des competences de communication, de cooperation et de confiance mutuelle. Il offre egalement des opportunites de rencontrer de nouvelles personnes partageant la même passion et de se faire de nouveaux amis.<br>

Le basketball est un excellent moyen de brûler des calories et de maintenir un poids sante. Les mouvements intensifs et les efforts physiques soutenus lors d'un match de basketball permettent de depenser beaucoup d'energie, ce qui contribue à la perte de poids et à l'amelioration de la composition corporelle.<br>

Enfin, le basketball est une activite ludique qui procure du plaisir et favorise le bien-être mental. Jouer au basketball peut être une excellente façon de se detendre, de se divertir et de se liberer du stress quotidien. Les moments de competition, de camaraderie et de joie partagee sur le terrain peuvent apporter une sensation de satisfaction et de bonheur.<br>

En conclusion, le basketball offre une multitude de bienfaits pour la sante physique et mentale. Que ce soit pour ameliorer votre condition physique, developper vos competences motrices, renforcer votre endurance, creer des liens sociaux ou simplement vous amuser, le basketball est un sport complet qui peut être pratique à tout âge. Alors, enfilez vos baskets, prenez un ballon et profitez des nombreux avantages que le basketball a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="nain_indien.png"  width="450" height="300"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=4">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	       <li><button onclick="openProfile('cv_tanguy.xml')">CV </button></li>
      </nav>
      <p style="text-align: justify;">
        <?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 4";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
Coach Basketball | 14 ans<br>
Adresse : 456 Rue du Bien-Être, 75000 Paris<br>
Telephone : 06 63 52 41 78<br>

PROFIL PROFESSIONNEL<br><br>
Jeune coach Basketball passionne par le developpement personnel et l'amelioration de la performance mentale. Competent dans l'accompagnement de personnes de tous âges pour les aider à atteindre leurs objectifs, à renforcer leur confiance en eux et à developper des strategies de gestion du stress. Bon communicateur et motive à inspirer les autres à developper leur plein potentiel.<br><br>

FORMATION<br><br>
- Certificat Basketball, Institut du Developpement Personnel, 2021<br>
- Formation en Gestion du Stress et de l'Anxiete, Centre de Formation en Psychologie, 2020<br><br>

EXPeRIENCE PROFESSIONNELLE<br><br>
Coach Basketball | SALLE OMNES, Paris | 2021 - Present<br>
- Accompagnement de personnes de tous âges dans leur developpement personnel et professionnel.<br>
- ecoute active et comprehension des besoins individuels des clients.<br>
- Utilisation de techniques de coaching mental telles que la visualisation, la reprogrammation mentale et la gestion du stress pour aider les clients à atteindre leurs objectifs.<br>
- Creation de plans d'action personnalises et suivi regulier des progrès realises par les clients.<br>
- Encouragement et motivation des clients à surmonter les obstacles et à adopter des pensees positives.<br><br>

Stagiaire en Coaching Mental | Centre de Developpement Personnel, Lyon | ete 2020<br><br>
- Observation et participation aux seances de coaching individuel.<br>
- Preparation des supports pedagogiques pour les ateliers de developpement personnel.<br>
- Assistance aux coachs mentaux dans leurs seances et suivi des clients.<br><br>

COMPeTENCES<br><br>
- Excellente capacite d'ecoute et d'empathie.<br>
- Competences en communication pour etablir une relation de confiance avec les clients.<br>
- Capacite à utiliser des techniques de coaching mental pour aider les clients à surmonter les obstacles et à ameliorer leurs performances mentales.<br>
- Maîtrise des strategies de gestion du stress et de l'anxiete.<br>
- Souci du bien-être et de la confidentialite des clients.<br><br>

</p>
    </div>
  </div>

  


  <div class="titre-volet" onclick="ouvrirVolet('romain')"><h2>PLONGEON</h2></div>
  <div class="volet" id="romain">
    <div class="contenu-volet">
      <figure style="text-align: center">
      <img class="centered"src="nain.png"  width="250" height="281"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=5">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	      <li><button onclick="openProfile('cv_romain.xml')">CV </button></li>
      </nav>
      <p style="text-align: justify;">
        <?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 5";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
Coach plongeon | 33 ans<br>
Adresse : 789 Rue de l'Inclusion, 75000 Paris<br>
Telephone : 06 74 41 52 63<br>

PROFIL PROFESSIONNEL<br><br>
Coach devoue et passionne specialise dans la danse auqatique pour les personnes en situation de handicap. Experimente dans l'adaptation des exercices et des programmes d'entraînement pour repondre aux besoins individuels des athlètes handisport. Competent dans la motivation et l'inspiration des sportifs pour repousser leurs limites et atteindre leurs objectifs. Engage dans l'inclusion et l'autonomisation des personnes en situation de handicap.<br><br>

FORMATION<br><br>
- Diplôme de plongeon, Federation Française de Plongeon, 2010<br>
- Formation en Handisport et Adaptation de l'Entraînement, Centre de Formation Handisport, 2012<br><br>

EXPeRIENCE PROFESSIONNELLE<br><br>
Coach Plongeon Handisport | SALLE OMNES, Paris | 2013 - Present<br>
- Conception de programmes d'entraînement adaptes aux besoins specifiques des athlètes en situation de handicap.<br>
- Adaptation des exercices pour tenir compte des limitations physiques des sportifs.<br>
- Encadrement et motivation des athlètes pendant les seances d'entraînement pour les aider à atteindre leurs objectifs de musculation.<br>
- Collaboration etroite avec les professionnels de la sante et les physiotherapeutes pour optimiser la recuperation et minimiser les risques de blessure.<br>
- Participation aux competitions handisport en tant que coach et soutien des athlètes lors des epreuves.<br><br>

Coach Personnel | Centre de Readaptation, Lyon | 2010 - 2013<br><br>
- Encadrement individuel des personnes en situation de handicap pour les aider à developper leur force musculaire et leur mobilite.<br>
- Creation de programmes d'entraînement personnalises pour soutenir la readaptation physique et ameliorer la qualite de vie des clients.<br>
- Utilisation d'equipements adaptes et d'outils de soutien pour faciliter l'entraînement des personnes en situation de handicap.<br><br>

COMPeTENCES<br><br>
- Excellente connaissance des techniques de musculation et de renforcement musculaire.<br>
- Capacite à adapter les exercices et les programmes d'entraînement en fonction des limitations physiques des sportifs en situation de handicap.<br>
- Competences en communication pour etablir une relation de confiance avec les athlètes et les motiver à repousser leurs limites.<br>
- Sensibilisation aux besoins specifiques des personnes en situation de handicap et engagement envers l'inclusion et l'autonomisation.<br>
- Souci de la securite et du bien-être des athlètes pendant les seances d'entraînement.<br><br>

</p>
    </div>
  </div>

  <div class="titre-volet" onclick="ouvrirVolet('rugby')"><h2>RUGBY</h2></div>
  <div class="volet" id="rugby">
    <div class="contenu-volet">
      <p>
        <br>
        Le rugby est un sport physique qui offre de nombreux bienfaits pour la sante physique et mentale. Jouer regulièrement au rugby permet de developper la force, l'endurance, la coordination et l'agilite. Les mouvements intenses, les plaquages et les courses sollicitent tous les groupes musculaires du corps, contribuant ainsi à ameliorer la condition physique globale.<br>

Le rugby est egalement benefique pour la sante cardiovasculaire. Les efforts soutenus et l'intensite des matchs de rugby aident à renforcer le cœur et les poumons, ameliorant ainsi la capacite cardiorespiratoire.<br>

En pratiquant le rugby, vous pouvez egalement ameliorer votre coordination œil-main et votre prise de decision rapide. Les passes precises, les mouvements de dribble et les prises de decision tactiques necessitent une excellente coordination entre les mains et les yeux, ainsi qu'une reactivite mentale rapide.<br>

Le rugby est un sport d'equipe qui favorise les interactions sociales et le travail en groupe. Jouer en equipe developpe des competences de communication, de cooperation et de confiance mutuelle. Il renforce egalement le sentiment d'appartenance à un groupe et favorise la creation de liens solides avec ses coequipiers.<br>

Le rugby est un excellent moyen de renforcer les os et les muscles. Les contacts physiques et les charges lors des matchs de rugby contribuent à renforcer la densite osseuse et à developper la masse musculaire, reduisant ainsi le risque de fractures et de blessures.<br>

En plus des bienfaits physiques, le rugby offre egalement des avantages mentaux. Il stimule la concentration, la strategie et la prise de decision sous pression. Le rugby necessite une reflexion rapide et une adaptation constante aux situations changeantes, ce qui renforce les competences cognitives.
<br>
Le rugby favorise egalement la gestion du stress et l'amelioration de la resilience mentale. Les situations de matchs intenses et la necessite de s'adapter rapidement à des adversaires agressifs renforcent la capacite à gerer les situations stressantes et à maintenir un esprit combatif.<br>

Enfin, le rugby procure du plaisir et favorise le bien-être mental. Les moments de competition, les victoires partagees et les liens etroits crees avec les coequipiers procurent une grande satisfaction et un sentiment d'accomplissement.<br>

En conclusion, le rugby offre une multitude de bienfaits pour la sante physique et mentale. Que ce soit pour ameliorer votre condition physique, developper vos competences tactiques, renforcer vos os et vos muscles, creer des liens sociaux ou simplement vous amuser, le rugby est un sport complet qui peut être pratique à tout âge. Alors, mettez votre maillot, enfilez vos crampons et profitez des nombreux avantages que le rugby a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="chabal.png"  width="450" height="300"/>  
      </figure>
      <nav>
        <li><a href="rdv.php?info=6">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
	      
	      <li><button onclick="openProfile('cv_chabal.xml')">CV </button></li>
      </nav>

      
      <p style="text-align: justify;">
        <?php 
          $baseDeDonnees = "fitness";
          $connexion = mysqli_connect('localhost', 'root', '', $baseDeDonnees);
          if (!$connexion) {
              die("Erreur de connexion à la base de donnees : " . mysqli_connect_error());
              echo "non";
          }
          $requete1 = "SELECT Nom, Prenom, Mail FROM coach WHERE Id_Coach LIKE 6";
          $resultat = mysqli_query($connexion, $requete1);
          if (!$resultat) {
              die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
          }
          while ($row = mysqli_fetch_assoc($resultat)) {
              $nom = $row['Nom'];
              $prenom = $row['Prenom'];
              $mail = $row['Mail'];
              
              // Affichage des données
              echo "Nom : $nom<br>";
              echo "Prénom : $prenom<br>";
              echo "Mail : $mail<br>";
          }
         ?>
45 ans | Professeur de rugby<br>
Adresse : 12 impasse des ballons<br>
Telephone : +33620741312<br>


EXPERIENCES PROFESSIONNELLES:<br><BR>
- 2015-present: Professeur de rugby, Club de Rugby de Omnes, Paris<br>
  - Enseigner les techniques de rugby à des joueurs de tous niveaux et âges.<br>
  - Developper les competences individuelles et collectives des joueurs.<br>
  - Concevoir des programmes d'entraînement specifiques pour ameliorer la performance des equipes.<br>

- 2012-2015: Entraîneur adjoint, equipe Nationale de Rugby, France<br>
  - Assister l'entraîneur principal dans la planification et la mise en œuvre des entraînements.<br>
  - Analyser les performances des joueurs et proposer des strategies pour ameliorer leur jeu.<br>
  - Encadrer les joueurs pendant les matchs et les competitions internationales.<br><BR>

FORMATION:<br><BR>
- 2010-2012: Diplôme d'etudes Superieures en Entraînement Sportif, Universite de Bordeaux, Bordeaux<br>
  - etude approfondie des principes de l'entraînement sportif et de la preparation physique.<br>
  - Specialisation dans le rugby et les sports d'equipe.<br>

- 2004-2007: Licence de Sciences du Sport, Universite Lyon 1, Lyon<br>
  - Acquisition des connaissances theoriques sur le sport et la performance athletique.<br>
  - Approfondissement des competences en analyse de jeu et en preparation physique.<br><BR>

COMPETENCES:<br><BR>
- Maîtrise des techniques de rugby (passes, plaquages, mêlees, touches, etc.).<br>
- Connaissance approfondie des règles du jeu et des strategies tactiques.<br>
- Capacite à analyser les performances individuelles et collectives des joueurs.<br>
- Excellentes competences en communication pour transmettre les connaissances et les consignes.<br>
- Experience en developpement de programmes d'entraînement adaptes aux besoins des equipes et des joueurs.<br><BR>

LANGUES:<br><BR>
- Français (langue maternelle)<br>
- Anglais (niveau avance)<br><br>
</p>
    </div>
  </div>

  <script>
    function retourPagePrecedente() {
      window.history.back();
    }
    function ouvrirVolet(voletId) {
      var volet = document.getElementById(voletId);
      var titreVolet = document.querySelector(".titre-volet");

      if (volet.style.display === "none") {
        volet.style.display = "block";
        titreVolet.style.fontWeight = "bold";
      } else {
        volet.style.display = "none";
        titreVolet.style.fontWeight = "normal";
      }
    }
	  function openProfile(xmlFile) {
      window.open(xmlFile, '_blank');
    }
  </script>

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
