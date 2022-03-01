<?php

use yii\db\Schema;
use yii\db\Migration;

class m151126_103909_add_skype extends Migration
{
    public function up()
    {

        $this->insert('social_network', ['name' => 'skype', 'link'=>'skype:BF-novosibirsk?call', 'visible'=>1]);
        $this->insert('social_network', ['name' => 'vk', 'link'=>'http://vk.com/bf_nsk', 'visible'=>1]);
    }

    public function down()
    {
        echo "m151126_103909_add_skype cannot be reverted.\n";

        return false;
    }

}
