<?php
include 'partials/header.php';

require_once 'users/users.php';

if (!isset($_POST['id'])) {
    include 'partials/not_found.php';
    exit;
}

$userId = $_POST['id'];

deleteUser($userId);

header("Location: index.php");


