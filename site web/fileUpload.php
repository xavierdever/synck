<?php

session_start();

$maxsize =$_POST['MAX_SIZE'];
$user = $_SESSION['email'];
$valid_extensions = array('jpg', 'png', 'jpeg', 'doc', 'docx', 'txt', 'pdf', 'xls', 'xlsx','ppt', 'pptx', 'mp3', 'mkv', 'mp4', 'avi');
//


if ($_FILES['myFile']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['myFile']['size'] > $maxsize) $erreur = "Le fichier est trop gros";

$file_extension = strtolower(substr(strrchr($_FILES['myFile']['name'],'.'),1));

if (in_array($file_extension, $valid_extensions)) echo "Extension validée";


//if (!is_dir((string)$user))
//	mkdir($user, 0777, true);

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

// synchronisation avec une BDD
session_destroy();

?>