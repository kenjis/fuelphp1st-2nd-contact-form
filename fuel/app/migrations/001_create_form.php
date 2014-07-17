<?php

namespace Fuel\Migrations;

class Create_form
{
	public function up()
	{
		\DBUtil::create_table('form', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 100, 'type' => 'varchar'),
			'comment' => array('constraint' => 400, 'type' => 'varchar'),
			'ip_address' => array('constraint' => 39, 'type' => 'varchar'),
			'user_agent' => array('constraint' => 512, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('form');
	}
}