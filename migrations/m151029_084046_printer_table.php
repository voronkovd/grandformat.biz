<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_084046_printer_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('printers', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(128) NOT NULL',
            'image' => Schema::TYPE_STRING . '(256) NOT NULL',
            'document' => Schema::TYPE_STRING . '(256) DEFAULT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('printers');
    }

}
