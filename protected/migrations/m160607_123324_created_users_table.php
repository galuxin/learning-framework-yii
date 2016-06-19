<?php
/*
The following was extract from the yii CDbSchema::getColumnType. It maps the string value defined in yii migration.

pk: an auto-incremental primary key type, will be converted into “int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY”
string: string type, will be converted into “varchar(255)”
text: a long string type, will be converted into “text”
integer: integer type, will be converted into “int(11)”
boolean: boolean type, will be converted into “tinyint(1)”
float: float number type, will be converted into “float”
decimal: decimal number type, will be converted into “decimal”
datetime: datetime type, will be converted into “datetime”
timestamp: timestamp type, will be converted into “timestamp”
time: time type, will be converted into “time”
date: date type, will be converted into “date”
binary: binary data type, will be converted into “blob”
To create migration:   yiic migrate create target_db_operation

To run migration:  yiic migrate

Note:  you need to configure db connection in  config/console.php.

*/
class m160607_123324_created_users_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
			'id_user' => 'pk', // int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
			'email' => 'string NOT NULL', //varchar(255)
			'password' => 'string NOT NULL',
			'name' => 'string NOT NULL',
			'role' => 'integer NOT NULL',//int(11)
		));
	}

	public function down()
	{
		$this->dropTable('users');
	}
}
