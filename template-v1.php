<!DOCTYPE HTML>

<html>
	<head>
	<title><?= $title ?></title>
	<?php include('Template/head.php') ?>	
	</head>
<body>

	<nav>
	<?= $navbar ?>
	</nav>



</br>

	<header>
		<?= $allchaptertitle ?>
	</header>

	<section>			
	  	<?= $content ?>
	</section>

	<footer>
		<?php include('Template/footer.php') ?>		
	</footer>
 
	<?php include('Template/script.php') ?>
</body>

</html>