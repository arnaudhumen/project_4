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

function addMemberIntoBAse($nom, $pass_hache, $mdpConfirme)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$membermanager = new MemberManager($db);


	$membermanager->addMember($nom, $pass_hache, $mdpConfirme);

	require('View/signinView.php');
}

function verifyMember($nom)
{
	$db = DBFactory::getMysqlConnexionWithPDO();
	$membermanager = new MemberManager($db);

	$member = $membermanager->getMember($nom);	
	$result = $member->fetch();	
}