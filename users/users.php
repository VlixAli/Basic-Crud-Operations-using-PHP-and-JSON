<?php

function getUsers()
{
   return json_decode(file_get_contents(__DIR__. "\users.json"),true);

}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user){
        if($user['id'] == $id){
            return $user;
        }
    }
    return null;
}

function createUser($data)
{
    $users = getUsers();
    $data['id'] = rand(1000000,2000000);

    $users[] = $data;
    putJson($users);

    return $data;
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user){
        if($user['id'] == $id){
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }
    putJson($users);
    return $updateUser;
}

function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $i=> $user){
        if($user['id'] == $id){
            unset($users[$i]);
        }
    }
    putJson($users);
}

function uploadFile($file,$user)
{
    if(isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir("/images")) {
            mkdir("/images");
        }

        $fileName = $file['name'];
        $dotPosition = strpos($fileName, '.');
        $extension = substr($fileName, $dotPosition + 1);
        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user['id']}.$extension");

        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }
}

function putJson($users)
{
    file_put_contents(__DIR__ . "/users.json",json_encode($users,JSON_PRETTY_PRINT));
}

function validateUser($user, &$errors)
{
    $isValid =true;
    if($user['name'] == ''){
        $isValid = false;
        $errors['name'] ="Name is mandatory";
    }
    if($user['username'] == '' || strlen($user['username'])<6 || strlen($user['username']) >16){
        $isValid = false;
        $errors['username'] ="Username is required, it must be more than 6 and greater than 16 characters";
    }
    if($user['email'] == "" || !filter_var($user['email'],FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        $errors['email'] ="This must be a valid email address";
    }

    if(!filter_var($user['phone'],FILTER_VALIDATE_INT)){
        $isValid = false;
        $errors['phone'] = 'This must be a valid phone number';
    }

    return $isValid;
}