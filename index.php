<?php 
session_start();
require('Controller/frontcontroller.php');
require('Controller/postcontroller.php');
require('Controller/commentcontroller.php');
require('Controller/autoload.php');



if (isset($_GET['action']))	

{	

	// ----------> ACTION D'UN VISITEUR <----------------------//

	if ($_GET['action'] == 'listCommentHome')
	{
		listCommentHome($_GET['id'], $_GET['id']);
	}

	elseif ($_GET['action'] == 'home')
	{
		homePosts();
	}

	// ----------> ACTION DU MEMBRE ADMIN <----------------------//

	elseif ($_GET['action'] == 'addPost')
	{
		addPost();
	}

	elseif ($_GET['action'] == 'listPosts')
	{
		listPosts();
	}

	elseif ($_GET['action'] == 'listCommentAdmin')
	{
		listCommentAdmin($_GET['id'], $_GET['id']);
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

	elseif ($_GET['action'] == 'loginView')
	{
		loginFront();
	}

	elseif ($_GET['action'] == 'signinView')
	{
		signinFront();
	}	

	elseif ($_GET['action'] == 'listSignalComments')
	{
		getSignalComment($_GET['id']);
	}

	elseif ($_GET['action'] == 'deleteSignalComment')
	{
		deleteSignalComment($_GET['id']);
		echo "Ce commentaire a bien été supprimé !</br> <a href=\"index.php?action=listPosts\">Retour a la liste des chapitres</a>";
	}

	elseif ($_GET['action'] == 'allowComment')
	{
		allowComment($_GET['id']);		
	}

	elseif ($_GET['action'] == 'refuseComment')
	{
		refuseComment($_GET['id']);		
	}

	elseif ($_GET['action'] == 'deconnexion')
	{
		deconnexion();
	}

// ----------> ACTION D'UN MEMBRE NORMAL <----------------------//
 

	elseif ($_GET['action'] == 'listPostsMember')
	{
		listPostsMember();
	}

	elseif ($_GET['action'] == 'listCommentMember')
	{
		listCommentMember($_GET['id'], $_GET['id']);
	}

	elseif ($_GET['action'] == 'listPostMember')
	{
		listPostMember($_GET['id']);
	}

	elseif ($_GET['action'] == 'addCommentMember')
	{
		
		addCommentMember((int)$_GET['id'], (int)$_POST['signal_id'] = "1", $_POST['nom'], $_POST['contenu_commentaire']);
	}

	elseif ($_GET['action'] == 'signaler')
	{
		$id = $_GET['id'];
		signalComment($id);
	}

// ----------> INSCRIPTION DU MEMBRE <----------------------// 

	if ($_GET['action'] == 'addMember')
	{		
		if(isset($_POST['mdp']) AND isset($_POST['nom']) AND $_POST['mdp'] == $_POST['confirme_mdp'] 						AND ($_POST['nom']) == "JeanForteroche" AND $_POST['mdp'] == "789alaska123")
		{								
			addMemberIntoBAse($_POST['nom'], $_POST['mdp'], $_POST['confirme_mdp'], (int)$_POST['id_type'] = "2");
		}
		elseif(!empty($_POST['mdp']) AND !empty($_POST['nom']) AND $_POST['mdp'] == $_POST['confirme_mdp'])
		{	
		echo "<br><br><br><p style=\"color: white; font-family: 'Bree Serif', serif;  margin-top: 2%; text-align: center;\">Votre inscription a bien été prise en compte ! Connectez vous dès a présent ! <p>";							
			addMemberIntoBAse($_POST['nom'], $_POST['mdp'], $_POST['confirme_mdp'], (int)$_POST['id_type'] = "1");
		} 			
		else
		{
			echo "<script>alert(\"Veuillez verifier que toutes les informations demandées sont remplis et/ou bien renseignées!\")</script>";
			signinFront();
		}		
	}

	//------------> CONNEXION DU MEMBRE <-------------------//

	elseif ($_GET['action'] == 'loginMember')
	{
		
		$result = verifyMember($_POST['nom_login']);

		$correctPassword = password_verify($_POST['mdp_login'], $result['mdp']);
		
		if(!$result)
			{
    			echo "<script>alert(\"Mauvais identifiant ou mot de passe!\")</script>";
    			loginFront();
			}
			else
			{
    			if($correctPassword AND $result['id_type'] == 2) 
    			{
        			        			
        			$_SESSION['id'] = $result['id'];
        			$_SESSION['nom'] = $_POST['nom_login'];
        			echo "<br><br><br><p style=\"color: white; font-size: 150%; font-family: 'Bree Serif', serif;  margin-top: 2%; margin-bottom: -4%; text-align: center;\">Bienvenue " . htmlspecialchars($_SESSION['nom']) . "</p>";
        			listPosts();
    			}
    			elseif($correctPassword AND $result['id_type'] == 1)  
    			{
					        			
        			$_SESSION['id'] = $result['id'];
        			$_SESSION['nom'] = $_POST['nom_login'];
        			echo "<br><br><br><p style=\"color: white; font-size: 150%; font-family: 'Bree Serif', serif;  margin-top: 2%; margin-bottom: -4%; text-align: center;\">Bienvenue " . htmlspecialchars($_SESSION['nom']) . "</p>";
        			listPostsMember();
    			} 			
   				else 
   				{
        			echo "<script>alert(\"Mauvais identifiant ou mot de passe!\")</script>";
    				loginFront();
    			}			
			}
	}
}

else {
	homePosts();	
}

