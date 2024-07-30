<?php
include_once 'controllers/userController.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            create($_POST);
            // header('Location: index.php?action=display');
        } else {
            include 'views/create.php';
        }
        break;
    };