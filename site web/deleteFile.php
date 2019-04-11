<?php
	session_start();
	$file = $_POST["file_name"];
	$filepath = "users/" . $_SESSION['email']. "/" . $file;

	if (file_exists($filepath)) {
		unlink($filepath);
	}
	else 
		echo "Fichier ". $filepath. " introuvable";
	header('Location: personal_workspace.php');
?>