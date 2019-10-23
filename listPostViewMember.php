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

	
<?php
while ($post = $data->fetch())
{
?> 	<tr>
		<h3><a href="index.php?action=listCommentMember&amp;id=<?= $post['id']; ?>"><?= $post['titre']; ?></a> </h3>
		<p><?= $post['contenu']; ?></p>		
		<a href="index.php?action=listPostMember&amp;id=<?= $post['id']; ?>">Ajouter un commentaire</a>  
	</tr>						
  
<?php
}
?>
    

    <p><a href="index.php?action=deconnexion">Se déconnecter</a></p>

	</body>
</html>