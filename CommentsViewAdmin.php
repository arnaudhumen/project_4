<?php $title = 'Lecture'; ?>

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
 		<h2 class="titre-acceuil" id="titre-chapitre"><?= htmlspecialchars($news->titre()); ?></h2>
 	<?php $allchaptertitle = ob_get_clean(); ?>

<?php ob_start(); ?>
	<div class="card-body-first">
		<div class="card w-75">
		 	<div class="card-body">
		 		<div class="card_text_specif">		
					<p> <?= ($news->contenu()); ?> </p>
					</div>		 	
			</div>
		</div>
	</div>
<?php $content = ob_get_clean(); ?>
			
		

		<?php ob_start(); ?>
 	<h4 class="titre-acceuil"><span class="letter-title">C</span>ommentaires :</h4>
<?php $commenttitle = ob_get_clean(); ?>

			<?php ob_start(); ?>
		<div class="card-body-first">
			<?php
        		while ($comment = $comments->fetch())
        	{
        	?>
        	
				<div class="card w-75">
		 			<div class="card-body">
		 				<div class="card_text_specif">
            			<p><strong>Ecrit par <?= htmlspecialchars($comment['nom']) ?> le <?= $comment['dateAjout'] ?></p>
            			<p>"<?= nl2br(htmlspecialchars($comment['contenu_commentaire'])) ?>"</p>            			
            			</div> 
            		</div>
  				</div>			
	        <?php
        	}
        	?>
        </div>       
        <?php $comments = ob_get_clean(); ?>



			
		

		
			

     
		 
<?php require('Template/template-v2.php'); ?>