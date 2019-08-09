<?php 

require('autoload.php');


$db = DBFactory::getMysqlConnexionWithPDO();
$manager = new NewsManager($db);

if (isset($_POST['submit']))
{	
	$news = new News(
		[
			'titre' => $_POST['titre'],
      		'contenu' => $_POST['contenu']
		]
	);

	$insertPost = $manager->addNews($news);
	// $insertPost = $manager->addNews();	
}	

$data = $manager->getNews();

if (isset($_POST['delete']))
{
	$manager->deleteNews((int) $_POST['delete']);
	// $delete = $manager->deleteNews();
}



require('index.php');