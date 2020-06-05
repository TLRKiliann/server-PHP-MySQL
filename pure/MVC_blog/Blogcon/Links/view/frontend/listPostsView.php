<?php $title = 'Heidi Blog'; ?>

<?php ob_start(); ?>
<div class="deconnect">
    <p><a class="deco" href="/pure/deconn.php">Déconnexion</a></p>
</div>
<div class="heat">
    <h1>Heidi Blog</h1>
</div>
<div class=alitem>
    <p><a class="lastpost">Derniers billets du blog :</a></p>
    <p><a class="backmain" href="/pure/alpha.php">Retour au menu prinicpal</a></p>
</div>

<?php
while ($data = $posts->fetch())
{
?>
<div class="tit">
    <h3 class="bodytit">
        <?= htmlspecialchars($data['title']) ?>
        <em>(le <?= $data['creation_date_fr'] ?>)</em>
    </h3>
</div>        
<p class="secondframe">
    <?= nl2br(htmlspecialchars($data['content'])) ?>
    <br />
    <em><a class="heatitle" href="index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em>
</p>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>