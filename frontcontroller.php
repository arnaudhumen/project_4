<?php
function homePosts()
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);
	
	$data = $manager->getNews();
	
	require('View/homeView.php');
}

function loginFront()
{
	require('View/loginView.php');
}

function signinFront()
{
	require('View/signinView.php');
}

function addMemberIntoBAse($nom, $pass_hache, $mdpConfirme, $idType)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$membermanager = new MemberManager($db);
	$manager = new NewsManager($db);


	$membermanager->addMember($nom, $pass_hache, $mdpConfirme, $idType);
	$data = $manager->getNews();

	require('View/homeView.php');
}

function verifyMember($nom)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$membermanager = new MemberManager($db);

	return $membermanager->getMember($nom);
}

function listPostsMember()
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);
	
	$data = $manager->getNews();
	
	require('View/listPostViewMember.php');
}

function deconnexion()
{
	
	session_unset ();	
	session_destroy ();

	$db = DBFactory::getMysqlConnexionWithPDO();
	$manager = new NewsManager($db);
	
	$data = $manager->getNews();
	require('View/homeView.php');
}