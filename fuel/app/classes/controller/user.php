<?php

class Controller_User extends Controller_Template
{

	public function action_index()
	{
	    $users = Model_User::find('all');
		$data["subnav"] = array('index'=> 'btn btn-warning');
		$data["users"] = $users;
		$this->template->title = 'UMS &raquo; User';
		$this->template->content = View::forge('user/index', $data);
	}
}
