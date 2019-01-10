<?php

class Controller_User extends Controller_Template
{

    public function action_index()
    {
        $data["subnav"] = array('index' => 'active');
        $this->template->title = 'UMS &raquo; User';
        $this->template->content = View::forge('user/index', $data);
    }

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
        if($user->save()) {
            Session::set_flash('success', "Create user $user->name successfully!");
            Response::redirect('user/index');
        }else{
            Session::set_flash('error', "Fail to create user!");
            Response::redirect('user/index');
        }
    }
}
