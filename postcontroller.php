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



function deletePost(int $id)
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);

	$manager->deleteNews((int) $_GET['id']);
	$data = $manager->getNews();	
	require('View/listPostView.php');	
}

function modifyPost(int $id) 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);

	$news = $manager->getOneNews($id);	
	require('View/modifyPost.php');
}



function updatePost(int $id, $titre, $contenu)
{
$db = DBFactory::getMysqlConnexionWithPDO();
$manager = new NewsManager($db);


	$news = new News(
		[
			'titre' => $titre,
      		'contenu' => $contenu,
      		'id' => $id
		]
	);

$updatePost = $manager->updateNews($news);
$data = $manager->getNews();

require('View/listPostView.php');
}

