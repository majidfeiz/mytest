<?php
// Include the controller and view
require_once 'controllers/PageController.php';
//require_once 'views/view.php';

// Get the URL path
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Initialize the controller
$controller = new PageController();

// Route requests
switch ($url) {
    case '':
        $controller->home();
        break;
    case 'folder1':
        $controller->folder1();
        break;
    case 'folder2':
        $controller->folder2();
        break;
    default:
        $controller->home();
        break;
}
