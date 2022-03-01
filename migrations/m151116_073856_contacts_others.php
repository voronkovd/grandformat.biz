<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_073856_contacts_others extends Migration
{
    public function up()
    {
        $this->insert('contacts', ['content' => 'Адрес производства: г. Новосибирск, ул. Воинская, 230/3. Тел. 200-37-30']);
    }

    public function down()
    {
        echo "m151116_073856_contacts_others cannot be reverted.\n";

        return false;
    }

}
