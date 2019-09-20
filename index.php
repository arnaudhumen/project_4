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
		deletePost();
	}

	elseif ($_GET['action'] == 'modifier')
	{
		modifyPost(); 
	}

	elseif ($_GET['action'] == 'update')
	{
		updatePost();
	}
}

else {
	listPosts();	
}

