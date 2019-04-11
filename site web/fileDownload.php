<?php
	
session_start();
 if(isset($_REQUEST["file_name"])){
// Get parameters
$file = urldecode($_REQUEST["file_name"]); // Decode URL-encoded string
//corriger faute par une config
$filepath = "users/" . $_SESSION['email']. "/" . $file;

// Process download
if(file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'. basename($filepath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    flush(); // Flush system output buffer
    readfile($filepath);
    exit;
}
else
	echo "Fichier introuvable.";
}
?>