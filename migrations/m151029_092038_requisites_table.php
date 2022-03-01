<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_092038_requisites_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('requisites', [
            'id' => Schema::TYPE_PK,
            'content' => Schema::TYPE_STRING . '(256) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('requisites');
    }
}
