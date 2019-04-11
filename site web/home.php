<?php

session_start();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Synck - Accueil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

			<div id="page-wrapper">

					<div id="wrapper">

							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Bienvenue<br />
									Synck</h1>
									<p>Slycnk, la première plateforme destinée à la gestion des associations étudiantes. <br /> Parce qu'il est souvent difficile de tenir une association, ce site à pour vocation de centraliser toutes les informations utiles de ton asso !</p>
									<ul class="actions">
										<li><a href="#second" class="button primary color1 circle icon fa-angle-right">Next</a></li>
                                    </ul>
                                    <ul class="actions">
										<li><a href="#second" class="button primary color1 circle icon fa-angle-down">Next</a></li>
									</ul>
								</div>
								
                            </section>
                            
                            <section class="panel color1" id="second">
								<div class="intro">
									<h2 class="major">Ton espace perso !</h2>
									<p>Gratuitement (et ça le restera) tu peux créer ton espace perso ou t'inscrire si tu en as pas déjà un.</p>
                                    
                                        <div class="button-form"><button data-target="mydialog2" class="modal-button">Connexion</button> </div>
                                        <div class="button-form"><button data-target="mydialog" class="modal-button">Inscription</button> </div>
                                    
                                </div>
                            </section>

							<section class="panel spotlight medium right color4-alt" id="first">
								<div class="content span-9">
									<h2 class="major">Pourquoi Synck ?</h2>
									<p>Le plus difficile dans une association, c'est la communication. Entre plusieurs plateforme en ligne un problème de com' est vite arrivé. On te propose aujourd'hui de réunir le tout ici, sur Synck !</p>
                                    <ul class="actions">
										<li><a href="#third" class="button primary color1 circle icon fa-angle-right">Next</a></li>
									</ul>
                                </div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
                            </section>
                                                       
							<section class="panel color4-alt">
								<div class="intro color2">
									<h2 class="major">Contact</h2>
									<p>Notre omniprésence nous trahis sur notre politique d'être l'unique source d'information. Mais voici nous sommes quand même présent. Ici, et là.</p>
								</div>
								<div class="inner columns divided" id="third">
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="#">@Synck</a></li>
											<li class="icon fa-facebook"><a href="#">facebook.com/Synck</a></li>
											<li class="icon fa-instagram"><a href="#">@Synck</a></li>
										</ul>
									</div>
								</div>
                            </section>
                        <div class="copyright">&copy; Synck.</div>
                    </div>

            </div>
                    
            <p id="promptCompat">Votre navigateur ne pend pas en charge les balises <code><dialog></code></p> 
                <dialog id="mydialog" close> 
                        Créée ton espace personnel ! 
                        <br/>
                        <br/>
                        <div>           
                        <form method="post" action="registration_process.php">
			                <p> 
			            
			                    <label for="pseudo">Pseudo :<label>
			                    <input type="text" name="pseudo" />
			                    
			                    
			                    <label for="nom">Nom :<label>
			                    <input type="text" name="last_name" />
			                    
			                    
			                    <label for="prenom">Prenom :<label>
			                    <input type="text" name="first_name" />
			                    
			                    
			                    <label for="password">Mot de passe :<label>
			                    <input type="password" name="password" />
			                    

			                    <label for="password_bis">Vérification :<label>
			                    <input type="password" name="password_bis"  />
			                    
			                    
			                    <label for="email">E-mail :<label>
			                    <input type="email" name="email" />

								<div class="button-form">

									<input type="submit" value="Envoyer" />
									<input type="button" class="button-close" value="Fermer" />

                        		</div> 

			                </p>
			            </form></div> 
                        
                    </dialog>

                   <p id="promptCompat">Votre navigateur ne pend pas en charge les balises <code><dialog></code></p> 
                <dialog id="mydialog2" close> 
                        Log Toi! 
                        <br/>
                        <br/>
                        <div>           
                        <form method="post" action="login_process.php">
			                <p> 
			            
			                    <label for="pseudo">Pseudo :<label>
			                    <input type="text" name="pseudo" required="required" />

			                    <label for="password">Mot de passe :<label>
			                    <input type="password" name="password" required="required" />
								
								<div class="button-form">

									<input type="submit" value="Envoyer" />
                            		<input type="button" class="button-close" value="Fermer" />

                        		</div>

			                </p>
			            </form></div> 
                         
                    </dialog>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

		<?php 
			if(isset($_SESSION['passworderr']) && $_SESSION['passworderr']===false) { 
		?>
		<script>
			alert('Wrong password');
		</script>
		<?php 
			} 
			unset($_SESSION['passworderr']);
		?>

		<?php 
			if(isset($_SESSION['pseudoerr']) && $_SESSION['pseudoerr']===false) { 
		?>
		<script>
			alert('Wrong pseudo, it doesn\'t exist');
		</script>
		<?php 
			} 
			unset($_SESSION['pseudoerr']);
		?>

		<?php 
			if(isset($_SESSION['emptyfield']) && $_SESSION['emptyfield']===false) { 
		?>
		<script>
			alert('All fields must be completed');
		</script>
		<?php 
			} 
			unset($_SESSION['emptyfield']);
		?>

		<?php 
			if(isset($_SESSION['passworddiff']) && $_SESSION['passworddiff']===false) { 
		?>
		<script>
			alert('Passwords are differents');
		</script>
		<?php 
			} 
			unset($_SESSION['passworddiff']);
		?>

		<?php 
			if(isset($_SESSION['pseudouse']) && $_SESSION['pseudouse']===false) { 
		?>
		<script>
			alert('Pseudo already used');
		</script>
		<?php 
			} 
			unset($_SESSION['pseudouse']);
		?>

		<?php 
			if(isset($_SESSION['emailuse']) && $_SESSION['emailuse']===false) { 
		?>
		<script>
			alert('email already used');
		</script>
		<?php 
			} 
			unset($_SESSION['emailuse']);
		?>


	</body>
</html>