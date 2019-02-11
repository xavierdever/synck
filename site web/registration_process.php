<?php

	session_start();

	$con = new PDO("mysql:host=localhost;dbname=synck;charset=utf8", "root", "");

	$pseudo = $_POST['pseudo'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$password = $_POST['password'];
	$password_bis = $_POST['password_bis'];
	$email = $_POST['email'];
	$passwordhash = md5($password); //Mot de passe en MD5

	$query=$con->prepare("SELECT COUNT(*) AS nbr FROM users WHERE pseudo =:pseudo");
	$query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
	$query->execute();
	$pseudo_free=($query->fetchColumn()==0);
	$query->closeCursor();

	$query=$con->prepare("SELECT COUNT(*) AS nbr FROM users WHERE email =:email");
	$query->bindValue(':email',$email, PDO::PARAM_STR);
	$query->execute();
	$email_free=($query->fetchColumn()==0);
	$query->closeCursor();


	if($password != $password_bis) {
		$password_erreur = "passwords are different";
		echo 'passwords are different';
		echo '<br> <br> <a href="home.php">Essayer encore ?</a>';

	} elseif(!$pseudo_free) {

		$pseudo_erreur = "pseudo already used";
		echo "pseudo already used";
		echo '<br> <br> <a href="home.php">Essayer encore ?</a>';

	} elseif(!$email_free) {

		$email_erreur = "email already used, you should already have an account";
		echo "email already used, you should already have an account";
		echo '<br> <br> <a href="home.php">Essayer encore ?</a>';

	} else {	

		$sql = "INSERT INTO users VALUES ('$pseudo', '$nom', '$prenom', '$passwordhash', '$email');";
		$con->query($sql);
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
		$_SESSION['email'] = $email;
		$dir = 'users' . '/' . $email; 
		mkdir($dir, 0777, true);
		echo 'votre compte a bien été enregistré';
		header('Location: personal_workspace.php');
		exit();
	}
?>