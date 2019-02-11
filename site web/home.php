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
                                    
                                        <div class="button-form"><button onclick="$dialog2.showModal()">Connexion</button> </div>
                                        <div class="button-form"><button onclick="$dialog.showModal()">Inscription</button></div> 
                                    
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
			                    <input type="text" name="nom" />
			                    
			                    
			                    <label for="prenom">Prenom :<label>
			                    <input type="text" name="prenom" />
			                    
			                    
			                    <label for="password">Mot de passe :<label>
			                    <input type="password" name="password" />
			                    

			                    <label for="password_bis">Vérification :<label>
			                    <input type="password" name="password_bis"  />
			                    
			                    
			                    <label for="email">E-mail :<label>
			                    <input type="email" name="email" />

								<div class="button-form">

									<input type="submit" value="Envoyer" />
							
                            		<button onclick="$dialog.close()">Fermer</button>&nbsp;

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
							
                            		<button onclick="$dialog2.close()">Fermer</button>&nbsp;

                        		</div>

			                </p>
			            </form></div> 
                         
                    </dialog>

                    <script>
                            var $dialog = document.getElementById('mydialog'); 
                            if(!('show' in $dialog)){ 
                                    document.getElementById('promptCompat').className = 'no_dialog'; 
                                } 
                            $dialog.addEventListener('close', function() { 
                                console.log('Fermeture. ', this.returnValue); 
                                }); 
                    </script> 

               		<script>
                            var $dialog2 = document.getElementById('mydialog2'); 
                            if(!('show' in $dialog2)){ 
                                    document.getElementById('promptCompat').className = 'no_dialog'; 
                                } 
                            $dialog2.addEventListener('close', function() { 
                                console.log('Fermeture. ', this.returnValue); 
                                }); 
                    </script>        
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>