<form method="post" enctype="multipart/form-data"
      action="">
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" id="name" value="<?php echo $user['name'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input name="username" id="username" value="<?php echo $user['username'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" id="email" value="<?php echo $user['email'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" id="phone" value="<?php echo $user['phone'] ?>" class="form-control">
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