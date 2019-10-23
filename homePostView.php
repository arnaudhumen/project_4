<!DOCTYPE HTML>

<html>
	<head>
		<title>Billet simple pour l'Alaska test</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />		
		<script src="https://cdn.tiny.cloud/1/8thwjsyaavf4qkt2o7m5ad6t8mgsxvy6m5zmry5ndvyy6rjr/tinymce/5/tinymce.min.js"></script>
  		
	</head>
<body>
	<header>
		<h2>Tous les chapitres</h2>
	</header>
			<a href="index.php?action=home">Retour a la liste des chapitres</a>

		<h3> <?= htmlspecialchars($news->titre()); ?> </h3>
		<p> <?= ($news->contenu()); ?> </p>
			
		

		<h4> Commentaires : </h4>

			<?php
        		while ($comment = $comments->fetch())
        	{
        	?>
            	<p><strong><?= htmlspecialchars($comment['nom']) ?> le <?= $comment['dateAjout'] ?></p>
            	<p><?= nl2br(htmlspecialchars($comment['contenu_commentaire'])) ?>
        	<?php
        	}
        	?>

     

		<p><a href="index.php?action=loginView">Se connecter</a></p>
		<p><a href="index.php?action=signinView">S'inscrire</a></p>
		 

 

<body>