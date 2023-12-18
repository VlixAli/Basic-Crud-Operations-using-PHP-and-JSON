<?php

require_once 'users.php';

$userID = $_GET['id'];

$user = getUserById($userID);