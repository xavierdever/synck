<?php

session_start();

$cfg = require 'configuration.php';
$cfgbdd = require('config.php');
$user = $_SESSION['email'];


$erreur=0;
if ($_FILES['myFile']['size'] == 0) {
	echo "Veuillez insérer un fichier";
	exit();
}
if ($_FILES['myFile']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['myFile']['size'] > $cfg['maxsize']) $erreur = "Le fichier est trop gros";
if($erreur) echo $erreur;


$info = pathinfo($_FILES['myFile']['name']);
print($info['extension']);



if (in_array($info['extension'], $cfg['valid_extensions'])) {
	echo "Extension validée";
	$con = new PDO("mysql:host=".$cfgbdd['database']['host'].";dbname=".$cfgbdd['database']['dbname'].";charset=utf8",$cfgbdd['database']['user'],$cfgbdd['database']['password']);

	$query = $con->prepare("INSERT INTO files(f_filename, f_filesize, f_date, f_type,f_owner_pseudo) values(:f_filename, :f_filesize, NOW(), :f_type,:f_owner_pseudo);");
	$query->bindValue(':f_filename', $_FILES['myFile']['name'], PDO::PARAM_STR);
	$query->bindValue(':f_filesize',$_FILES['myFile']['size'], PDO::PARAM_STR);
	$query->bindValue(':f_type', $info['extension'], PDO::PARAM_STR);
	$query->bindValue(':f_owner_pseudo', $_SESSION['pseudo'], PDO::PARAM_STR);
	$ok = $query->execute();
	if(!$ok) {
		print_r($query->errorInfo());
		exit;
	}
	$query->closeCursor(); 


	// attention au extension de fichier php/html/js etc : rajouter une autre ext a coté

	$dir = "users/";
	$user = $dir . $user . '/';
	$nom = $user.basename($_FILES['myFile']['name']);
	$res = move_uploaded_file($_FILES['myFile']['tmp_name'], $nom);
	if ($res) {
		echo "Upload réussi";
		header('Location: personal_workspace.php');
		exit();
		}
}
else echo "Veuillez insérer un fichier compatible."

?>