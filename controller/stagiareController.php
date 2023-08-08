<?php

require_once 'models/stagiareModel.php';
function listeStagiareAction(){
    $stagiares  = listeStagiare();
    require_once "vieux/listeStagiare.php";
}
function createAction()
{
      require_once "vieux/create.php";
}

function storeAction()
{
        if(create()){
            header('location:index.php?action=listeStagiare');
        }else{
            echo ' les champs sont obligatoir';
        }


}
function editAction()
{
    $id = $_GET['id'];
    $stagiare= vieus($id);
    require_once "vieux/edite.php";

}
function updateAction()
{

    if(isset ($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age'])){
            $id=htmlspecialchars($_POST['id']) ;
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $age= htmlspecialchars($_POST['age']);
            $pdo = database();
            edit($id,$nom,$prenom,$age);
            header('location:index.php?action=listeStagiare');
                 }else{
            echo "les champs sont obligatoire";
        }
            }
}
function deleteAction()
{
    $id = $_GET['id'];
    require_once "vieux/delete.php";

}

function destroyAction()
{
    destroy($_GET['id']);
    header('location:index.php?action=listeStagiare');
}
