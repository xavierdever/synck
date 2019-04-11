---------------------------Bonjour---------------------------

Nous vous proposons aujourd'hui un site internet pouvant vous servir de stockage de fichier en ligne !
Bienvenue sur Synck !


. Notre site est constitué de deux pages.

. La première est la page d'accueil.
Vous pouvez vous inscrire en renseignant les informations nécessaires.
Vous serez ensuite enregistré dans la base de données.
Une fois cette étape franchie, vous pourrez accéder à votre espace personnel en renseignant votre pseudo et votre mot de passe.
Si vos informations sont correctes, vous accèderez à la seconde page.

. La seconde page est votre espace personnel.
Trois fonctions sont disponibles :
	- l'upload de fichiers : vous devez sélectionner un fichier puis, cliquer sur le bouton "upload". Votre fichier sera alors disponible et visible dans votre espace.
	- le download de fichiers : une fois que vos fichiers sont dans votre espace, il vous suffit de cliquer dessus pour le télécharger directement.
	- la suppression de fichiers : vous n'avez qu'à cliquer sur le bouton "remove" situé à coté de votre fichier pour supprimer ce dernier de votre espace. 

---------------------------Techniquement---------------------------

La gestion de l'inscription et de la connexion sont classiques. Elles sont gérées par l'inscription et la vérification des informations dans une base de données. 
Ces informations sont transmises par des requêtes SQL à travers les différents formulaires. Les informations ne passent pas dans les URL et l'injection est gérée.
Les mots de passe n'apparaissent jamais en clair et sont hashés dans la base de données.

En ce qui concerne la gestion des fichiers, à l'inscription de l'utilisateur, un dossier est créé dans le répertoire racine. C'est dans ce dossier que seront stockés et gérés 
les fichiers de l'utilisateur.