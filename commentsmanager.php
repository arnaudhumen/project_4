<?php

class CommentsManager
{
	protected $db;

	public function __construct(PDO $db)
  	{
    $this->db = $db;
  	}

  	public function postComment($postId, $nom, $contenuCom)
  	{
  		$requete = $this->db->prepare('INSERT INTO commentaires(post_id, nom, contenu_commentaire, dateAjout, dateModif) VALUES(?, ?, ?, NOW(), NOW())');
  		$addcommentaire = $requete->execute(array($postId, $nom, $contenuCom));

  		return $addcommentaire;
  	}

  	public function getComments($postId)
  	{
  		$requete = $this->db->prepare('SELECT id, nom, contenu_commentaire, dateAjout FROM commentaires WHERE post_id = ? ORDER BY id ASC');
      $requete->execute(array($postId));

  		return $requete;
  	}

    public function deleteComment($id)
    {
      $this->db->exec('DELETE FROM commentaires WHERE id = ' . $_POST['delete']);
    }

    public function getOneComment($id)
    {
      $requete = $this->db->prepare('SELECT nom, contenu_commentaire FROM commentaires WHERE id = :id');
      $requete->bindValue(':id', (int)$id, PDO::PARAM_INT);
      $requete->execute();

      $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');
      $news = $requete->fetch();
      return $news;
    }

    public function updateComment(Commentaires $comments)
    {
      $requete = $this->db->prepare('UPDATE commentaires SET nom = :nom, contenu_commentaire = :contenu, dateModif = NOW() WHERE id = :id');
    
      $requete->bindValue(':nom', $comments->nom());    
      $requete->bindValue(':contenu', $comments->contenu());
      $requete->bindValue(':id', $comments->id(), PDO::PARAM_INT);
    
      $requete->execute();
    }
}