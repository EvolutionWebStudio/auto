<?php

class m140617_215422_change_cijena_type extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('car','cijena','int(11) NULL');
	}

	public function down()
	{
		$this->alterColumn('car','cijena','varchar(45) NULL');
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