<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_052552_content_create extends Migration
{
    public function up()
    {
        $this->insert('contents',
            [
                'title' => 'Единый стандарт качества',
                'content' => 'Современное оборудование и высококвалифицированные специалисты позволяют выполнять печатные работы любой степени сложности с единым стандартом качества.'
            ]);
        $this->insert('contents',
            [
                'title' => 'Один подрядчик - Один звонок - один заказ',
                'content' => 'Все просто, понятно, вовремя. С вами работает персональный менеджер, который точно знает, на какой стадии находится ваш заказ и, когда вы его получите.'
            ]);
        $this->insert('contents',
            [
                'title' => 'Большой объем - низкая цена',
                'content' => 'Мы работаем с большими объемами печати и все расходные материалы закупаются с минимальными наценками, поэтому наши клиенты не переплачивают.'
            ]);
        $this->insert('contents',
            [
                'title' => 'Доставка по России',
                'content' => 'Мы доставляем все заказы в оговоренные сроки в любой город России. Доставка осуществляеться транспортной компанией <a href="http://nrg-tk.ru/">«Энергия»</a>'
            ]);
    }

    public function down()
    {
        $this->truncateTable('contents');
    }

}
