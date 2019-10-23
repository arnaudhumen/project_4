<?php

function listPost(int $id) 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);	

	$news = $manager->getOneNews($id);
	$data = $manager->getNews();	
	require('View/addCommentView.php');
}

function listPostMember(int $id) 
{	
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);	

	$news = $manager->getOneNews($id);
		
	require('View/addCommentViewMember.php');
}

function addComment($postId, $nom, $contenuCom)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);
	
	$managercomment->postComment($postId, $nom, $contenuCom);	

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

function listCommentMember($postId, int $id)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);
	;

	$comments = $managercomment->getComments($postId);
	$news = $manager->getOneNews($id);


	require('View/CommentViewMember.php');
}

function listCommentHome($postId, int $id)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);
	;

	$comments = $managercomment->getComments($postId);
	$news = $manager->getOneNews($id);


	require('View/homePostView.php');
}

function addCommentMember($postId, $signalId, $nom, $contenuCom)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);
	
	$managercomment->postComment($postId, $signalId, $nom, $contenuCom);	

	$data = $manager->getNews();
	require('View/listPostViewMember.php');
}

function getComment(int $id)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);

	$managercomment->getOneComment($id);
}

function signalComment($id)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);
	$manager = new NewsManager($db);

	$managercomment->signalComment($id);
	$data = $manager->getNews();
	require('View/listPostViewMember.php');
}

function getSignalComment($postId)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);

	$comments = $managercomment->getSignalComments($postId);
	require('View/CommentView.php');
}

function deleteSignalComment($id)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$managercomment = new CommentsManager($db);

	$comments = $managercomment->deleteSignalComment($id);

	
}