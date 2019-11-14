	<?php $title = 'Inscription'; ?>

	<?php ob_start(); ?>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(44, 46, 41, 0.5);">  
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
     	 <li class="nav-item active">
        	<a class="nav-link" href="index.php?action=home">Acceuil<span class="sr-only">(current)</span></a>
      	</li>      	
      	<li class="nav-item">
        	<a class="nav-link" href="index.php?action=loginView">Se connecter</a>
      	</li>
    	</ul>        
  	</div>
	</nav>
	<?php $navbar = ob_get_clean(); ?>
		
		
		<?php ob_start(); ?>
 		<h2 class="titre-acceuil"><span class="letter-title">I</span>nscription</h2>
 		<?php $allchaptertitle = ob_get_clean(); ?>
		

		
 		<?php ob_start(); ?>
		<form class="form-log-in" method="post" action="index.php?action=addMember">
				<p>
   					<label>Votre nom</label> :	<input type="text" name="nom" />
   				</p>
   				<p>
   					<label>Votre mot de passe</label> :	<input type="password" name="mdp" />
   				</p>
   				<p>
   					<label>Confimez votre mot de passe</label> :	<input type="password" name="confirme_mdp" />
   				</p>
   				<p>
   					<input type="hidden" name="id_type"/>
   				</p>
   				<div class="">
          			<button class="btn btn-primary">S'inscrire</button>                      
        		</div>
			</form>	
		<?php $content = ob_get_clean(); ?>
	

	

<?php require('Template/template-v1.php'); ?>
