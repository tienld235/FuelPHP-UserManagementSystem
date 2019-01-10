<?php echo Html::anchor('user/add', '<i class="fas fa-plus"></i>Add ', array('class' => Arr::get($subnav, "index"))); ?>
<div class="mt-5">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->address ?></td>
                <td>
                    <?php echo Html::anchor('user/edit/'.$user->id, 'Edit', array('class' => 'btn btn-success')); ?>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>