<?php 
require('Controller/postcontroller.php');
require('Controller/commentcontroller.php');
require('Controller/autoload.php');


if (isset($_GET['action']))
{
	if ($_GET['action'] == 'addPost')
	{
		addPost();
	}

	elseif ($_GET['action'] == 'supprimer')
	{
		deletePost($_GET['id']);
	}

	elseif ($_GET['action'] == 'modifier')
	{
		modifyPost($_GET['id']); 
	}

	elseif ($_GET['action'] == 'update')
	{
		updatePost((int) $_POST['id'], $_POST['titre'], $_POST['contenu']);
	}

	elseif ($_GET['action'] == 'listPost')
	{
		listPost($_GET['id']);
	}

	elseif ($_GET['action'] == 'addComment')
	{
		addComment((int)$_GET['id'], $_POST['nom'], $_POST['contenu_commentaire']);
	}

	elseif ($_GET['action'] == 'listComment')
	{
		listComment($_GET['id']);
	}
}

else {
	listPosts();	
}

