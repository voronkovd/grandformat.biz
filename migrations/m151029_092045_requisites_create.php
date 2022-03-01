<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_092045_requisites_create extends Migration
{
    public function up()
    {

        $this->insert('requisites', ['content' => 'ООО "Большой Формат - Новосибирск"']);
        $this->insert('requisites', ['content' => 'юр. адрес: 630110 г. Новосибирск, ул. Б.Хмельницкого, 71']);
        $this->insert('requisites', [
            'content' => 'почт. адрес: 630011 г. Новосибирск, ул. Красный проспект, 18, а/я 8'
        ]);
        $this->insert('requisites', ['content' => 'Тел: +7 (383) 218-​14-​53']);
        $this->insert('requisites', ['content' => 'ИНН 5410788440']);
        $this->insert('requisites', ['content' => 'КПП 541001001']);
        $this->insert('requisites', ['content' => 'р/с 40702810611010010130']);
        $this->insert('requisites', ['content' => 'в Филиале "Новосибирский" ЗАО "ГЛОБЭКСБАНК"']);
        $this->insert('requisites', ['content' => 'к/с 30101810150040000747']);
        $this->insert('requisites', ['content' => 'БИК 045004747']);
    }

    public function down()
    {
        $this->truncateTable('requisites');
    }

}
