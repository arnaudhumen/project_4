<?php

class MemberManager
{
	protected $db;

	public function __construct(PDO $db)
  	{
    $this->db = $db;
  	}

	function addMember($nom, $pass_hache, $mdpConfirme)
	{
		$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
		$mdpConfirme = password_hash($_POST['confirme_mdp'], PASSWORD_DEFAULT);
		$requete = $this->db->prepare('INSERT INTO utilisateurs(nom, mdp, confirme_mdp) VALUES(?, ?, ?)');		

  		$requete->execute(array($nom, $pass_hache, $mdpConfirme));
	}

	function getMember($nom)
	{
		$requete = $this->db->prepare('SELECT id, mdp FROM utilisateurs WHERE nom = ?');
		$requete->execute(array($nom));
		return $requete;
	}
}