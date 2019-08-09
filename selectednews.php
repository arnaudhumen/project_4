<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
					<form method="post" action="controllerupdate.php">
						<p>
							<input type="text" id="titre" name="titre" value="<?= htmlspecialchars($news->titre()) ?>" />
						</p>
						<textarea id='contenu' name="contenu"><?= htmlspecialchars($news->contenu()) ?></textarea>
						<ul class="actions">
							<li><input type="submit" value="Publier" class="alt" name="update" /></li>
							<li><button type="delete" value="<?php echo $news->id(); ?>" name="delete">Supprimer</button></li>
						</ul>	
					</form>					
								
								
						
	<body>