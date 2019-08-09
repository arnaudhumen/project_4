<?php
require('autoload.php');
$db = DBFactory::getMysqlConnexionWithPDO();
$manager = new NewsManager($db);

if (isset($_POST['update']))
{
	$news = new News(
		[
			'titre' => $_POST['titre'],
      		'contenu' => $_POST['contenu']
		]
	);

	$updatePost = $manager->updateNews($news);

}

$data = $manager->getNews();

require('index.php');