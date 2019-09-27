<?php

function listPost(int $id) 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);	

	$news = $manager->getOneNews($id);
	$data = $manager->getNews();	
	require('View/addCommentView.php');
}

function addComment($postId, $nom, $contenuCom)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);
	
	$affectedLines = $managercomment->postComment($postId, $nom, $contenuCom);	

	$data = $manager->getNews();
	require('View/listPostView.php');
}

function listComment($postId)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);

	$comments = $managercomment->getComments($postId);

	require('View/CommentView.php');
}



