<?php $title = "Administration de billet"; ?>

<?php ob_start(); ?>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(44, 46, 41, 0.5);">  
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
     	 <li class="nav-item active">
        	<a class="nav-link" href="index.php?action=listPosts">Acceuil<span class="sr-only">(current)</span></a>
      	</li>      	
      	<li class="nav-item">
        	<a class="nav-link" href="index.php?action=deconnexion">Se déconnecter</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link" href="index.php?action=addPost">Ajouter un chapitre</a>
      	</li>
    	</ul>        
  	</div>
	</nav>
	<?php $navbar = ob_get_clean(); ?>


	<?php ob_start(); ?>
 <h2 class="titre-acceuil"><span class="letter-title">A</span>dministration</h2>
 <?php $allchaptertitle = ob_get_clean(); ?>>

<?php ob_start(); ?>
	<table  class="table table-striped table-light" id="table-admin-1">
      <tr>
      	<th scope="col">Titre</th>
      	<th scope="col">Contenu</th>
      	<th scope="col">Action</th>
      	<th></th>
      	<th scope="col">Espace Commentaires</th>
      	<th></th>
      	<th></th>
      </tr>
     
<?php
while ($post = $data->fetch())
{
?> 	<tr>
		<th scope="row">  <?= $post['titre']; ?> </th>
		<td> <?= $post['contenu']; ?> </td>
		<td> <a href="index.php?action=modifier&amp;id=<?= $post['id']; ?>">Modifier</a> </td>
		<td> <a href="index.php?action=supprimer&amp;id=<?= $post['id']; ?>">Supprimer</a> </td>
		<td> <a href="index.php?action=listCommentAdmin&amp;id=<?= $post['id']; ?>">commentaires du chapitre</a> </td>
		<td> <a href="index.php?action=listSignalComments&amp;id=<?= $post['id']; ?>">commentaires signalés</a> </td>
		<td> <a href="index.php?action=listPost&amp;id=<?= $post['id']; ?>">Ajouter un commentaires</a> </td> 
	</tr>						
  
<?php
}
?>
</table>

<?php $content = ob_get_clean(); ?>
    




<?php require('Template/template-v1.php'); ?>
