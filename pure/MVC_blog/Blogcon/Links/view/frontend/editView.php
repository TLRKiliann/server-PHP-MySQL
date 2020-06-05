<?php $title = 'Heidi Blog'; ?>

<?php ob_start(); ?>

<div class="heatitle">
    <h1 class="headform">Heidi Blog</h1>
</div>
<p><a href="index.php?action=post&amp;id=<?= $comment['post_id'] ?>">Retour au billet</a></p>

<h2>Editer un commentaire</h2>

<form action="index.php?action=editComment&amp;id=<?= $comment['id'] ?>" method="post">
        <label for="author" class="col-sm-2 col-form-label">Auteur</label>
            <input type="text" id="author" name="author" value="<?= htmlspecialchars($comment['author']) ?>" />

        <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"><?= htmlspecialchars($comment['comment']) ?></textarea>
            <input type="submit" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>