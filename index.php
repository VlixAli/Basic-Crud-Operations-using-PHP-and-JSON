<?php
require_once 'users.php';

$users = getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Simple PHP Crud</title>

</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['phone'] ?></td>
        <td><?php echo $user['website'] ?></td>
        <td>
            <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
            <a href="update.php?id=<?php echo $user['id']?>"" class="btn btn-sm btn-outline-secondary">Update</a>
            <a href="delete.php?id=<?php echo $user['id']?>"" class="btn btn-sm btn-outline-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>

</table>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>