<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_064916_social_network_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('social_network', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'link' => Schema::TYPE_STRING . '(128)  DEFAULT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('social_network');
    }

}
