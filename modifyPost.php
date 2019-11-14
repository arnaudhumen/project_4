<?php $title = "Modification de billett"; ?>

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
 	<h2 class="titre-acceuil"><span class="letter-title">M</span>odifier un billet</h2>
<?php $allchaptertitle = ob_get_clean(); ?>>

<?php ob_start(); ?>
					<form  class="form-log-in" method="post" action="index.php?action=update">
						<p>
							<input type="text" id="titre" name="titre" value="<?= htmlspecialchars($news->titre()) ?>" />
						</p>
						<textarea id='contenu-tiny' name="contenu"><?= htmlspecialchars($news->contenu()) ?></textarea>

						<input type="hidden" name="id" value="<?= $news->id() ?>"/>
						<div>
							<button class="btn btn-primary">Publier</button>
						</div>
					</form>
<?php $content = ob_get_clean(); ?>

			
<?php require('Template/template-v1.php'); ?>