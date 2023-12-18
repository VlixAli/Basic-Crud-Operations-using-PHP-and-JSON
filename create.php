<?php

include 'partials/header.php';

require_once 'users/users.php';
$user = [
    'name'=> '',
    'username' =>'',
    'email' => '',
    'phone' => '',
    'website'=>''
];


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);

    if (isset($_FILES['picture'])) {
        uploadFile($_FILES['picture'], $user);

    }
    header("location: index.php");
}


include '_form.php';

include 'partials/footer.php';
