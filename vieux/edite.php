
<?php
$titre= "Modifier Stagiare";

ob_start();

?>
<form action="index.php?action=update" method="post">
    <div class="form-group">

        <input type="hidden" class="form-control" name="id" value="<?= $stagiare->id ?>" >
    </div>
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" value="<?= $stagiare->nom ?>" >
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom" value="<?= $stagiare->prenom ?>" >
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" value="<?= $stagiare->age ?>">
    </div>
    <div class="form-group">

        <input type="submit" class="btn btn-primary my-2" value="modifier" name="modifier" >
    </div>

</form>

<?php $contenu= ob_get_clean()?>
<?php include "layout.php";