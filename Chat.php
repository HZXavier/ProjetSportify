<?php
$connexion= new PDO('mysql:host=localhost;dbname=fitness;charset=utf8','root','');
if(isset($_POST['valider'])){
	if(!empty($_POST['Nom']) AND !empty($_POST['message'])){
		$Nom=htmlspecialchars($_POST['Nom']);
		$message=nl2br(htmlspecialchars($_POST['message']));

		$insererMessage=$connexion->prepare('INSERT INTO message(Nom, message) VALUES(?,?)');
		$insererMessage->execute(array($Nom, $message));

	}else{
		echo "compléter les champs";
	}
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Messagerie</title>
	<script> src="htpps://ajax.goodleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>
</head>
<body>
	<form method='POST' action='' align='center'>
		<input type='text' name='Nom'>
		<br></br>
		<textarea name='message'></textarea>
		<br>
	</form>
	<section Id='messages'></section>

	<script>
		setInterval('chargerMessage()', 500);
		function chargerMessage(){
			$('#messages').load('chargerMessage.php');
		}
	</script>

</body>
</html>
