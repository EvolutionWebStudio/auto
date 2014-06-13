<?php

class m140613_071053_initial extends CDbMigration
{
	public function up()
	{
		$db = $this->getDbConnection();
		$query = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'autorasevic.sql');
		$transaction = $db->beginTransaction();
		$db->createCommand($query)->execute();
		$transaction->commit();
	}

	public function down()
	{
		echo "m140613_071053_initial does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}