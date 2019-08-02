<?php

class NewsManager
{
	protected $db;

	public function __construct(PDO $db)
  	{
    $this->db = $db;
  	}

  	public function addNews()
  	{
  		$requete = $this->db->prepare('INSERT INTO news(titre, contenu, dateAjout, dateModif) VALUES(:titre, :contenu, NOW(), NOW())');
  		$requete->bindValue(':titre', $_POST['titre']);
  		$requete->bindValue(':contenu', $_POST['contenu']);

  		$requete->execute();
  	}

  	public function getNews()
  	{
  		$requete = $this->db->query('SELECT titre, contenu, dateAjout, id FROM news ORDER BY id');
  		return $requete;
  	}

    public function deleteNews()
    {
      $this->db->exec('DELETE FROM news WHERE id = '. $_POST['delete']);
    }
}