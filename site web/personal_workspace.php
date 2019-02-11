<?php

	session_start();

?>

<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Synk</title>
        <style type="text/css">
		    .file-box{
		        display: inline-block;
		        text-align: center;
		        margin: 0 15px;
    	}
		</style>
    </head>

    <body>
		<h1> Personal Space !! </h1> 
		
		<p> 
			Vous vous êtes connecté<br>
		</p>

		<p>
			Pseudo :
			<?php echo $_SESSION['pseudo']; ?> 
		</p>

		<p>
			Nom :
			<?php echo $_SESSION['nom']; ?> 
		</p>

		<p>
			Prenom :
			<?php echo $_SESSION['prenom']; ?> 
		</p>

		<p>
			E-Mail :
			<?php echo $_SESSION['email']; ?> 
		</p>

		<?php 
			 $user = $_SESSION['email'];
			 if ($handle = opendir('users/'.$user)) {
			 	$thelist = array();
			   while (false !== ($file = readdir($handle))) {
			          if ($file != "." && $file != "..") {
			          	$thelist[] = $file;
			          }
			      }
			  closedir($handle);
			}

			foreach ($thelist as $file) {
				echo '<div>';
            	echo '<p><a href="fileDownload.php?file=' . urlencode($file) . '">Download : ' . $file . '</a></p>';
        		echo '</div>';
			}
		?>

		<form method="post" action="fileUpload.php" enctype="multipart/form-data">
	        <!-- <label for="fileName">Nom du fichier </label><br/> -->
	        <input type="hidden" name="MAX_SIZE" value="100000000"/><br/>
	        <input type="file" name="myFile" id="myFile"/><br/>
	        <input type="submit" name="submit" value="Upload"/>
        </form>

		<form method="post" action="logoff_process.php">
			<p> 						
				<input type="submit" value="Deconnexion" />
			</p>
		</form>
		
    </body>
	    
</html>