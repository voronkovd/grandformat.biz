<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_072832_file_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('files', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'value' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('files');
    }

}
