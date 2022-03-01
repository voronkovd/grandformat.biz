<?php

use yii\db\Schema;
use yii\db\Migration;

class m151102_130049_scripts_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('scripts', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'content' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('scripts');
    }
}
