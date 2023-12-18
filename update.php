<?php
include 'partials/header.php';

require_once 'users/users.php';

if (!isset($_GET['id'])) {
    include 'partials/not_found.php';
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include 'partials/not_found.php';
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = updateUser($_POST,$userId);
        uploadFile($_FILES['picture'],$user);
    header("location: index.php");

}



?>
<?php include "_form.php"; ?>

<?php include 'partials/footer.php'; ?>
