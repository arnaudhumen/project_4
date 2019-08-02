<?php 

require('autoload.php');


$db = DBFactory::getMysqlConnexionWithPDO();
$manager = new NewsManager($db);

if (isset($_POST['submit']))
{	
	$insertPost = $manager->addNews();	
}	

$data = $manager->getNews();

if (isset($_POST['delete']))
{
	$delete = $manager->deleteNews();
}

require('index.php');