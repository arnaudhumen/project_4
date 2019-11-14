
<?php $title = 'Billet simple pour l\'Alaska'; ?>
		

<?php ob_start(); ?>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(44, 46, 41, 0.5);">  
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
     	 <li class="nav-item active">
        	<a class="nav-link" href="index.php?action=listPostsMember">Acceuil<span class="sr-only">(current)</span></a>
      	</li>      	
      	<li class="nav-item">
        	<a class="nav-link" href="index.php?action=deconnexion">Deconnexion</a>
      	</li>
    	</ul>        
  	</div>
	</nav>
	<?php $navbar = ob_get_clean(); ?>

<?php ob_start(); ?>
 <h2 class="titre-acceuil"><span class="letter-title">T</span>ous les chapitres</h2>
 <?php $allchaptertitle = ob_get_clean(); ?>			

<?php ob_start(); ?>
<div class="card-body-first">	
<?php
while ($post = $data->fetch())
{
?> 	
	<div class="card w-75">
		 <div class="card-body">
			<h3 class="card-title"><a class="link-title-chapter" href="index.php?action=listCommentMember&amp;id=<?= $post['id']; ?>"><?= $post['titre']; ?></a></h3>
			<div class="card-text"><?= $post['contenu']; ?>
			</div>
			<div class="link-bottom-chapitre">
				<a href="index.php?action=listCommentMember&amp;id=<?= $post['id']; ?>" class="card-link">... cliquer ici pour lire la suite !</a>		
				<a href="index.php?action=listPostMember&amp;id=<?= $post['id']; ?>" class="card-link">Ajouter un commentaire</a> 
			</div>
		</div> 
	</div>						
  
<?php
}
?>
</div>
 <?php $content = ob_get_clean(); ?>   

    

	
<?php require('Template/template-v1.php'); ?>