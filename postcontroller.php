<?php


function addPost() 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);

	if (isset($_POST['titre'])) 
		{
			$news = new News(
			[
				'titre' => $_POST['titre'],
      			'contenu' => $_POST['contenu']
			]
			);
			$insertPost = $manager->addNews($news);

		}
		
	
	
	require('View/NewPost.php');
}


function listPosts()
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);
	
	$data = $manager->getNews();
	
	require('View/listPostView.php');
}



function deletePost()
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);

	$manager->deleteNews((int) $_POST['delete']);
	$data = $manager->getNews();	
	require('View/listPostView.php');	
}

function modifyPost() 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);
	$news = $manager->getOneNews((int) $_POST['modifier']);	
	require('View/modifyPost.php');
}



function updatePost()
{
$db = DBFactory::getMysqlConnexionWithPDO();
$manager = new NewsManager($db);


	$news = new News(
		[
			'titre' => $_POST['titre'],
      		'contenu' => $_POST['contenu'],
      		'id' => $_POST['id']
		]
	);

$updatePost = $manager->updateNews($news);
$data = $manager->getNews();

require('View/listPostView.php');
}

