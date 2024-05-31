<?php
require_once 'Controller/NoteController.php';
require_once 'config.php';

$controller = new NoteController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action == 'add') {
    $controller->addNote();
} else {
    $controller->index();
}
?>
