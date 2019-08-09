<?php

class NewsManager
{
	protected $db;

	public function __construct(PDO $db)
  	{
    $this->db = $db;
  	}

  	public function addNews(News $news)
  	{
  		$requete = $this->db->prepare('INSERT INTO news(titre, contenu, dateAjout, dateModif) VALUES(:titre, :contenu, NOW(), NOW())');
  		$requete->bindValue(':titre', $_POST['titre']);
  		$requete->bindValue(':contenu', $_POST['contenu']);

  		$requete->execute();
  	}

  	public function getNews()
  	{
  		$requete = $this->db->query('SELECT titre, contenu, dateAjout, id FROM news ORDER BY id ASC');
  		return $requete;
  	}

    public function deleteNews($id)
    {
      $this->db->exec('DELETE FROM news WHERE id = '. $_POST['delete']);
    }

    public function getOneNews($id)
    {
      $requete = $this->db->prepare('SELECT titre, contenu FROM news WHERE id = :id');
      $requete->bindValue(':id', (int)$id, PDO::PARAM_INT);
      $requete->execute();

      $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');
      $news = $requete->fetch();
      return $news;
    }

    public function updateNews(News $news)
    {
      $requete = $this->db->prepare('UPDATE news SET titre = :titre, contenu = :contenu, dateModif = NOW() WHERE id = :id');
    
      $requete->bindValue(':titre', $news->titre());    
      $requete->bindValue(':contenu', $news->contenu());
      $requete->bindValue(':id', $news->id(), PDO::PARAM_INT);
    
      $requete->execute();
    }
}