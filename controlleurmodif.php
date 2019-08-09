<?php
require('autoload.php');

if (isset($_POST['modifier']))
{
	/*$news = new News(
		[
			'titre' => $_POST['titre'],
      		'contenu' => $_POST['contenu'],
      		'id' => $_POST['modifier']
		]
	);
	$manager->updateNews($news);*/
	$manager->getOneNews((int) $_POST['modifier']);
	require('selectednews.php');
}