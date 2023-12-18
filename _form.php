<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            <?php if(isset($user['id'])):   ?>
            update user <b><?php echo $user['name']; ?></b>
            <?php else:  ?>
                Create new User
            <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">


<form method="post" enctype="multipart/form-data"
      action="">
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" id="name" value="<?php echo $user['name'] ?>"
               class="form-control <?php echo ($errors['name'] != '')? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $errors['name'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input name="username" id="username" value="<?php echo $user['username'] ?>" class="form-control <?php echo ($errors['username'] != '')? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $errors['username'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $user['email'] ?>" class="form-control <?php echo ($errors['email'] != '')? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $errors['email'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" id="phone" value="<?php echo $user['phone'] ?>" class="form-control <?php echo ($errors['phone'] != '')? 'is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $errors['phone'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input name="website" id="website" value="<?php echo $user['website'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Image</label>
        <input name="picture" type="file" class="form-control-file">
    </div>

    <button class="btn btn-success">Submit</button>

</form>
        </div>
    </div>
</div>