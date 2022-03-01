<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_064415_user_create extends Migration
{
    public function up()
    {
        $this->insert('users',
            [
                'username' => 'admin',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password' => Yii::$app->security->generatePasswordHash('admin'),
            ]);
    }

    public function down()
    {
        $this->truncateTable('users');
    }

}
