<?php

class Controller_User extends Controller_Template
{
    public function get_add()
    {
        $data["subnav"] = array('btn' => 'btn btn-danger');
        $this->template->title = 'UMS &raquo; Add User';
        $this->template->content = View::forge('user/add', $data);
    }

    public function post_add()
    {
        $user = new Model_User();
        $user->name = Input::post("user_name");
        $user->phone = Input::post("user_phone");
        $user->email = Input::post("user_email");
        $user->address = Input::post("user_addr");
        if ($user->save()) {
            Session::set_flash('success', "Create user $user->name successfully!");
            Response::redirect('user/index');
        } else {
            Session::set_flash('error', "Fail to create user!");
            Response::redirect('user/index');
        }
    }

    public function action_index()
    {
        $users = Model_User::find('all', array('order_by' => array('id' => 'desc'),));
        $data["subnav"] = array('index' => 'btn btn-warning');
        $data["users"] = $users;
        $this->template->title = 'UMS &raquo; User';
        $this->template->content = View::forge('user/index', $data);
    }

    public function get_edit($id)
    {
        $user = Model_User::find($id);
        if ($user == null) {
            return Response::forge(Presenter::forge('welcome/404'), 404);
        } else {
            $data["subnav"] = array('btn' => 'btn btn-danger');
            $data["user"] = $user;
            $this->template->title = "UMS &raquo; $user->name";
            $this->template->content = View::forge('user/edit', $data);
        }
    }

    public function post_edit($id)
    {
        $user = Model_User::find($id);
        $user->name = Input::post("user_name");
        $user->phone = Input::post("user_phone");
        $user->email = Input::post("user_email");
        $user->address = Input::post("user_addr");
        if ($user->save()) {
            Session::set_flash('success', "Update user successfully!");
        } else {
            Session::set_flash('error', "Fail to update user!");
        }
        Response::redirect('user/index');
    }

    public function action_delete($id)
    {
        $user = Model_User::find($id);
        if ($user == null) {
            return Response::forge(Presenter::forge('welcome/404'), 404);
        } else {
            if ($user->delete()) {
                Session::set_flash('success', "Delete user successfully!");
            } else {
                Session::set_flash('error', "Fail to delete user!");
            }
            Response::redirect('user/index');
        }
    }
}
