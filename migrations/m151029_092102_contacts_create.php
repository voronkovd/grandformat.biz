<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_092102_contacts_create extends Migration
{
    public function up()
    {
        $this->insert('contacts', ['content' => 'Россия, г. Новосибирск, ']);
        $this->insert('contacts', ['content' => 'ул. Коммунистическая, д. 43']);
        $this->insert('contacts', ['content' => 'тел./факс: +7 (383) 218-​14-​53, 218-​15-​00']);
        $this->insert('contacts', ['content' => 'E-​mail: office@​grandformat.​biz']);
        $this->insert('contacts', ['content' => 'Web: http://​www.​grandformat.​biz']);
        $this->insert('contacts', ['content' => '646156767 (ICQ-​консультант)']);
    }

    public function down()
    {
        $this->truncateTable('contacts');
    }

}
