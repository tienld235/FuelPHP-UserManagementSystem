<?php

class Controller_Test extends Controller_Rest
{
    protected $format = 'json';

    public function get_lists()
    {
        $users = Model_User::find("all");
        return $this->response(array(
            'users' => $users,
            'status' => 'success'
        ));
    }

    public function get_user($id)
    {
        $user = Model_User::find($id);
        if ($user != null) {
            return $this->response(array(
                'user' => $user,
                'status' => 'success'
            ));
        } else {
            return $this->response(array("message" => "User not found!", 'status' => 'error'));
        }
    }

    public function post_create()
    {
        $user = Model_User::forge(array(
            'name' => Input::post('name'),
            'address' => Input::post('address'),
            'phone' => Input::post('phone'),
            'email' => Input::post('email'),
        ));
        if ($user->save()) {
            return $this->response(array(
                'message' => 'Create user successfully!',
                'status' => 'success'
            ));
        } else {
            return $this->response(array(
                'message' => 'Fail to create user!',
                'status' => 'error'
            ));
        }
    }

    public function post_edit($id)
    {
        $user = Model_User::find($id);
        $user->set(array(
            'name' => Input::post('name'),
            'address' => Input::post('address'),
            'phone' => Input::post('phone'),
            'email' => Input::post('email'),
        ));
        if ($user->save()) {
            return $this->response(array(
                'message' => 'Update user successfully!',
                'status' => 'success'
            ));
        } else {
            return $this->response(array(
                'message' => 'Fail to update user!',
                'status' => 'error'
            ));
        }
    }

    public function post_delete($id)
    {
        $user = Model_User::find($id);
        if ($user->delete()) {
            return $this->response(array(
                'message' => 'delete user successfully!',
                'status' => 'success'
            ));
        } else {
            return $this->response(array(
                'message' => 'Fail to delete user!',
                'status' => 'error'
            ));
        }

    }
}

?>