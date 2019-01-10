<form method="post" name="add_user">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="user_name">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="user_phone">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="user_email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="user_addr">
    </div>

    <button type="submit" class="btn btn-info">Add</button>
    <?php echo Html::anchor('user/index', 'Back', array('class' => Arr::get($subnav, "btn"))); ?>
</form>