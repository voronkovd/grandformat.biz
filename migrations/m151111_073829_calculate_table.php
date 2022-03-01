<?php

use yii\db\Schema;
use yii\db\Migration;

class m151111_073829_calculate_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('type_prints', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
        ], $tableOptions);
        $this->createTable('source_prints', [
            'id' => Schema::TYPE_PK,
            'type_print_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'price' => Schema::TYPE_MONEY . ' NOT NULL'
        ], $tableOptions);
        $this->createTable('post_prints', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'price' => Schema::TYPE_MONEY . ' NOT NULL'
        ], $tableOptions);
        $this->addForeignKey('source_print_type_print_key', 'source_prints', 'type_print_id', 'type_prints', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('source_print_type_print_key', 'source_prints');
        $this->dropTable('source_prints');
        $this->dropTable('type_prints');
        $this->dropTable('post_prints');
    }

}
