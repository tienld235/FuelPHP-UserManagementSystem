<form method="post" name="edit_user">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="user_name" value="<?=$user->name?>">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="user_phone" value="<?=$user->phone?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="user_email" value="<?=$user->email?>">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="user_addr" value="<?=$user->address?>">
    </div>

    <button type="submit" class="btn btn-info">Update</button>
    <?php echo Html::anchor('user/index', 'Back', array('class' => Arr::get($subnav, "btn"))); ?>
</form>