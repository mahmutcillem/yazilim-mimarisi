<?php
require_once 'config.php';
require_once 'Controller/NoteController.php';

header('Content-Type: application/json');

$controller = new NoteController($pdo);
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action) {
    case 'get':
        $controller->apiGetNotes();
        break;
    case 'add':
        $controller->apiAddNote();
        break;
    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}
?>
