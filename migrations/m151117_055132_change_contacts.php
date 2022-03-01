<?php

use yii\db\Migration;
class m151117_055132_change_contacts extends Migration
{
    public function up()
    {
        $this->insert('contacts', ['content' => 'ул. Воинская, 230/3. Тел. 200-37-30']);
    }

    public function down()
    {
        echo "m151117_055132_change_contacts cannot be reverted.\n";

        return false;
    }
}
