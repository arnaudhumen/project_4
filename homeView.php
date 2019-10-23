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
			<h2>Tous les chapitres</h2>
		</header>
			<a href="index.php?action=loginView">Se connecter</a>
			<a href="index.php?action=signinView">S'inscrire</a>

		
<?php
while ($post = $data->fetch())
{
?> 	<tr>
		<h3><a href="index.php?action=listCommentHome&amp;id=<?= $post['id']; ?>"><?= $post['titre']; ?></a> </h3>
		<p><?= $post['contenu']; ?></p>		
		  
	</tr>						
  
<?php
}
?>
   

	</body>
</html>
