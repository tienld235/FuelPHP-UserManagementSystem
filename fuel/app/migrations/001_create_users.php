<?php

namespace Fuel\Migrations;

class Create_users
{
    public function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
            'name' => array("type" => 'varchar', 'constraint' => 100),
            'address' => array("type" => 'varchar', 'constraint' => 255),
            'phone' => array('type' => 'varchar', 'constraint' => 50),
            'email' => array('type' => 'varchar', 'constraint' => 255),
            'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
            'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
        ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}