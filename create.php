<?php

include 'partials/header.php';

require_once 'users/users.php';
$user = [
    'id'=>'',
    'name'=> '',
    'username' =>'',
    'email' => '',
    'phone' => '',
    'website'=>''
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => ""
];

$isValid = true;


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user =  array_merge($user, $_POST);

    $isValid = validateUser($user,$errors);

    if($isValid){
        $user = createUser($_POST);

        if (isset($_FILES['picture'])) {
            uploadFile($_FILES['picture'], $user);

        }
        header("location: index.php");
    }

}


include '_form.php';

include 'partials/footer.php';
