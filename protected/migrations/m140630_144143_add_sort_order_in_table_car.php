<?php

class m140630_144143_add_sort_order_in_table_car extends CDbMigration
{
	public function up()
	{
		$this->addColumn('car', 'sort_order', 'integer');
	}

	public function down()
	{
		$this->dropColumn('car', 'sort_order');
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