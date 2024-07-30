<?php

include_once '../models/userModel.php';

function index() {
    return getAllUsers();
}

function create() {
    include '../views/create.php';
}


?>
