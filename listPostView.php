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
?> 	<tr>
		<td>  <?= $post['titre']; ?> </td><td> <?= $post['contenu']; ?> </td>
		<td> <a href="index.php?action=modifier&amp;id=<?= $post['id']; ?>">Modifier</a> </td>
		<td> <a href="index.php?action=supprimer&amp;id=<?= $post['id']; ?>">Supprimer</a> </td>
		<td> <a href="index.php?action=listComment&amp;id=<?= $post['id']; ?>">commentaires</a> </td>
		<td> <a href="index.php?action=listPost&amp;id=<?= $post['id']; ?>">Ajouter un commentaires</a> </td>
	</tr>						
  
<?php
}
?>
    </table>

	</body>
</html>

