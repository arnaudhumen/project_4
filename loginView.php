<!DOCTYPE HTML>

<html>
	<head>
		<title>Billet simple pour l'Alaska test</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />		
		<script src="https://cdn.tiny.cloud/1/8thwjsyaavf4qkt2o7m5ad6t8mgsxvy6m5zmry5ndvyy6rjr/tinymce/5/tinymce.min.js"></script>
  		<script>tinymce.init({selector:'#contenu', height : 500});</script>
	</head>
	<body>

		<header>
			<h2>Se connecter</h2>
		</header>

			<a href="index.php?action=signin">S'inscrire</a> 
			<a href="index.php?action=home">Retour a l'acceuil</a> 

			<form method="post" action="index.php?action=loginMember">
				<p>
   					<label>Votre nom</label> :	<input type="text" name="nom_login" />
   				</p>
   				<p>
   					<label>Votre mot de passe</label> :	<input type="password" name="mdp_login" />
   				</p>   				
   				<p>
   					<input type="submit" value="Se connecter" />
   				</p>
			</form>	

	</body>
</html>