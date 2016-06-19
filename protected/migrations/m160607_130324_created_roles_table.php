<?php

class m160607_130324_created_roles_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('roles', array(
			'id_role' => 'pk', // int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
			'name' => 'string NOT NULL',
		));
    $this->renameColumn('users', 'role', 'id_role');
    $this->addForeignKey('users_roles_fk', 'users', 'id_role', 'roles', 'id_role', 'RESTRICT', 'CASCADE');
	}

	public function down()
	{
    $this->dropForeignKey('users_roles_fk', 'users');
    $this->renameColumn('users', 'id_role', 'role');
		$this->dropTable('roles');
	}
}
