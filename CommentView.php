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
        	<a class="nav-link" href="index.php?action=listPosts">Retour a la  liste des chapitres</a>
      	</li>
    	</ul>        
  	</div>
	</nav>
	<?php $navbar = ob_get_clean(); ?>

			
		

<?php ob_start(); ?>
 	<h2 class="titre-acceuil"><span class="letter-title">C</span>ommentaires <span class="letter-title">s</span>ignalés</h2>
<?php $allchaptertitle = ob_get_clean(); ?>>>

<?php ob_start(); ?>		
<table class="table table-striped table-light">
  	<thead>
        <tr>
        	<th scope="col">Auteur</th>
        	<th scope="col">Date</th>
        	<th scope="col">Contenu</th>
        	<th scope="col">Actions</th>
        </tr>
  	</thead>
    <tbody>
     
<?php
while ($comment = $comments->fetch())
{
?> 	<tr class="table-danger">
		<th scope="row">  <strong><?= htmlspecialchars($comment['nom']) ?> </th>
		<td> <?= $comment['dateAjout'] ?> </td>
		<td> <?= nl2br(htmlspecialchars($comment['contenu_commentaire'])) ?></td>
		<td> <a href="index.php?action=allowComment&amp;id=<?=$comment['id']?>" onclick="return sure();">Autoriser</a> </td>
		<td> <a href="index.php?action=refuseComment&amp;id=<?=$comment['id']?>" onclick="return sure();">Refuser</a> </td>		 
	</tr>						
  
<?php
}
?>
	</tbody>
</table>
<?php $content = ob_get_clean(); ?>

		
		 

<?php require('Template/template-v1.php'); ?>
