<?php
$connexion= new PDO('mysql:host=localhost;dbname=fitness;charset=utf8','root','');
$recupMessages=$connexion->query('SELECT * FROM messages');
while(message=$recupMessages->fetch()){
	?>
	<div class="message">
		<h4><?= $message['Nom'];?></h4>
		<p><?= $message['message'];?><p>
	</div>
	<?php
} 
?>
