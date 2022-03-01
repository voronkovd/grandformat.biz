<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_064926_social_network_create extends Migration
{
    public function up()
    {
        $this->insert('social_network', ['name' => 'linkedin']);
        $this->insert('social_network', ['name' => 'facebook', 'link'=>'http://www.facebook.com/grandformat']);
        $this->insert('social_network', ['name' => 'twitter', 'link'=>'http://twitter.com/grandformat_nsk']);
    }

    public function down()
    {
        $this->truncateTable('social_network');
    }

}
