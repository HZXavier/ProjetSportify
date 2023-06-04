<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>SALLE DE SPORT</title>
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
	    	<h2>NOTRE SALLE DE SPORT</h2><br><br>

	    	<h4>Les horaires de la salle :</h4>

	    	<table style="display: flex; justify-content: center; font-size: 22px;">
				  <tr>
				    <th>Jour</th>
				    <td>Lundi</td>
				    <td>Mardi</td>
				    <td>Mercredi</td>
				    <td>Jeudi</td>
				    <td>Vendredi</td>
				    <td>Samedi</td>
				    <td>Dimanche</td>
				  </tr>
				  <tr>
				    <th>Horaires</th>
				    <td>8h - 20h</td>
				    <td>8h - 20h</td>
				    <td>9h - 20h</td>
				    <td>8h - 20h</td>
				    <td>8h - 20h</td>
				    <td>11h - 17h</td>
				    <td>Ferme</td>
				  </tr>
				</table>



	    	<br><h4>Quelques règles et conseils concernant notre materiel :</h4>

	    	<div class="titre-volet" onclick="ouvrirVolet('tractions')">
	    		<h3>TRACTIONS</h3>
			</div>
		  <div class="volet" id="tractions">
		    <div class="contenu-volet">
		    	<figure style="text-align: center">
					<img class="centered" src="traction.png"  width="450" height="300"/>
				</figure>
		      <p style ="text-align: justify;"> D'un point de vue sportif, les tractions sont un exercice physique polyvalent qui sollicite principalement les muscles du dos, des epaules et des bras. Elles servent à renforcer la musculature du haut du corps, ameliorer la stabilite et la posture, et developper la force fonctionnelle. Voici quelques-uns des principaux benefices des tractions :<br><br>

			1. Renforcement musculaire : Les tractions ciblent principalement les muscles du dos, notamment le grand dorsal, les trapèzes, les rhomboïdes et les muscles des bras comme les biceps et les avant-bras. En effectuant cet exercice regulièrement, vous pouvez developper une musculature dorsale plus forte et plus definie.<br>

			2. Amelioration de la posture : Les tractions peuvent aider à corriger les desequilibres musculaires qui sont souvent à l'origine d'une mauvaise posture. En renforçant les muscles du dos et des epaules, les tractions contribuent à maintenir une position droite et à reduire les risques de problèmes lies à la posture, tels que les douleurs au cou et au dos.<br>

			3. Developpement de la force fonctionnelle : Les tractions sont un mouvement fonctionnel qui implique l'utilisation de plusieurs groupes musculaires simultanement. Elles vous aident à developper une force globale dans le haut du corps, ce qui peut se traduire par une amelioration des performances dans d'autres activites physiques, comme l'halterophilie, l'escalade, la natation et les sports de contact.<br>

			4. Augmentation de la puissance du haut du corps : En raison de l'implication de plusieurs muscles majeurs, les tractions sont un excellent exercice pour developper la puissance du haut du corps. La capacite de tirer son propre poids vers le haut exige un effort important, ce qui peut conduire à une amelioration de la force et de la puissance musculaire.<br>

			5. Defi physique et mental : Les tractions sont un exercice exigeant qui necessite force, endurance et coordination. Les maîtriser et augmenter progressivement le nombre de repetitions peut être un defi stimulant tant sur le plan physique que mental. Cela peut vous aider à developper la discipline, la perseverance et la confiance en vous.<br><br>

			Il convient de noter que les tractions peuvent être adaptees en fonction de votre niveau de condition physique. Si vous êtes debutant, vous pouvez commencer par des variantes plus faciles, telles que les tractions assistees avec une bande elastique ou en utilisant une machine d'assistance. Avec le temps et la pratique, vous pourrez progresser vers des tractions complètes non assistees.</p></div></div>


		  	<div class="titre-volet" onclick="ouvrirVolet('rameurs')">
	    		<h3>RAMEURS</h3>
			</div>
		  <div class="volet" id="rameurs">
		    <div class="contenu-volet">
		    	<figure style="text-align: center">
					<img class="centered" src="rameur.png"  width="450" height="300"/>
				</figure>
		    <p style ="text-align: justify;">D'un point de vue sportif, les exercices de rameur, egalement connus sous le nom de rowing, sont des mouvements qui sollicitent principalement les muscles du dos, des epaules, des bras et des jambes. Ils sont souvent utilises comme exercices de renforcement musculaire et de cardio-training. Voici à quoi ils servent et comment effectuer le mouvement :<br><br>

			1. Renforcement musculaire : Les exercices de rameur sont excellents pour renforcer les muscles du dos, notamment le grand dorsal, les trapèzes, les rhomboïdes et les muscles des bras tels que les biceps et les avant-bras. Ils ciblent egalement les muscles des epaules, des jambes et du tronc. Ces mouvements aident à equilibrer la musculature du haut du corps, ce qui peut ameliorer la posture et reduire les risques de desequilibres musculaires.<br>

			2. Cardio-training : Les exercices de rameur sont egalement une forme d'entraînement cardiovasculaire efficace. Ils permettent d'augmenter la frequence cardiaque et d'ameliorer l'endurance cardio-respiratoire. En integrant des seances d'entraînement de rameur dans votre routine, vous pouvez ameliorer votre capacite à effectuer des activites aerobies de longue duree.<br>

			Pour effectuer correctement le mouvement de rameur, suivez ces etapes :<br>

			1. Commencez en vous asseyant sur le siège du rameur avec les pieds fixes sur les repose-pieds. Assurez-vous que les sangles des repose-pieds sont bien ajustees pour maintenir vos pieds en place.<br>

			2. Saisissez la poignee du rameur avec les mains, les paumes vers le bas, à une distance legèrement superieure à la largeur des epaules.<br>

			3. Dans une position de depart, gardez les bras tendus devant vous, le dos droit et les jambes flechies. Vos genoux devraient être plies, prêts à être etendus.<br>

			4. Pour initier le mouvement, poussez avec les jambes en les etendant complètement tout en inclinant legèrement le torse vers l'arrière. Continuez en utilisant les muscles du dos pour tirer la poignee vers votre corps.<br>

			5. Une fois que la poignee atteint le bas de votre cage thoracique, maintenez brièvement cette position contractee.<br>

			6. Inversez le mouvement en commençant par une extension des bras, puis en inclinant legèrement le torse vers l'avant et en flechissant les jambes pour revenir à la position de depart.<br>

			7. Repetez le mouvement de manière fluide et continue, en utilisant un rythme contrôle.<br><br>

			Il est important de maintenir une bonne technique tout au long du mouvement, en evitant de se balancer excessivement avec le corps et en gardant le dos droit. Il est recommande de commencer avec une charge legère et d'augmenter progressivement l'intensite à mesure que vous maîtrisez le mouvement et renforcez votre condition physique.</p></div></div>

			
		     
		    <div class="titre-volet" onclick="ouvrirVolet('bancs')">
	    		<h3>BANCS</h3>
			</div>
		  <div class="volet" id="bancs">
		    <div class="contenu-volet">
		    	<figure style="text-align: center">
					<img class="centered" src="bancs.png"  width="450" height="300"/>
				</figure>
			<p style ="text-align: justify;">
				Les bancs de salle de sport sont des equipements polyvalents et pratiques qui offrent de nombreux avantages pour les seances d'entraînement. Voici quelques raisons pour lesquelles les bancs de salle de sport sont pratiques :
				<br><br>

			1. Entraînement de la musculation : Les bancs de salle de sport sont souvent utilises pour les exercices de musculation. Ils permettent de realiser une variete d'exercices pour differents groupes musculaires tels que le developpe couche, les ecartes, le developpe militaire, les biceps curl, les triceps dips, les flys, etc. Ces exercices visent à renforcer les muscles du haut du corps, y compris la poitrine, les epaules, les bras et le dos.<br>

			2. Reglabilite : La plupart des bancs de salle de sport sont reglables en termes d'inclinaison et de position. Cela permet de cibler specifiquement differents muscles et de modifier l'angle de travail. Par exemple, un banc incline peut accentuer le travail des muscles du haut de la poitrine, tandis qu'un banc decline peut cibler davantage les muscles inferieurs de la poitrine. Cette adaptabilite permet de diversifier les exercices et de travailler les muscles de differentes manières.<br>

			3. Soutien et stabilite : Les bancs de salle de sport offrent un soutien et une stabilite pendant les exercices de musculation. Ils permettent de maintenir une position stable et contrôlee, ce qui reduit les risques de blessures et facilite l'execution correcte des mouvements. Lorsqu'on utilise un banc, il est plus facile de maintenir une bonne posture et de se concentrer sur les muscles cibles.<br>

			4. Progression et charges supplementaires : Les bancs de salle de sport permettent une progression de l'entraînement en termes de poids utilise. Ils sont souvent utilises en combinaison avec des haltères, des barres de musculation ou des machines de musculation. En augmentant progressivement la charge, il est possible de developper la force et la masse musculaire au fil du temps.<br>

			5. Polyvalence et gain d'espace : Les bancs de salle de sport sont compacts et polyvalents, ce qui en fait des equipements pratiques pour les salles de sport ou même pour un entraînement à domicile. Ils permettent de realiser une variete d'exercices avec un seul equipement, ce qui economise de l'espace et rend l'entraînement plus efficace.<br><br>

			Il est important de noter que l'utilisation des bancs de salle de sport doit être effectuee de manière sûre et avec une bonne technique. Il est recommande de demander l'aide d'un professionnel de la forme physique pour s'assurer d'une execution correcte des exercices et de prevenir les blessures.<br>
			</p></div></div>

			<br><h4>Nos responsables de salle :</h4>

			<div class="coord_gerant">
			  <div class="nom_gerant">Benoit Traitre</div>
			  Telephone : <u>+ 33 7 92 93 23 34</u><br>
			  Email : 
			  <a href="mailto:benoit.traitre@gmail.com">benoit.traitre@gmail.com</a>
			</div>

			<div class="coord_gerant">
			  <div class="nom_gerant">Hugues Lacroix</div>
			  <div class="contact-details">Telephone : <u>+ 33 7 92 93 23 35</u></div>
			  Email : 
			  <a href="mailto:hugues.lacroix@gmail.com">hugues.lacroix@gmail.com</a>
			</div>

			<div class="coord_gerant">
			  <div class="nom_gerant">François Pepere</div>
			  <div class="contact-details">Telephone : <u>+ 33 7 92 93 23 36</u></div>
				Email : 
			  <a href="mailto:francois.pepere@gmail.com">francois.pepere@gmail.com</a>
			</div>




	  <br><br>
    <footer class="footer">
      <p1>Nous contacter :<br><u>+33 6 61 48 19 96</u>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; 
        <a href="mailto:xavier.heitz@edu.ece.fr">xavier.heitz@edu.ece.fr</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
        <a href="https://maps.google.com/maps?q=66 rue des Champarons, 92700, Colombes" target="_blank">
        66 rue des Champarons, 92700, Colombes</a><br>
        &copy;2023 Sportify</p1>
    </footer>

  </div>  

  <script>
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

</body>
</html>
