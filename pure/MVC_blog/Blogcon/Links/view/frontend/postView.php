<?php $title = 'Heidi Blog'; ?>

<?php ob_start(); ?>
<div class="deconnect">
    <p><a class="deco" href="/pure/deconn.php">Déconnexion</a></p>
</div>
<div class="heat">
    <h1>Heidi Blog</h1>
</div>
<div class=alitem>
    <p><a class="backpage" href="index.php">Retour à la liste des billets</a></p>
    <p><a class="backmain" href="/pure/alpha.php">Retour au menu prinicpal</a></p>
</div>
<div class="tit">
    <h3 class="bodytit">
        <?= htmlspecialchars($post['title']) ?>
        <em>(le <?= $post['creation_date_fr'] ?>)</em>
    </h3>
    
    <p class="bodytit2">
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<h2 class="heatcomment">Commentaires</h2>

<?php
while ($comment = $comments->fetch())
{
?>
<div class="tit">
    <p class="bodytit"><strong><?= htmlspecialchars($comment['author']) ?></strong> (le <?= $comment['comment_date_fr'] ?>)</p>
    <p class="secondframe"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
</div>
<?php
}
?>

<h2 class="headwrite">Ecrire un commentaire</h2>
<div align="center">
    <table>
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <tr>
                <td>
                    <label class="textdeco" for="author">Autheur :</label>
                </td>
                <td>
                    <input type="text" name="author" id="author" /> <br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="textdeco" for="commentaire">Commentaire :</label>
                </td>
                <td>
                    <textarea id="comment" name="comment"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" value="Envoyer" />
                </td>
            </tr>
        </form>
    </table>
</div>
<!-- <?php            
echo 'Page : ';
for($i = 1; $i <= $nbPage; $i++)
{
    if($i == $pageCourante)
    {
        echo '['.$i.']';
    }
    else
    {
        echo ' <a href="commentaires.php?billet='.$commentId.'&page='.$i.'">'.$i.'</a> ';
    }
}          
?> -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
