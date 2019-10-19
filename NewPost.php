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
			<h2>Nouveau Chapitre</h2>
		</header>
					<form method="post" action="index.php?action=addPost">
						<p>
							<input type="text" id="titre" name="titre" placeholder="Titre du nouveau chapitre" />
						</p>
						<textarea id='contenu' name="contenu"></textarea>
						<ul class="actions">
							<li><input type="submit" value="Publier" class="alt" name="submit" /></li>
						</ul>
					</form>

			<a href="index.php?action=listPosts">Retour a la liste des chapitres</a>
	<body>