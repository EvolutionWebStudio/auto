<?php

class m140614_103303_insert_contact_and_about extends CDbMigration
{
	public function up()
	{
		$db = $this->getDbConnection();
		$query = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'contact_and_about.sql');
		$transaction = $db->beginTransaction();
		$db->createCommand($query)->execute();
		$transaction->commit();
	}

	public function down()
	{
		echo "m140614_103303_insert_contact_and_about does not support migration down.\n";
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