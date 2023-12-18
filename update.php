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

    if(isset($_FILES['picture'])){
        uploadFile($_FILES['picture'],$user);

    }
    header("location: index.php");

}



?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>update user <b><?php echo $user['name']; ?></b></h3>
        </div>
        <div class="card-body">
            <?php include '_form.php'; ?>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
