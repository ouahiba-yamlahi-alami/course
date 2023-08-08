<?php
$titre= "Ajouter Stagiare";

ob_start();
?>
<form action="index.php?action=storeAction" method="post">
    <div>
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" >
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom" >
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" >
    </div>
    <div class="form-group">

        <input type="submit" class="btn btn-success my-2" value="ajouter" name="ajouter" >
    </div>

</form>

<?php $contenu= ob_get_clean()?>
<?php include "vieux/layout.php";