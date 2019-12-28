<?php
require 'cadre.html';
$adeviner = 150;
$erreur = null;
$succes = null;
$value = null;
   
if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] > $adeviner) {
        $erreur = 'Votre chiffre est trop grand';
    } elseif ($_GET['chiffre'] < $adeviner) {
        $erreur = 'Votre chiffre est trop petit';
    } else {
        $succes = "Bravo vous avez trouvé le bon chiffre <strong>$adeviner</strong>";
    }
    $value = (int)$_GET['chiffre'];
}
?>

<?php if ($erreur): ?>
<div class="alert-erreur">
    <?= $erreur ?>
</div>
<?php elseif ($succes): ?>
<div class="alert-success">
    <?= $succes ?>
</div>
<?php endif ?>

<form action="/jeu1.php" method="GET">
    <div class="form-group">
        <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>

    <button type="submit" class="btn btn-primary">Deviner</button>    
</form>
