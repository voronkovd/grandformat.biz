<?php

use yii\db\Schema;
use yii\db\Migration;

class m151130_084620_add_skype_contact extends Migration
{
    public function up()
    {
        $this->insert('contacts', ['content' => 'Skype: bf-novosibirsk']);

    }

    public function down()
    {
        echo "m151130_084620_add_skype_contact cannot be reverted.\n";

        return false;
    }

}
