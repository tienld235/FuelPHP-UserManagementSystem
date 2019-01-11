<?php
return array(
    '_root_' => 'user/index',  // The default route
    '_404_' => 'welcome/404',    // The main 404 route

    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    'users/add' => array('user/add', 'name' => "add_user"),
    'users/edit(/:id)?' => array('user/edit', 'name' => 'edit_user'),
    'users/delete(/:id)?' => array('user/delete', 'name' => 'delete_user'),
);
