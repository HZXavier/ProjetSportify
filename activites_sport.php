<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACTIVITES SPORTIVES</title>
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

	    <p>NOS ACTIVITES SPORTIVES</p>
	    <br><nav>
	        <li><a href="activites_sport.php">ACTIVITES SPORTIVES</a></li>
	        <li><a href="sports_compet.php">LES SPORTS DE COMPETITION</a></li>
	        <li><a href="salle_sport.php">SALLE DE SPORT OMNES</a></li>
	    </nav><br>
	    <br><div class="line" style="height: 4px; background-color: darkblue;"></div><br><br>
	    <h2>NOS SPORTS DE COMPETITION</h2><br><br>
		<p style ="text-align: justify;">Vivez l'excitation de la competition et poussez vos limites avec notre entreprise de sports de competition de renom. Que vous soyez passionne de basket, de foot, de rugby, de natation, de plongeon ou de tennis, nous offrons une experience inegalee pour tous les athlètes en herbe. Rejoignez-nous dès maintenant et decouvrez un environnement dynamique où la camaraderie et l'adrenaline se rencontrent. Avec nos installations de pointe et nos entraîneurs experimentes, vous serez soutenu et guide vers l'excellence sportive. Ne manquez pas l'opportunite de vous mesurer aux meilleurs et de faire partie d'une communaute de competiteurs devoues. Inscrivez-vous dès aujourd'hui et preparez-vous à vivre des moments de victoire et de depassement de soi inoubliables.<br>
		</p>





		<div class="titre-volet" onclick="ouvrirVolet('arnold')"><h2>MUSCULATION </h2></div>
		<div class="volet" id="arnold">
		<div class="contenu-volet">
			<p><br>
				La musculation est une pratique qui offre de nombreux bienfaits pour la sante et le bien-être. En travaillant regulièrement avec des poids et des machines, on developpe une force et une endurance musculaire considerables. Les exercices de musculation sollicitent les differents groupes musculaires du corps, ce qui permet de les renforcer et de les tonifier.<br>

La musculation contribue egalement à l'amelioration de la composition corporelle. En augmentant la masse musculaire, on stimule le metabolisme, ce qui favorise la combustion des graisses. Cela permet de reduire la masse grasse et de favoriser un physique plus tonique et athletique.<br>

La pratique regulière de la musculation aide egalement à renforcer les os et à prevenir l'osteoporose. En soumettant les os à des contraintes et à des charges, on stimule leur densite et leur resistance.<br>

La musculation offre egalement des avantages pour la sante mentale. Elle permet de reduire le stress et l'anxiete en liberant des endorphines, les hormones du bien-être. En se concentrant sur les mouvements et en suivant un programme d'entraînement, la musculation peut aussi aider à ameliorer la concentration et à favoriser la relaxation.<br>

En plus des bienfaits physiques, la musculation peut renforcer la confiance en soi et l'estime de soi. Lorsque l'on constate les progrès realises en termes de force et de forme physique, cela peut avoir un impact positif sur l'image de soi.<br>

La musculation peut être pratiquee par des personnes de tous âges et de tous niveaux de condition physique. Il est important de suivre un programme adapte, en commençant par des poids legers et en progressant progressivement.<br>

En conclusion, la musculation offre de nombreux bienfaits pour la sante physique et mentale. Elle ameliore la force musculaire, favorise la combustion des graisses, renforce les os et contribue au bien-être general. Que vous souhaitiez developper votre musculature, perdre du poids ou simplement ameliorer votre condition physique, la musculation est une pratique polyvalente et efficace.<br>
			</p>
		<figure style="text-align: center">
		<img class="centered"src="arnold.png"  width="450" height="669"/>  
		</figure>
		<nav>
        <li><a href="rdv.php?info=7">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
		<p style="text-align: justify;">
		ARNOLD SCHWARZENEGGER<br><br>
		Coach de Musculation | Experimente dans le domaine du fitness<br>
		Adresse : 3 rue des sapins<br>
		Telephone : 07 45 23 89 96 <br>
		Email : <a href="mailto:arnold.sch@gmail.com">arnold.sch@gmail.com</a><br><br>

		PROFIL PROFESSIONNEL<br><br>
		Coach de musculation experimente avec une passion pour la remise en forme et la musculation. Expert dans la conception de programmes d'entraînement personnalises pour aider les clients à atteindre leurs objectifs de musculation. Solides competences en communication pour motiver et inspirer les autres à repousser leurs limites et à obtenir des resultats optimaux.<br><br>

		FORMATION<br><br>
		- Certification de coach de musculation, 2015<br><br>
		<br>
		EXPeRIENCE PROFESSIONNELLE<br><br>
		Coach de Musculation | SALLE OMNES , Paris, 2010-2016<br>
		- Conception et mise en œuvre de programmes d'entraînement personnalises en fonction des objectifs, des niveaux de condition physique et des besoins individuels des clients.<br>
		- Enseignement des techniques de musculation et de levage de poids avec un accent sur la forme correcte et la securite.<br>
		- Fourniture de conseils nutritionnels pour soutenir les objectifs de musculation et optimiser les performances.<br>
		- evaluation regulière de la progression des clients et adaptation des programmes d'entraînement en consequence.<br>
		- Motivation et encouragement des clients pour les aider à atteindre leurs objectifs de musculation.<br><br>

		Coach Assistant | Fitness Park, Montrouge, 2016-2019<br><br>
		- Soutien au coach principal dans l'encadrement des seances d'entraînement et l'assistance aux clients.<br>
		- Assistance dans la mise en place et le rangement du materiel d'entraînement.<br>
		- Surveillance de la securite des clients et intervention en cas de besoin.<br><br>

		COMPeTENCES<br><br>
		- Excellente connaissance des techniques de musculation et de levage de poids.<br>
		- Capacite à concevoir des programmes d'entraînement personnalises pour repondre aux besoins individuels des clients.<br>
		- Competences en communication pour transmettre efficacement les instructions et les conseils aux clients.<br>
		- Capacite à motiver et à inspirer les autres à repousser leurs limites et à obtenir des resultats.<br>
		- Souci de la securite des participants lors des seances d'entraînement.<br><br>

		</p>
		</div>
		</div>




		<div class="titre-volet" onclick="ouvrirVolet('emilie')"><h2>FITNESS</h2></div>
		<div class="volet" id="emilie">
		<div class="contenu-volet">
			<p><br>
				Le fitness est une pratique physique complète qui offre de nombreux bienfaits pour la sante physique et mentale. En s'engageant dans une routine regulière de fitness, on peut ameliorer son endurance cardiovasculaire et renforcer son système cardiorespiratoire. Les exercices cardio tels que la course à pied, le velo ou l'aerobic augmentent la frequence cardiaque, ameliorant ainsi la capacite du cœur à pomper le sang et l'apport d'oxygène aux muscles.<br>

Le fitness permet egalement de developper la force musculaire et l'endurance. Les exercices de musculation et de renforcement tels que les squats, les pompes et les souleves de poids aident à tonifier et à renforcer les muscles. Cela ameliore la posture, la stabilite et la fonctionnalite globale du corps.<br>

En pratiquant le fitness, on favorise egalement la flexibilite et la mobilite articulaire. Les exercices d'etirement et de souplesse aident à prevenir les blessures, à ameliorer la gamme de mouvement des articulations et à maintenir une bonne posture.<br>

Le fitness contribue egalement à la gestion du poids et à la composition corporelle. Les exercices reguliers combines à une alimentation equilibree peuvent aider à brûler les calories en excès, à augmenter le metabolisme et à favoriser la perte de poids. De plus, la pratique du fitness peut aider à developper et à maintenir la masse musculaire maigre, ce qui est essentiel pour un metabolisme sain.<br>

Outre les bienfaits physiques, le fitness a egalement des avantages mentaux. L'activite physique regulière aide à reduire le stress, à ameliorer l'humeur et à favoriser une meilleure qualite de sommeil. L'effort physique libère des endorphines, qui sont des hormones du bien-être, procurant une sensation de bonheur et de relaxation.<br>

Le fitness est egalement une excellente activite sociale. Que ce soit en s'entraînant en groupe, en rejoignant des cours collectifs ou en pratiquant des sports d'equipe, cela offre l'opportunite de rencontrer de nouvelles personnes partageant les mêmes interêts et de se motiver mutuellement.<br>

En conclusion, le fitness offre une multitude de bienfaits pour la sante physique et mentale. Il ameliore l'endurance, renforce les muscles, favorise la flexibilite et aide à maintenir un poids sante. Il contribue egalement à la gestion du stress, à l'amelioration de l'humeur et à la socialisation. Que vous cherchiez à ameliorer votre condition physique, à vous sentir mieux dans votre corps ou à vivre une vie plus saine, le fitness est une pratique polyvalente et accessible à tous. Alors, enfilez vos vêtements de sport, bougez et profitez des nombreux avantages que le fitness a à offrir.<br>
			</p>
		<figure style="text-align: center">
		<img class="centered"src="squat_blonde.png"  width="450" height="300"/>  
		</figure>
		<nav>
        <li><a href="rdv.php?info=8">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
		<p style="text-align: justify;">EMILIE BOULLARD<br><br>
		Coach de Fitness | 23 ans<br>
		Lyon<br>
		Telephone : 06 85 52 41 96<br>
		Email : <a href="mailto:emilie.boullard@email.com">emilie.boullard@email.com</a><br><br>

		PROFIL PROFESSIONNEL<br><br>
		Coach de fitness passionnee par la sante et le bien-être, avec une experience dans la conception de programmes d'entraînement personnalises et la motivation des clients à atteindre leurs objectifs. Competente dans l'enseignement des cours collectifs et dans l'accompagnement individuel. Bonne communicatrice et capable d'inspirer les autres à adopter un mode de vie actif et sain.<br><br>

		FORMATION<br><br>
		- Licence en Sciences de la Motricite, Universite de Lyon, 2022<br>
		- Certificat de Coach de Fitness, Federation Française de Fitness, 2022<br>
		- Formation en Nutrition et Sante, Centre de Formation en Sante et Bien-être, 2021<br><br>

		EXPeRIENCE PROFESSIONNELLE<br><br>
		Coach de Fitness | SALLE OMNES, Lyon | 2022 - Present<br>
		- Concevoir et mettre en œuvre des programmes d'entraînement personnalises en fonction des objectifs et des besoins individuels des clients.<br>
		- Animer des cours collectifs tels que l'aerobic, la zumba et le body pump, en maintenant un niveau d'energie eleve et en veillant à la securite des participants.<br>
		- Fournir des conseils en matière de nutrition et de style de vie sain pour aider les clients à atteindre leurs objectifs de remise en forme.<br>
		- Effectuer des evaluations regulières de la condition physique des clients et ajuster les programmes d'entraînement en consequence.<br>
		- Encourager et motiver les clients à depasser leurs limites et à adopter des habitudes de vie saines.<br><br>

		Stagiaire en Coaching de Fitness | Centre de Remise en Forme, Lyon | ete 2021<br><br>
		- Assister les coachs seniors dans la planification et la mise en œuvre des programmes d'entraînement.<br>
		- Accueillir les nouveaux membres, effectuer des evaluations de condition physique initiales et les aider à definir leurs objectifs.<br>
		- Participer à la mise en place et à la maintenance de l'equipement d'entraînement.<br>
		- Observer les cours collectifs et les seances d'entraînement individuelles pour acquerir une experience pratique.<br><br>

		COMPeTENCES<br><br>
		- Excellente connaissance des principes de l'entraînement physique et des differentes methodes d'entraînement.<br>
		- Capacite à creer des programmes d'entraînement adaptes aux besoins et aux objectifs des clients.<br>
		- Competences en communication pour transmettre efficacement les instructions et les conseils aux clients.<br>
		- Capacite à motiver et à inspirer les autres à adopter un mode de vie actif et sain.<br>
		- Souci de la securite des participants lors des cours collectifs.<br><br>

		</p>
		</div>
		</div>

		<div class="titre-volet" onclick="ouvrirVolet('camille')"><h2>BIKING</h2></div>
		<div class="volet" id="camille">
		<div class="contenu-volet">
			<p><br>
				Le biking, egalement connu sous le nom de cyclisme en salle ou de velo d'interieur, offre de nombreux bienfaits pour la sante physique et mentale. Pratiquer regulièrement le biking permet d'ameliorer l'endurance cardiovasculaire. Les seances d'entraînement intenses sur un velo stationnaire sollicitent le système cardiorespiratoire, ameliorant ainsi la capacite du cœur et des poumons à fournir de l'oxygène aux muscles.<br>

Le biking est egalement benefique pour le renforcement musculaire. Les mouvements de pedalage ciblent principalement les muscles des jambes, notamment les quadriceps, les ischio-jambiers et les mollets. En ajustant l'intensite et la resistance, on peut egalement solliciter les muscles du tronc, des bras et des epaules. Cela contribue à tonifier et à renforcer les muscles du corps.<br>

La pratique regulière du biking favorise egalement la combustion des calories et la perte de poids. Les seances d'entraînement intenses permettent de brûler un grand nombre de calories, ce qui peut aider à atteindre et à maintenir un poids sante. De plus, le biking aide à augmenter le metabolisme de base, ce qui facilite la gestion du poids à long terme.<br>

Le biking est un sport à faible impact, ce qui signifie qu'il exerce moins de stress sur les articulations par rapport à d'autres activites comme la course à pied. Cela en fait une option ideale pour les personnes ayant des problèmes articulaires ou des blessures, ainsi que pour les personnes en phase de reducation.<br>

En plus des bienfaits physiques, le biking a egalement des avantages pour la sante mentale. Les seances d'entraînement sur velo peuvent aider à reduire le stress et à ameliorer l'humeur. L'effort physique libère des endorphines, des hormones du bien-être, procurant une sensation de bonheur et de relaxation.<br>

Le biking peut egalement être une activite sociale. Que ce soit en rejoignant des cours collectifs en salle de sport ou en participant à des seances de biking virtuelles en ligne, cela offre l'opportunite de rencontrer de nouvelles personnes partageant les mêmes interêts et de se motiver mutuellement.<br>

En conclusion, le biking est une activite physique complète qui offre de nombreux bienfaits pour la sante physique et mentale. Il ameliore l'endurance cardiovasculaire, renforce les muscles, favorise la perte de poids et reduit le stress. Que vous cherchiez à ameliorer votre condition physique, à brûler des calories ou à vous detendre, le biking est une pratique polyvalente et accessible à tous. Alors, montez sur votre velo, reglez la resistance et profitez des nombreux avantages que le biking a à offrir.<br>
			</p>
		<figure style="text-align: center">
		<img class="centered"src="squat_brune.png"  width="450" height="300"/>  
		</figure>
		<nav>
        <li><a href="rdv.php?info=9">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
		<p style="text-align: justify;">CAMILLE MAMELLON<br><br>
		Coach de Biking | 24 ans<br>
		Paris<br>
		Telephone : 06 63 74 12 56 <br>
		Email : <a href="mailto:camille.mamelon@salleomnes.fr">camille.mamelon@salleomnes.fr</a><br><br>

		PROFIL PROFESSIONNEL<br><br>
		Coach de fitness passionnee par la sante et le bien-être, avec une experience dans la conception de programmes d'entraînement personnalises et la motivation des clients à atteindre leurs objectifs. Competente dans l'enseignement des cours collectifs et dans l'accompagnement individuel. Bonne communicatrice et capable d'inspirer les autres à adopter un mode de vie actif et sain.<br><br>

		FORMATION<br><br>
		- Licence en Sciences de la Motricite, Universite de Bordeaux, 2018<br>
		- Certificat de Coach de Fitness,  2020<br>
		- Formation en Nutrition et Sante, 2020<br><br>

		EXPeRIENCE PROFESSIONNELLE<br><br>
		Coach de Fitness | Salle OMNES , Paris | 2021 - Present<br>
		- Concevoir et mettre en œuvre des programmes d'entraînement personnalises en fonction des objectifs et des besoins individuels des clients.<br>
		- Animer des cours collectifs tels que l'aerobic, la zumba et le body pump, en maintenant un niveau d'energie eleve et en veillant à la securite des participants.<br>
		- Fournir des conseils en matière de nutrition et de style de vie sain pour aider les clients à atteindre leurs objectifs de remise en forme.<br>
		- Effectuer des evaluations regulières de la condition physique des clients et ajuster les programmes d'entraînement en consequence.<br>
		- Encourager et motiver les clients à depasser leurs limites et à adopter des habitudes de vie saines.<br><br>
		<br>
		Stagiaire en Coaching de Fitness | Fitness Park, Bordeaux | 2019<br><br>
		- Assister les coachs seniors dans la planification et la mise en œuvre des programmes d'entraînement.<br>
		- Accueillir les nouveaux membres, effectuer des evaluations de condition physique initiales et les aider à definir leurs objectifs.<br>
		- Participer à la mise en place et à la maintenance de l'equipement d'entraînement.<br>
		- Observer les cours collectifs et les seances d'entraînement individuelles pour acquerir une experience pratique.<br><br>

		COMPeTENCES<br><br>
		- Excellente connaissance des principes de l'entraînement physique et des differentes methodes d'entraînement.<br>
		- Capacite à creer des programmes d'entraînement adaptes aux besoins et aux objectifs des clients.<br>
		- Competences en communication pour transmettre efficacement les instructions et les conseils aux clients.<br>
		- Capacite à motiver et à inspirer les autres à adopter un mode de vie actif et sain.<br>
		- Souci de la securite des participants lors des cours collectifs.<br><br>
		</p>
		</div>
		</div>


		<div class="titre-volet" onclick="ouvrirVolet('nicole')"><h2>CARDIO - TRAINING</h2></div>
		<div class="volet" id="nicole">
		<div class="contenu-volet">
			<p><br>
				Le cardio training, egalement connu sous le nom d'entraînement cardiovasculaire, offre de nombreux bienfaits pour la sante et la condition physique. Cette forme d'exercice vise à augmenter le rythme cardiaque et à stimuler la capacite aerobie du corps. Parmi les avantages du cardio training, on trouve l'amelioration de l'endurance cardiovasculaire. En pratiquant regulièrement des activites telles que la course à pied, le cyclisme, la natation ou l'aerobie, le cœur se renforce et devient plus efficace pour pomper le sang et fournir de l'oxygène aux muscles.<br>

Le cardio training favorise egalement la perte de poids et la gestion du poids. En augmentant l'intensite de l'entraînement cardiovasculaire, on brûle des calories et on stimule le metabolisme, ce qui peut contribuer à une perte de graisse. De plus, cette forme d'exercice aide à reduire le taux de cholesterol et à ameliorer le profil lipidique, ce qui est benefique pour la sante cardiovasculaire.<br>

La pratique regulière du cardio training renforce egalement le système immunitaire en stimulant la circulation sanguine et en ameliorant la capacite du corps à combattre les infections et les maladies. De plus, l'exercice cardiovasculaire peut reduire les risques de certaines maladies chroniques, notamment les maladies cardiaques, le diabète de type 2 et l'hypertension arterielle.<br>

Le cardio training a egalement des bienfaits pour la sante mentale. Il favorise la liberation d'endorphines, les hormones du bonheur, ce qui contribue à reduire le stress, l'anxiete et la depression. L'entraînement cardiovasculaire regulier peut egalement ameliorer la qualite du sommeil et favoriser une meilleure concentration et une plus grande clarte mentale.<br>

En conclusion, le cardio training offre de nombreux bienfaits pour la sante et la condition physique. Il ameliore l'endurance cardiovasculaire, favorise la perte de poids, renforce le système immunitaire et contribue à une meilleure sante mentale. Que vous choisissiez de courir, de nager, de faire du velo ou de participer à des cours d'aerobie, integrer le cardio training à votre routine d'exercice est une excellente façon de prendre soin de votre corps et de votre esprit.<br>
			</p>
		<figure style="text-align: center">
		<img class="centered"src="nicole.png"  width="450" height="300"/>  
		</figure>
		<nav>
        <li><a href="rdv.php?info=10">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
		<p style="text-align: justify;">NICOLE ANISTON<br><br>
		Coach Recuperation & Masseuse | 24 ans<br>
		Adresse : 789 Rue de la Detente, 75000 Paris<br>
		Telephone : 06 69 69 69 69<br>
		Email : <a href="mailto:nicole.aniston@gmail.com">nicole.aniston@gmail.com</a><br><br>

		PROFIL PROFESSIONNEL<br><br>
		Coach specialisee dans la recuperation physique et la massotherapie. Experte dans l'accompagnement des sportifs et des personnes actives pour optimiser leur recuperation, soulager les tensions musculaires et favoriser le bien-être. Competente dans diverses techniques de massage pour repondre aux besoins individuels des clients. Attentive, empathique et dediee à fournir des soins de qualite pour ameliorer la sante et le bien-être global.<br><br>

		FORMATION<br><br>
		- Diplôme de Coach Recuperation Sportive, Institut de Formation en Sport, 2018<br>
		- Certification en Massotherapie, ecole de Massage et de Bien-être, 2020<br><br>

		EXPeRIENCE PROFESSIONNELLE<br><br>
		Coach Recuperation & Masseuse | SALLE OMNES, Paris | 2021 - Present<br>
		- evaluation des besoins de recuperation des sportifs et des personnes actives.<br>
		- Conception de programmes de recuperation personnalises incluant des techniques de massage, de relaxation et d'etirements.<br>
		- Utilisation de differentes techniques de massage telles que le massage suedois, le massage des tissus profonds et la liberation myofasciale.<br>
		- Application de soins specifiques pour soulager les tensions musculaires, ameliorer la mobilite et favoriser la recuperation musculaire.<br>
		- Sensibilisation aux techniques d'auto-massage et de relaxation pour une recuperation continue.<br><br>

		Masseuse | Spa de Luxe, Cannes | 2019 - 2021<br><br>
		- Fourniture de massages relaxants, therapeutiques et de bien-être pour les clients du spa.<br>
		- Utilisation de differentes techniques de massage pour detendre les muscles, soulager le stress et favoriser la relaxation.<br>
		- Realisation de soins du corps tels que les enveloppements, les gommages et les bains aromatiques.<br>
		- ecoute active des besoins des clients et adaptation des soins en consequence.<br><br>

		COMPeTENCES<br><br>
		- Excellente connaissance des techniques de recuperation physique et des differents types de massages.<br>
		- Capacite à evaluer les besoins individuels des clients et à concevoir des programmes de recuperation adaptes.<br>
		- Competences en communication pour etablir une relation de confiance avec les clients et les guider vers la relaxation.<br>
		- Maîtrise des techniques de massage suedois, de liberation myofasciale, de massage des tissus profonds, etc.<br>
		- Souci du bien-être et de la satisfaction des clients.<br><br>

		</p>
		</div>
		</div>


		<div class="titre-volet" onclick="ouvrirVolet('collectif')"><h2>COURS COLLECTIFS </h2></div>
		<div class="volet" id="collectif">
		<div class="contenu-volet">
			<p><br>
				Les cours de renforcement musculaire collectif offrent de nombreux bienfaits pour la sante et le bien-être. Ces seances d'entraînement sont conçues pour cibler les differents groupes musculaires du corps en utilisant des exercices specifiques et varies. Parmi les avantages de ces cours, on trouve l'amelioration de la force musculaire et de la tonicite. En travaillant avec des poids, des bandes elastiques ou simplement le poids du corps, les exercices de renforcement musculaire stimulent la croissance et le developpement des muscles, ce qui permet de les tonifier et de les renforcer.<br>

Les cours de renforcement musculaire collectif favorisent egalement une meilleure posture et une meilleure stabilite. Les exercices axes sur les muscles du tronc et du dos aident à renforcer les muscles qui soutiennent la colonne vertebrale, ameliorant ainsi l'alignement corporel et reduisant les douleurs lombaires.<br>

En plus des bienfaits physiques, ces cours sont egalement benefiques sur le plan mental. Ils aident à renforcer la confiance en soi et l'estime de soi en developpant une meilleure image corporelle. La pratique regulière du renforcement musculaire collectif permet egalement de liberer des endorphines, les hormones du bien-être, ce qui aide à reduire le stress, l'anxiete et à favoriser une sensation de bien-être general.<br>

Les cours de renforcement musculaire collectif sont egalement l'occasion de socialiser et de creer des liens avec d'autres participants. L'esprit d'equipe et la camaraderie qui se developpent pendant ces seances d'entraînement peuvent motiver et encourager à perseverer dans les efforts.<br>

En conclusion, les cours de renforcement musculaire collectif offrent de nombreux bienfaits pour la sante physique et mentale. Ils ameliorent la force musculaire, favorisent la tonicite et contribuent à une meilleure posture. Ces seances d'entraînement sont egalement une occasion de se socialiser et de developper une meilleure confiance en soi. Que vous soyez debutant ou experimente, integrer des cours de renforcement musculaire collectif dans votre routine d'exercice peut vous aider à atteindre vos objectifs de forme physique tout en vous offrant une experience motivante et gratifiante.<br>
			</p>
		<figure style="text-align: center">
		<img class="centered"src="sport_collectif.png"  width="450" height="281"  />  
		</figure>
		<nav>
        <li><a href="rdv.php?info=11">PRENDRE RENDEZ-VOUS</a></li>
        <li><a onclick="retourPagePrecedente()" style="cursor: pointer;">RETOUR </a></li>
        <li><a href="discuter.php">DISCUTER</a></li>
      </nav>
		<p style="text-align: justify;">

			Jean Rince-Oeil<BR><br>

EXPERIENCE PROFESSIONNELLES:<BR><br>
Professeur de Cours Collectif | Salle OMNES, Paris | Octobre 2018 - Present<BR>
- Conception et animation de cours collectifs de remise en forme pour tous les niveaux.<BR>
- Encadrement des participants en veillant à la securite et à l'efficacite des exercices.<BR>
- Creation de programmes d'entraînement adaptes aux besoins et aux objectifs des participants.<BR>
- Animation de seances motivantes et dynamiques pour favoriser la progression et la satisfaction des participants.<BR>
- Gestion des inscriptions, de la planification des cours et des reservations de salles.<BR><br>

FORMATIONS:<BR><br>
Diplôme en education Physique et Sportive | Universite de Paris, France | 2014-2018<BR>
- Formation approfondie en anatomie, physiologie et techniques d'enseignement de l'education physique.<BR>
- Specialisation dans les cours collectifs et les methodes d'entraînement motivantes.<BR><br>

CERTIFICATIONS:<BR><br>
- Certificat d'instructeur de Fitness et Cours Collectif | Federation Française de Fitness | 2018<BR>
- Certificat de Premiers Secours | Croix-Rouge Française | 2019<BR><br>

COMPTETENCES:<BR><br>
- Expertise en animation de cours collectifs tels que l'aerobic, le step, le body sculpt, le cardio-boxing, et le Zumba.<BR>
- Bonne connaissance des principes d'entraînement et de la planification de seances equilibrees.<BR>
- Capacite à s'adapter aux differents niveaux de condition physique et à motiver les participants.<BR>
- Excellentes competences en communication et en relation interpersonnelle.<BR>
- Esprit d'equipe et capacite à travailler dans un environnement dynamique.<BR><br>

LANGUES:<BR><br>
- Français (langue maternelle)<BR>
- Anglais (niveau intermediaire)<BR><br>


			

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
