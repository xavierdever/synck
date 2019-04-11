---------------------------Bonjour---------------------------

Nous vous proposons aujourd'hui un site internet pouvant vous servir de stockage de fichier en ligne !
Bienvenue sur Synck !


. Notre site est constitu� de deux pages.

. La premi�re est la page d'accueil.
Vous pouvez vous inscrire en renseignant les informations n�cessaires.
Vous serez ensuite enregistr� dans la base de donn�es.
Une fois cette �tape franchie, vous pourrez acc�der � votre espace personnel en renseignant votre pseudo et votre mot de passe.
Si vos informations sont correctes, vous acc�derez � la seconde page.

. La seconde page est votre espace personnel.
Trois fonctions sont disponibles :
	- l'upload de fichiers : vous devez s�lectionner un fichier puis, cliquer sur le bouton "upload". Votre fichier sera alors disponible et visible dans votre espace.
	- le download de fichiers : une fois que vos fichiers sont dans votre espace, il vous suffit de cliquer dessus pour le t�l�charger directement.
	- la suppression de fichiers : vous n'avez qu'� cliquer sur le bouton "remove" situ� � cot� de votre fichier pour supprimer ce dernier de votre espace. 

---------------------------Techniquement---------------------------

La gestion de l'inscription et de la connexion sont classiques. Elles sont g�r�es par l'inscription et la v�rification des informations dans une base de donn�es. 
Ces informations sont transmises par des requ�tes SQL � travers les diff�rents formulaires. Les informations ne passent pas dans les URL et l'injection est g�r�e.
Les mots de passe n'apparaissent jamais en clair et sont hash�s dans la base de donn�es.

En ce qui concerne la gestion des fichiers, � l'inscription de l'utilisateur, un dossier est cr�� dans le r�pertoire racine. C'est dans ce dossier que seront stock�s et g�r�s 
les fichiers de l'utilisateur.