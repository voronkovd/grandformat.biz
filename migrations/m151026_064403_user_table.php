<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_064403_user_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('users', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . '(32) NOT NULL',
            'auth_key' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . '(60) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('users');
    }

}
