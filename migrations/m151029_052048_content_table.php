<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_052048_content_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('contents', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(128) NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('contents');
    }

}
