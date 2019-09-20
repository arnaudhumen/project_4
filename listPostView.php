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
			<a href="index.php?action=addPost">Ajouter un chapitre</a>

			<table>
      <tr><th>Titre</th><th>Contenu</th><th>Action</th><th></th></tr>
      <!-- <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr> -->
<?php
while ($post = $data->fetch())
{
echo '<tr><td>' . $post['titre'] . '</td><td>' . $post['contenu']. '</td> <td><form method="post" action="index.php?action=modifier">
								<button type="modifier" value="' . $post['id'] . '" name="modifier">Modifier</button>
								</form> | <form method="post" action="index.php?action=supprimer">
										<button type="delete" value="' . $post['id'] . '" name="delete">Supprimer</button>
								</form></td> <td><a href="View/postCommentView.php">Commentaires</a></td></tr>' ;
  /*echo '<tr><td>' $news->titre(), '</td><td>', $news->dateAjout()->format('d/m/Y à H\hi'), '</td><td>', ($news->dateAjout() == $news->dateModif() ? '-' : $news->dateModif()->format('d/m/Y à H\hi')), '</td><td><a href="?modifier=', $news->id(), '">Modifier</a> | <a href="?supprimer=', $news->id(), '">Supprimer</a></td></tr>', "\n";*/
 /* echo '<form method="post" action="index.php?action=supprimer">
									<button type="delete" value="' . $post['id'] . '" name="delete">Supprimer</button>
								</form>
								<form method="post" action="controlleronepost">
								<button type="modifier" value="' . $post['id'] . '" name="modifier">Modifier</button>
								</form>' ;*/
}
?>
    </table>

	<body>


