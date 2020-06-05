<?php
namespace Blogcon\Links\Model;
require_once('model/Manager.php');
class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr 
                                  FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT 0, 10');
        $comments->execute(array($postId));
        return $comments;
    }
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) 
                                  VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        return $affectedLines;
    }
    public function getComment($commentId) //Ajout d'une méthode pour récupérer un commentaire
    {
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr 
                                 FROM comments WHERE id = ?');
        $request->execute(array($commentId));
        $comment = $request->fetch();
        $request->closeCursor();
        return $comment;
    }
}
    //public function editComment($commentId, $author, $comment) //Ajout d'une méthode pour éditer un commentaire
    /*{
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET author = :author, comment = :comment, comment_date = NOW() 
                             WHERE id = :id');
        $req->execute(array('author' => $author, 'comment' => $comment, 'id' => $commentId));
        return $req;
    }*/

    // public function hangPages($commentId)
        //$db = $this->dbConnect();
        // Récupération du billets avec le nbre de pages
        //$reponse = $bdd->prepare('SELECT COUNT(*) as nb_comm FROM comments WHERE id = ? ');
        //$reponse->execute(array($_GET['id'])) or die(print_r($bdd->errorInfo()));
        //$pg = $reponse->fetch();
        //$nbComm = $donnees['nb_comm'];
        //$parPage = 5;
        //$nbPage = ceil($nbComm/$parPage);         
        //$debut = ($pageCourante - 1) * $parPage;
        //$fin = $debut + $parPage;
        //$reponse->closeCursor(); //Pas sûr là
        //return $pg;






