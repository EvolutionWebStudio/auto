<?php

class m140616_204339_change_image_order_in_sort extends CDbMigration
{
	public function up()
	{
		$this->addColumn('image','sort','int(11) Null');
		$this->dropColumn('image','order');
	}

	public function down()
	{
		$this->dropColumn('image','sort');
		$this->addColumn('image','order','int(11) Null');
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