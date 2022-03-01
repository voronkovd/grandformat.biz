<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_065138_seo_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('seo_settings', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(128) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'value' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('seo_settings');
    }

}
