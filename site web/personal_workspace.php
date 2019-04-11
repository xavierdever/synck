<?php

	session_start();

?>

<!DOCTYPE HTML>
<html>

	<head>
		<title>Synck - Espace Perso</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body>
		<div id="page-wrapper">
			<div id="wrapper">
				<section class="panel banner">
					<div class="content color0 span-3-75">
						<h1> Espace Perso !! </h1> 
						
						<p> 
							Vous vous êtes connecté<br>
						</p>

						<p>
							Pseudo :
							<?php echo $_SESSION['pseudo']; ?> 
						</p>

						<p>
							Nom :
							<?php echo $_SESSION['last_name']; ?> 
						</p>

						<p>
							Prenom :
							<?php echo $_SESSION['first_name']; ?> 
						</p>

						<p>
							E-Mail :
							<?php echo $_SESSION['email']; ?> 
						</p>
						<form method="post" action="logoff_process.php">
							<p> 						
								<input type="submit" value="Deconnexion" />
							</p>
						</form>						
					</div>
				<section>

				<section class="panel color1">
					<div class="content span-5">
						<h2 class="major">Tes fichiers !</h2>
						<?php 
							$user = $_SESSION['email'];
							/* if ($handle = opendir('users/'.$user)) {
								$thelist = array();
								while (false !== ($file = readdir($handle))) {
												if ($file != "." && $file != "..") {
													$thelist[] = $file;
												}
										}
								closedir($handle);
							}
							*/

							if (!$thelist = glob('users/'.$user . '/*', GLOB_NOSORT)) {
								echo "Impossible de retrouver du contenu dans le dossier utilisateur";
							}
							foreach ($thelist as $file_path) {
								$file_tab = explode("/", $file_path);
								$file_name = $file_tab[sizeof($file_tab)-1];
								echo '<div>';
											echo '<a href="fileDownload.php?file_name=' . urlencode($file_name) . '" class="button" download> Download : '. $file_name . '</a>';
											echo '<form action="deleteFile.php" method="post">
												 	<input name="file_name" type="hidden" value="'.$file_name.'">
												 	<button type="submit" name="remove">Remove</button>
												 </form>';
								echo '</div>';
							}
						?>

						<form method="post" action="fileUpload.php" enctype="multipart/form-data">
									<div class="upload-button-wrapper">
										<label class = "button"for="myFile">Choose File</label>
										<input type="file" name="myFile" id="myFile" class="input-file" />
										<input class ="button" type="submit" name="submit" value="Upload"/>
									</div>
						</form>
						        
                    </div>
                </section>
				
			</div>
		</div>
	</body>
	    
</html>