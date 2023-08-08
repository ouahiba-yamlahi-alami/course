<?php
$titre = "supprimer stagiaire";

ob_start();
var_dump($id);
?>
<p>Voulez vous vraiment supprimer le stagiare ?</p>



    <a class="btn btn-danger " href= "index.php?action=destroy&id=<?php echo $id?>" >supprimer</a>
    <a class="btn btn-warning" href= "index.php?action=listeStagiare"> Annuler </a>


<?php $contenu= ob_get_clean()?>
<?php include_once "vieux/layout.php"; ?>