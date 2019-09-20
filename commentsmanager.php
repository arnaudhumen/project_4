<?php

class CommentsManager
{
	protected $db;

	public function __construct(PDO $db)
  	{
    $this->db = $db;
  	}

  	public function addComment(Commentaire $comments)
  	{
  		$requete = $this->db->prepare('INSERT INTO commentaires(nom, contenu, dateAjout, dateModif) VALUES(:titre, :contenu, NOW(), NOW())');
  		$requete->bindValue(':nom', $_POST['nom']);
  		$requete->bindValue(':contenu', $_POST['contenu']);

  		$requete->execute();
  	}

  	public function getComment()
  	{
  		$requete = $this->db->query('SELECT nom, contenu, dateAjout, id FROM commentaires ORDER BY id ASC');
  		return $requete;
  	}

    public function deleteComment($id)
    {
      $this->db->exec('DELETE FROM commentaires WHERE id = ' . $_POST['delete']);
    }

    public function getOneComment($id)
    {
      $requete = $this->db->prepare('SELECT nom, contenu FROM commentaires WHERE id = :id');
      $requete->bindValue(':id', (int)$id, PDO::PARAM_INT);
      $requete->execute();

      $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');
      $news = $requete->fetch();
      return $news;
    }

    public function updateComment(Commentaire $comments)
    {
      $requete = $this->db->prepare('UPDATE commentaires SET nom = :nom, contenu = :contenu, dateModif = NOW() WHERE id = :id');
    
      $requete->bindValue(':nom', $comments->nom());    
      $requete->bindValue(':contenu', $comments->contenu());
      $requete->bindValue(':id', $comments->id(), PDO::PARAM_INT);
    
      $requete->execute();
    }
}