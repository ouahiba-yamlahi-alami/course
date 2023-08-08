<?php
require_once "controller/stagiareController.php";
if(isset($_GET['action'])){
    $action= $_GET['action'];
    switch ($action){
        case 'create':
            createAction();
            break;

        case 'listeStagiare':
            listeStagiareAction();
            break;
        case 'storeAction':
            storeAction();
            break;
        case 'delete':
            deleteAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edite':
            editAction();
            break;
        case 'update':
            updateAction();
            break;
    }

}
