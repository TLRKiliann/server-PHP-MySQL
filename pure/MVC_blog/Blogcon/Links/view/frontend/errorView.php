<?php $title = 'Heidi Blog'; ?>

<?php ob_start(); ?>
<div align="center" class="heat">
    <h1>Oups ! Une erreur est survenue !</h1>
</div>

<p align="center" class="backpage">><?= $errorMessage ?></p>
<div align="center">
    <img src="public/images/giphy.gif" alt="crushing head against keyboard" />
</div>
<div align="center">
    <p><a class="backpage" href="index.php">Retourner à l'acceuil</a></p>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>