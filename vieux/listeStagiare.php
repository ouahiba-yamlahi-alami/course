<?php
$titre= "Liste des Stagiares";

ob_start();
?>
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
 <table class="table table-success table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?PHP  foreach ($stagiares as $stagiare):   ?>
        <tr>
            <td><?= $stagiare->id ?></td>
            <td><?= $stagiare->nom ?></td>
            <td><?= $stagiare->prenom ?></td>
            <td><?= $stagiare->age ?></td>
            <td>
                <a href="index.php?action=edite&id=<?php echo $stagiare->id ?>" class="btn btn-success btn-sm">modifier</a>
                <a href="index.php?action=delete&id=<?php echo $stagiare->id ?>" class="btn btn-danger btn-sm">supprimer</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>




    </table>

<?php $contenu= ob_get_clean()?>
<?php include "vieux/layout.php";