index.php

<?php
        elseif ($_GET['action'] == 'delComment') // Suppression d'un commentaire (homemade)
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) // A revoir
            {
            delComment($_GET['id']);
            }
            else 
            {
                throw new Exception("Aucun identifiant de commentaire supprimé");
            }
        }

/controller/frontend.php

function delComment($commentId) // Fonction homemade pour supprimer un commentaire
{
    $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
    $comment = $commentManager->getComment($commentId); // On joint le commentId des 2 tables
    if (!empty($_GET['id'])) // && ($_GET['id'] > 0))
    {
        $commentManager->delComment($commentId, $_GET['id']);
        header('Location: index.php?action=post&id=' . $comment['post_id']);
    }
    require('view/frontend/deleteView.php');
    /*{
        throw new Exception('Impossible de supprimer le commentaire !');
    }
    else*/
}

/model/CommentManager.php

    public function getComment($commentId) //Ajout d'une méthode pour récupérer un commentaire
    {
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr 
                                 FROM comments WHERE id = ?');
        $request->execute(array($commentId));
        $comment = $request->fetch();
        $request->closeCursor();
        return $comment;
    public function delComment($commentId) // Fonction homemade pour supprimer un commentaire
    {
        $db = $this->dbConnect();
        $eff = $db->prepare("DELETE FROM comments WHERE id = ?");
        $eff->execute(array($commentId));
        return $eff;
    } 
}
?>

/view/fronted/deleteView.php

<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<div class="jumbotron">
    <h1 class="text-center">Mon super blog !</h1>
</div>
<p><a class="btn btn-primary" href="index.php?action=post&amp;id=<?= $comment['post_id'] ?>">Retour au billet</a></p>

<h2 class="alert alert-info">Êtes-vous sûre de vouloir effacer le commentaire ?</h2>

<form action="index.php?action=delComment&amp;id=<?= $comment['id'] ?>" method="post">
    <div>
        <input type="submit" value="Effacer" class="btn btn-primary" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

/view/fronted/postView.php

       (<a href="index.php?action=delComment&amp;id=<?= $comment['id'] ?>">supprimer</a>)</p> <!-- Touche supprimer homemade -->




