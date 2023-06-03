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
		<p style ="text-align: justify;">Vivez l'excitation de la compétition et poussez vos limites avec notre entreprise de sports de compétition de renom. Que vous soyez passionné de basket, de foot, de rugby, de natation, de plongeon ou de tennis, nous offrons une expérience inégalée pour tous les athlètes en herbe. Rejoignez-nous dès maintenant et découvrez un environnement dynamique où la camaraderie et l'adrénaline se rencontrent. Avec nos installations de pointe et nos entraîneurs expérimentés, vous serez soutenu et guidé vers l'excellence sportive. Ne manquez pas l'opportunité de vous mesurer aux meilleurs et de faire partie d'une communauté de compétiteurs dévoués. Inscrivez-vous dès aujourd'hui et préparez-vous à vivre des moments de victoire et de dépassement de soi inoubliables.<br>
		</p>
		<h1>NOS COACHS OMNES</h1>
 
    


  <div class="titre-volet"   onclick="ouvrirVolet('ragnar')"><h2>FOOTBALL</h2> </div>
  <div class="volet" id="ragnar">
    <div class="contenu-volet">
      <p><br>
        Le football est bien plus qu'un simple sport, c'est une activité qui offre de nombreux bienfaits pour la santé physique et mentale. En pratiquant régulièrement le football, on développe une excellente condition physique. Les séances d'entraînement intensives sollicitent le système cardiovasculaire, améliorant ainsi l'endurance et la capacité pulmonaire. Courir, sprinter, changer de direction et dribbler stimule la coordination motrice, la vitesse et l'agilité.<br>

Le football favorise également le renforcement musculaire. Les mouvements fréquents tels que les passes, les tirs et les dribbles sollicitent les muscles des jambes, des bras et du tronc. Les sprints et les sauts répétés contribuent à renforcer les muscles du bas du corps, y compris les quadriceps, les ischio-jambiers et les mollets. Le jeu en équipe encourage également la coopération, la communication et le travail d'équipe.<br>

En plus des bienfaits physiques, le football offre des avantages pour la santé mentale. Il contribue à la libération d'endorphines, les hormones du bonheur, procurant une sensation de bien-être et de joie. Le football permet de gérer le stress, d'améliorer la concentration et de développer des compétences de prise de décision rapide. Il favorise également la discipline, la persévérance et la confiance en soi.<br>

Le football est un sport social qui permet de nouer des amitiés durables. Jouer en équipe favorise la communication, la coopération et le respect des autres. Les matchs et les entraînements offrent également une opportunité de socialisation et de camaraderie.<br>

En conclusion, le football présente de nombreux bienfaits pour la santé physique et mentale. Il améliore l'endurance, renforce les muscles, favorise la coordination et stimule le développement de compétences sociales. Que vous jouiez en équipe ou simplement pour le plaisir, le football est une activité complète qui offre des avantages à la fois sur le plan physique et mental. Alors, enfilez vos chaussures de football, prenez le ballon et profitez de tous les bienfaits que ce sport passionnant peut vous offrir.<br>
      </p>
      <figure style="text-align: center">
        <img class="centered"src="ragnar.png"  width="450" height="562"/>  
      </figure>
      <nav>
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
      <p style="text-align: justify;">
         RAGNAR BRETON<br><br>
Professeur de Football | 30 ans<br>
Adresse : 1 impasse des cerises<br>
Téléphone : +33620948312<br>
Email : <a href="mailto:ragnar@sportomnes.fr">ragnar@sportomnes.fr</a><br><br>

PROFIL PROFESSIONNEL<br><br>
Professeur de Football passionné avec une solide expérience dans l'enseignement des techniques de fitness, de renforcement musculaire et de sports de combat. Expert dans la conception de programmes d'entraînement personnalisés, axés sur les objectifs individuels des clients. Bon communicateur et motivé à aider les autres à atteindre leur plein potentiel physique et mental.<br><br>

FORMATION<br><br>
- Licence en Éducation Physique et Sportive, Université de Paris, 2015<br>
- Certificat d'entraîneur de Football, 2016<br>
- Certificat d'entraîneur de Rugby, 2019<br><br>

EXPÉRIENCE PROFESSIONNELLE<br><br>
- Professeur de Football |Terrain OMNES, Paris, 2010-Présent<br>
- Concevoir et mettre en œuvre des programmes d'entraînement individualisés pour les clients, en tenant compte de leurs objectifs, de leur condition physique et de leurs limitations.<br>
- Enseigner et démontrer les techniques de musculation et de MMA de manière sûre et efficace.<br>
- Fournir des conseils et un soutien nutritionnels pour maximiser les résultats des clients.<br>
- Évaluer et suivre les progrès des clients, en ajustant les programmes d'entraînement en conséquence.<br>
- Organiser des séminaires et des ateliers pour promouvoir les bienfaits de la musculation et des sports de combat.<br>
- Assistant d'entraîneur | Basic FIT, Orgeval, 2013-2015<br>
- Assister le professeur principal dans la supervision des séances d'entraînement de musculation et de MMA.<br>
- Encourager et motiver les clients pendant les séances d'entraînement.<br>
- Aider à la mise en place et au rangement du matériel d'entraînement.<br>
- Surveiller la sécurité des clients et intervenir en cas de besoin.<br><br>

COMPÉTENCES<br><br>
- Excellente connaissance des techniques de musculation et des sports de combat.<br>
- Capacité à élaborer des programmes d'entraînement personnalisés en fonction des objectifs et des besoins individuels.<br>
- Compétences en communication pour transmettre efficacement les instructions et les conseils aux clients.<br>
- Sens de l'observation aigu pour corriger les erreurs de technique et prévenir les blessures.<br>
- Capacité à motiver et à inspirer les autres à atteindre leurs objectifs.<br>

      </p>
       
    </div>
  </div>

  <div class="titre-volet" onclick="ouvrirVolet('juju')"><h2>NATATION</h2></div>
  <div class="volet" id="juju">
    <div class="contenu-volet">
      <p><br>
        
        La natation est un sport complet qui offre de nombreux bienfaits pour la santé physique et mentale. En pratiquant régulièrement la natation, vous pouvez améliorer votre endurance cardiorespiratoire. Les mouvements de nage constants sollicitent le cœur et les poumons, renforçant ainsi le système cardiovasculaire et améliorant la capacité pulmonaire.<br>

La natation est également un excellent moyen de renforcer tous les groupes musculaires du corps. Les différents styles de nage, tels que la brasse, le crawl, le dos crawlé et le papillon, font travailler les muscles des bras, des jambes, du dos, des épaules et du tronc. Cette activité contribue à développer la force musculaire et l'endurance.<br>

La natation est un sport à faible impact, ce qui signifie qu'elle exerce moins de stress sur les articulations par rapport à d'autres sports. Cela en fait une excellente option pour les personnes ayant des problèmes articulaires ou des blessures, ainsi que pour les personnes en phase de rééducation.<br>

La natation favorise également la flexibilité et l'amplitude des mouvements. Les mouvements fluides et répétitifs de la nage aident à améliorer la souplesse des articulations, des muscles et des tendons, ce qui peut réduire le risque de blessures.<br>

La natation est un sport qui peut être pratiqué par tous, indépendamment de l'âge ou du niveau de condition physique. Elle convient aussi bien aux enfants qu'aux personnes âgées, offrant des bienfaits pour la santé tout au long de la vie.<br>

Outre les bienfaits physiques, la natation est également bénéfique pour la santé mentale. Elle peut aider à réduire le stress, l'anxiété et la tension musculaire. La sensation de légèreté et de liberté dans l'eau procure une sensation de bien-être et de relaxation.<br>

La natation est également un excellent moyen de socialiser. Que ce soit en participant à des cours en groupe, en s'entraînant avec des amis ou en rejoignant une équipe de natation, cela offre l'opportunité de rencontrer de nouvelles personnes partageant la même passion.<br>

La natation est également recommandée pour les personnes souffrant de certaines conditions médicales, comme l'asthme ou les problèmes de dos. Elle peut contribuer à améliorer la fonction pulmonaire et à soulager les douleurs dorsales.<br>

En conclusion, la natation est un sport complet qui offre de nombreux bienfaits pour la santé physique et mentale. Elle améliore l'endurance, renforce les muscles, favorise la flexibilité et offre une expérience de relaxation dans l'eau. Que vous cherchiez à améliorer votre condition physique, à vous détendre ou à socialiser, la natation est une activité polyvalente accessible à tous. Alors, enfilez votre maillot de bain, plongez dans l'eau et profitez des nombreux avantages que la natation a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="florent.png"  width="450" height="298"/>  
      </figure>
      <nav>
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
      <p style="text-align: justify;"><br>
FLORENT MANAUDOU<br>
32 ans | Professeur de natation<br>
Adresse : 12 impasse des bassins<br>
Téléphone : +33620268312<br>
Email : <a href="mailto:flo.piscine@sportomnes.fr">flo.piscine@sportomnes.fr</a><br><br>



EXPERIENCES PROFESSIONNELLES:<br><BR>
- 2010-présent: Professeur de natation, Bassin de Omnes, Paris<br>
  - Enseigner les techniques de natation à des enfants et adultes de tous niveaux.<br>
  - Élaborer des programmes d'entraînement personnalisés pour les nageurs compétitifs.<br>
  - Surveiller la sécurité des nageurs et fournir des conseils pour améliorer leurs performances.<br>
  
- 2008-2010: Assistant Professeur de natation, Piscine Municipale, Lyon<br>
  - Assister les instructeurs de natation dans la gestion des cours collectifs.<br>
  - Aider les débutants à apprendre les bases de la natation.<br>
  - Encourager les nageurs à progresser et à développer leur confiance en eux.<br><BR>

FORMATION:<br><BR>
- 2006-2008: Brevet d'État d'Éducateur Sportif, spécialité Natation, Centre de Formation des Éducateurs Sportifs, Lyon<br>
  - Formation complète en natation, comprenant l'enseignement des techniques de nage, la sécurité aquatique et la pédagogie.
  <br>
- 2004-2006: Baccalauréat Scientifique, Lycée Louis Pasteur, Lyon<br>
  - Obtention du baccalauréat avec mention, mettant l'accent sur les sciences et les mathématiques.<br><BR>

COMPETENCES:<br><BR>
- Maîtrise des différentes techniques de natation (crawl, brasse, dos crawlé, papillon).<br>
- Connaissance approfondie des principes de la sécurité aquatique.<br>
- Capacité à élaborer des programmes d'entraînement adaptés aux besoins individuels des nageurs.<br>
- Excellentes compétences en communication pour expliquer les mouvements et les techniques de natation.<br>
- Aptitude à créer un environnement d'apprentissage positif et motivant.<br><BR>

LANGUES:<br><BR>
- Français (langue maternelle)<br>
- Anglais (niveau intermédiaire)<br><br></p>
      
    </div>
  </div>

  

  <div class="titre-volet" onclick="ouvrirVolet('pierre')"><h2>TENNIS</h2></div>
  <div class="volet" id="pierre">
    <div class="contenu-volet">
      <p style="text-align: justify;"> <br>
        Le tennis est un sport passionnant qui offre de nombreux bienfaits pour la santé physique et mentale. En plus d'être une activité amusante, le tennis permet de développer l'endurance, la coordination, la force musculaire et la souplesse. Les mouvements rapides et les changements de direction fréquents sollicitent tous les groupes musculaires du corps, contribuant ainsi à améliorer la condition physique générale.<br>

En jouant au tennis régulièrement, vous pouvez améliorer votre santé cardiovasculaire en augmentant votre fréquence cardiaque et en favorisant la circulation sanguine. Cela aide à renforcer le cœur et les poumons, réduisant ainsi le risque de maladies cardiovasculaires.<br>

Le tennis est également bénéfique pour le renforcement des os, ce qui peut aider à prévenir l'ostéoporose et à améliorer la densité osseuse. Les mouvements de saut, de pivotement et de frappe de balle sollicitent les os, favorisant ainsi leur croissance et leur résistance.<br>

En plus des bienfaits physiques, le tennis offre également des avantages mentaux. Il favorise la concentration, la coordination œil-main et la prise de décision rapide. En anticipant les mouvements de l'adversaire et en réagissant rapidement, vous améliorez vos capacités cognitives.<br>

Le tennis est un sport social qui favorise les interactions sociales et la création de liens. Jouer en équipe ou en double permet de développer des compétences de communication, de coopération et de fair-play. De plus, participer à des tournois ou à des rencontres amicales peut être une excellente occasion de rencontrer de nouvelles personnes partageant la même passion.<br>

Enfin, le tennis est un excellent moyen de réduire le stress et de favoriser le bien-être mental. La concentration requise pendant le jeu permet de se déconnecter des soucis quotidiens et de se focaliser sur l'instant présent. Les endorphines libérées pendant l'activité physique procurent une sensation de bien-être et aident à soulager le stress et l'anxiété.<br>
        

      </p>
      <figure style="text-align: center">
      <img class="centered"src="pierre_menes.png"  width="600" height="300"/>  
      </figure>
      <nav>
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
      <p style="text-align: justify;">PIERRE MÈNES<br><br>
Coach de Tennis | 56 ans<br>
Adresse : 123 Rue du Tennis, 75000 Paris<br>
Téléphone : 06 78 56 45 12<br>
Email : <a href="mailto:pierre.menes@gmail.com">pierre.menes@gmail.com</a><br><br>

PROFIL PROFESSIONNEL<br><br>
Coach de tennis passionné avec plus de 20 ans d'expérience dans l'enseignement du tennis à des joueurs de tous niveaux. Compétent dans la conception de programmes d'entraînement adaptés aux besoins individuels des joueurs et dans la gestion de leur progression. Bon communicateur, motivé à aider les joueurs à atteindre leurs objectifs et à améliorer leurs performances sur le court.<br><br>

FORMATION<br><br>
- Diplôme d'Entraîneur de Tennis, Fédération Française de Tennis, 1999<br>
- Formation en Gestion et Psychologie du Sport, Centre de Formation des Entraîneurs, 2002<br><br>

EXPÉRIENCE PROFESSIONNELLE<br><br>
Coach de Tennis | SALLE OMNES, Paris | 2000 - Présent<br>
- Enseignement du tennis à des joueurs de tous âges et de tous niveaux, des débutants aux joueurs de compétition.<br>
- Conception de programmes d'entraînement personnalisés pour les joueurs en fonction de leurs objectifs et de leurs capacités.<br>
- Organisation et animation de séances d'entraînement collectives et individuelles pour améliorer les compétences techniques, tactiques et physiques des joueurs.<br>
- Analyse des performances des joueurs lors des matchs et des entraînements, et fourniture de conseils pour améliorer leur jeu.<br>
- Encouragement et motivation des joueurs à repousser leurs limites et à atteindre leurs objectifs tennistiques.<br><br>

Coach de Tennis | Centre de Formation de Jeunes Talents, Lyon | 1996 - 2000<br><br>
- Encadrement et entraînement de jeunes joueurs prometteurs âgés de 12 à 18 ans.<br>
- Organisation de stages d'entraînement intensifs pour développer les compétences techniques et tactiques des joueurs.<br>
- Suivi individuel des joueurs pour évaluer leur progression et apporter des ajustements aux programmes d'entraînement.<br><br>

COMPÉTENCES<br><br>
- Excellente connaissance des techniques et des stratégies du tennis.<br>
- Capacité à concevoir des programmes d'entraînement adaptés aux besoins individuels des joueurs.<br>
- Compétences en communication pour transmettre efficacement les instructions et les conseils aux joueurs.<br>
- Capacité à analyser les performances des joueurs et à fournir des retours constructifs.<br>
- Souci de la sécurité des joueurs lors des séances d'entraînement.<br><br>
</p>
    </div>
  </div>

  

  

  <div class="titre-volet" onclick="ouvrirVolet('tanguy')"><h2>BASKETBALL</h2></div>
  <div class="volet" id="tanguy">
    <div class="contenu-volet">
      <p><br>
        Le basketball est un sport dynamique qui offre de nombreux bienfaits pour la santé physique et mentale. Jouer régulièrement au basketball permet de développer l'endurance, la coordination, l'agilité et la force musculaire. Les mouvements rapides, les sauts et les sprints sollicitent tous les groupes musculaires du corps, contribuant ainsi à améliorer la condition physique globale.<br>

En pratiquant le basketball, vous pouvez améliorer votre santé cardiovasculaire en augmentant votre fréquence cardiaque et en favorisant la circulation sanguine. Cela aide à renforcer le cœur et les poumons, réduisant ainsi le risque de maladies cardiovasculaires.<br>

Le basketball favorise également le développement des capacités motrices, en améliorant l'équilibre, la coordination œil-main et la précision des mouvements. Les dribbles, les passes et les tirs nécessitent une bonne coordination entre les mains, les yeux et les pieds, ce qui contribue à affiner les compétences motrices fines.<br>

En plus des bienfaits physiques, le basketball offre également des avantages mentaux. Il stimule la concentration, la prise de décision rapide et la stratégie. En anticipant les mouvements des adversaires et en prenant des décisions tactiques, vous améliorez vos capacités cognitives et votre capacité à résoudre les problèmes en temps réel.<br>

Le basketball est un sport d'équipe qui favorise les interactions sociales et le travail en groupe. Jouer en équipe développe des compétences de communication, de coopération et de confiance mutuelle. Il offre également des opportunités de rencontrer de nouvelles personnes partageant la même passion et de se faire de nouveaux amis.<br>

Le basketball est un excellent moyen de brûler des calories et de maintenir un poids santé. Les mouvements intensifs et les efforts physiques soutenus lors d'un match de basketball permettent de dépenser beaucoup d'énergie, ce qui contribue à la perte de poids et à l'amélioration de la composition corporelle.<br>

Enfin, le basketball est une activité ludique qui procure du plaisir et favorise le bien-être mental. Jouer au basketball peut être une excellente façon de se détendre, de se divertir et de se libérer du stress quotidien. Les moments de compétition, de camaraderie et de joie partagée sur le terrain peuvent apporter une sensation de satisfaction et de bonheur.<br>

En conclusion, le basketball offre une multitude de bienfaits pour la santé physique et mentale. Que ce soit pour améliorer votre condition physique, développer vos compétences motrices, renforcer votre endurance, créer des liens sociaux ou simplement vous amuser, le basketball est un sport complet qui peut être pratiqué à tout âge. Alors, enfilez vos baskets, prenez un ballon et profitez des nombreux avantages que le basketball a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="nain_indien.png"  width="450" height="300"/>  
      </figure>
      <nav>
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
      <p style="text-align: justify;">TANGUY INDIE<br><br>
Coach Basketball | 14 ans<br>
Adresse : 456 Rue du Bien-Être, 75000 Paris<br>
Téléphone : 06 63 52 41 78<br>
Email : <a href="mailto:tanguy.indie@gmail.com">tanguy.indie@gmail.com</a><br><br>

PROFIL PROFESSIONNEL<br><br>
Jeune coach Basketball passionné par le développement personnel et l'amélioration de la performance mentale. Compétent dans l'accompagnement de personnes de tous âges pour les aider à atteindre leurs objectifs, à renforcer leur confiance en eux et à développer des stratégies de gestion du stress. Bon communicateur et motivé à inspirer les autres à développer leur plein potentiel.<br><br>

FORMATION<br><br>
- Certificat Basketball, Institut du Développement Personnel, 2021<br>
- Formation en Gestion du Stress et de l'Anxiété, Centre de Formation en Psychologie, 2020<br><br>

EXPÉRIENCE PROFESSIONNELLE<br><br>
Coach Basketball | SALLE OMNES, Paris | 2021 - Présent<br>
- Accompagnement de personnes de tous âges dans leur développement personnel et professionnel.<br>
- Écoute active et compréhension des besoins individuels des clients.<br>
- Utilisation de techniques de coaching mental telles que la visualisation, la reprogrammation mentale et la gestion du stress pour aider les clients à atteindre leurs objectifs.<br>
- Création de plans d'action personnalisés et suivi régulier des progrès réalisés par les clients.<br>
- Encouragement et motivation des clients à surmonter les obstacles et à adopter des pensées positives.<br><br>

Stagiaire en Coaching Mental | Centre de Développement Personnel, Lyon | Été 2020<br><br>
- Observation et participation aux séances de coaching individuel.<br>
- Préparation des supports pédagogiques pour les ateliers de développement personnel.<br>
- Assistance aux coachs mentaux dans leurs séances et suivi des clients.<br><br>

COMPÉTENCES<br><br>
- Excellente capacité d'écoute et d'empathie.<br>
- Compétences en communication pour établir une relation de confiance avec les clients.<br>
- Capacité à utiliser des techniques de coaching mental pour aider les clients à surmonter les obstacles et à améliorer leurs performances mentales.<br>
- Maîtrise des stratégies de gestion du stress et de l'anxiété.<br>
- Souci du bien-être et de la confidentialité des clients.<br><br>

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
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
      <p style="text-align: justify;">ROMAIN PETIT<br><br>
Coach plongeon | 33 ans<br>
Adresse : 789 Rue de l'Inclusion, 75000 Paris<br>
Téléphone : 06 74 41 52 63<br>
Email : <a href="mailto:romain.petit@gmail.com">romain.petit@gmail.com</a><br><br>

PROFIL PROFESSIONNEL<br><br>
Coach dévoué et passionné spécialisé dans la danse auqatique pour les personnes en situation de handicap. Expérimenté dans l'adaptation des exercices et des programmes d'entraînement pour répondre aux besoins individuels des athlètes handisport. Compétent dans la motivation et l'inspiration des sportifs pour repousser leurs limites et atteindre leurs objectifs. Engagé dans l'inclusion et l'autonomisation des personnes en situation de handicap.<br><br>

FORMATION<br><br>
- Diplôme de plongeon, Fédération Française de Plongeon, 2010<br>
- Formation en Handisport et Adaptation de l'Entraînement, Centre de Formation Handisport, 2012<br><br>

EXPÉRIENCE PROFESSIONNELLE<br><br>
Coach Plongeon Handisport | SALLE OMNES, Paris | 2013 - Présent<br>
- Conception de programmes d'entraînement adaptés aux besoins spécifiques des athlètes en situation de handicap.<br>
- Adaptation des exercices pour tenir compte des limitations physiques des sportifs.<br>
- Encadrement et motivation des athlètes pendant les séances d'entraînement pour les aider à atteindre leurs objectifs de musculation.<br>
- Collaboration étroite avec les professionnels de la santé et les physiothérapeutes pour optimiser la récupération et minimiser les risques de blessure.<br>
- Participation aux compétitions handisport en tant que coach et soutien des athlètes lors des épreuves.<br><br>

Coach Personnel | Centre de Réadaptation, Lyon | 2010 - 2013<br><br>
- Encadrement individuel des personnes en situation de handicap pour les aider à développer leur force musculaire et leur mobilité.<br>
- Création de programmes d'entraînement personnalisés pour soutenir la réadaptation physique et améliorer la qualité de vie des clients.<br>
- Utilisation d'équipements adaptés et d'outils de soutien pour faciliter l'entraînement des personnes en situation de handicap.<br><br>

COMPÉTENCES<br><br>
- Excellente connaissance des techniques de musculation et de renforcement musculaire.<br>
- Capacité à adapter les exercices et les programmes d'entraînement en fonction des limitations physiques des sportifs en situation de handicap.<br>
- Compétences en communication pour établir une relation de confiance avec les athlètes et les motiver à repousser leurs limites.<br>
- Sensibilisation aux besoins spécifiques des personnes en situation de handicap et engagement envers l'inclusion et l'autonomisation.<br>
- Souci de la sécurité et du bien-être des athlètes pendant les séances d'entraînement.<br><br>

</p>
    </div>
  </div>

  <div class="titre-volet" onclick="ouvrirVolet('rugby')"><h2>RUGBY</h2></div>
  <div class="volet" id="rugby">
    <div class="contenu-volet">
      <p>
        <br>
        Le rugby est un sport physique qui offre de nombreux bienfaits pour la santé physique et mentale. Jouer régulièrement au rugby permet de développer la force, l'endurance, la coordination et l'agilité. Les mouvements intenses, les plaquages et les courses sollicitent tous les groupes musculaires du corps, contribuant ainsi à améliorer la condition physique globale.<br>

Le rugby est également bénéfique pour la santé cardiovasculaire. Les efforts soutenus et l'intensité des matchs de rugby aident à renforcer le cœur et les poumons, améliorant ainsi la capacité cardiorespiratoire.<br>

En pratiquant le rugby, vous pouvez également améliorer votre coordination œil-main et votre prise de décision rapide. Les passes précises, les mouvements de dribble et les prises de décision tactiques nécessitent une excellente coordination entre les mains et les yeux, ainsi qu'une réactivité mentale rapide.<br>

Le rugby est un sport d'équipe qui favorise les interactions sociales et le travail en groupe. Jouer en équipe développe des compétences de communication, de coopération et de confiance mutuelle. Il renforce également le sentiment d'appartenance à un groupe et favorise la création de liens solides avec ses coéquipiers.<br>

Le rugby est un excellent moyen de renforcer les os et les muscles. Les contacts physiques et les charges lors des matchs de rugby contribuent à renforcer la densité osseuse et à développer la masse musculaire, réduisant ainsi le risque de fractures et de blessures.<br>

En plus des bienfaits physiques, le rugby offre également des avantages mentaux. Il stimule la concentration, la stratégie et la prise de décision sous pression. Le rugby nécessite une réflexion rapide et une adaptation constante aux situations changeantes, ce qui renforce les compétences cognitives.
<br>
Le rugby favorise également la gestion du stress et l'amélioration de la résilience mentale. Les situations de matchs intenses et la nécessité de s'adapter rapidement à des adversaires agressifs renforcent la capacité à gérer les situations stressantes et à maintenir un esprit combatif.<br>

Enfin, le rugby procure du plaisir et favorise le bien-être mental. Les moments de compétition, les victoires partagées et les liens étroits créés avec les coéquipiers procurent une grande satisfaction et un sentiment d'accomplissement.<br>

En conclusion, le rugby offre une multitude de bienfaits pour la santé physique et mentale. Que ce soit pour améliorer votre condition physique, développer vos compétences tactiques, renforcer vos os et vos muscles, créer des liens sociaux ou simplement vous amuser, le rugby est un sport complet qui peut être pratiqué à tout âge. Alors, mettez votre maillot, enfilez vos crampons et profitez des nombreux avantages que le rugby a à offrir.<br>
      </p>
      <figure style="text-align: center">
      <img class="centered"src="chabal.png"  width="450" height="300"/>  
      </figure>
      <nav>
        <li><a href="rendez_vous.php">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>

      
      <p style="text-align: justify;">SEBASTIEN CHABAL<br><br>

45 ans | Professeur de rugby<br>
Adresse : 12 impasse des ballons<br>
Téléphone : +33620741312<br>
Email : <a href="mailto:seb.chabal@sportomnes.fr">seb.chabal@sportomnes.fr</a><br><br>


EXPERIENCES PROFESSIONNELLES:<br><BR>
- 2015-présent: Professeur de rugby, Club de Rugby de Omnes, Paris<br>
  - Enseigner les techniques de rugby à des joueurs de tous niveaux et âges.<br>
  - Développer les compétences individuelles et collectives des joueurs.<br>
  - Concevoir des programmes d'entraînement spécifiques pour améliorer la performance des équipes.<br>

- 2012-2015: Entraîneur adjoint, Équipe Nationale de Rugby, France<br>
  - Assister l'entraîneur principal dans la planification et la mise en œuvre des entraînements.<br>
  - Analyser les performances des joueurs et proposer des stratégies pour améliorer leur jeu.<br>
  - Encadrer les joueurs pendant les matchs et les compétitions internationales.<br><BR>

FORMATION:<br><BR>
- 2010-2012: Diplôme d'Études Supérieures en Entraînement Sportif, Université de Bordeaux, Bordeaux<br>
  - Étude approfondie des principes de l'entraînement sportif et de la préparation physique.<br>
  - Spécialisation dans le rugby et les sports d'équipe.<br>

- 2004-2007: Licence de Sciences du Sport, Université Lyon 1, Lyon<br>
  - Acquisition des connaissances théoriques sur le sport et la performance athlétique.<br>
  - Approfondissement des compétences en analyse de jeu et en préparation physique.<br><BR>

COMPETENCES:<br><BR>
- Maîtrise des techniques de rugby (passes, plaquages, mêlées, touches, etc.).<br>
- Connaissance approfondie des règles du jeu et des stratégies tactiques.<br>
- Capacité à analyser les performances individuelles et collectives des joueurs.<br>
- Excellentes compétences en communication pour transmettre les connaissances et les consignes.<br>
- Expérience en développement de programmes d'entraînement adaptés aux besoins des équipes et des joueurs.<br><BR>

LANGUES:<br><BR>
- Français (langue maternelle)<br>
- Anglais (niveau avancé)<br><br>
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
