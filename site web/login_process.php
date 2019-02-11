<?php

	session_start();

	$con = new PDO("mysql:host=localhost;dbname=synck;charset=utf8", "root", "");

	$query=$con->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
	$query->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
	$query->execute();

	if ($query->rowCount() == 0) {
		echo "Wrong pseudo, it doesn't exist";
		echo '<br> <br> <a href="home.php">Essayer encore ?</a>';
		exit;
	} 

	$data = $query->fetch();
	
	if ($data['password'] != md5($_POST['password'])) {
		echo "Wrong password";
		echo '<br> <br> <a href="home.php">Essayer encore ?</a>';
		exit;
	}

	$_SESSION['pseudo'] = $data['pseudo'];
	$_SESSION['nom'] = $data['nom'];
	$_SESSION['prenom'] = $data['prenom'];
	$_SESSION['email'] = $data['email'];

	header('Location: personal_workspace.php');
	exit();

?>