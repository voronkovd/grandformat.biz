<?php

use yii\db\Schema;
use yii\db\Migration;

class m151111_082025_calculate_create extends Migration
{
    public function up()
    {
        $this->insert('type_prints', ['name' => 'Широкоформатная печать 360-540 dpi']);
        $this->insert('source_prints', ['name' => 'Баннер литой 520 гр', 'type_print_id' => 1, 'price' => 230.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 510 гр Starflex', 'type_print_id' => 1, 'price' => 190.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 440 гр', 'type_print_id' => 1, 'price' => 170.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 340 гр', 'type_print_id' => 1, 'price' => 160.00]);
        $this->insert('source_prints', ['name' => 'Баннер транслюцентный', 'type_print_id' => 1, 'price' => 370.00]);
        $this->insert('source_prints', ['name' => 'Баннер Blockout (печать с двух сторон)', 'type_print_id' => 1, 'price' => 410.00]);
        $this->insert('source_prints', ['name' => 'Бумага BlueBack (с синей подложкой)', 'type_print_id' => 1, 'price' => 110.00]);
        $this->insert('source_prints', ['name' => 'Бумага постерная', 'type_print_id' => 1, 'price' => 210.00]);
        $this->insert('source_prints', ['name' => 'Бумага синтетическая для скроллеров', 'type_print_id' => 1, 'price' => 330.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка', 'type_print_id' => 1, 'price' => 230.00]);
        $this->insert('source_prints', ['name' => 'самоклеящаяся пленка транслюцентная', 'type_print_id' => 1, 'price' => 380.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка перфорированная', 'type_print_id' => 1, 'price' => 410.00]);
        $this->insert('source_prints', ['name' => 'Сетка Starflex', 'type_print_id' => 1, 'price' => 230.00]);
        $this->insert('source_prints', ['name' => 'Полиэстр', 'type_print_id' => 1, 'price' => 210.00]);
        $this->insert('source_prints', ['name' => 'Пластик рулонный (для призматронов)', 'type_print_id' => 1, 'price' => 450.00]);
        $this->insert('type_prints', ['name' => 'Интерьерная печать 720 dpi']);
        $this->insert('source_prints', ['name' => 'баннер литой 520 гр (Европа)', 'type_print_id' => 2, 'price' => 330.00]);
        $this->insert('source_prints', ['name' => 'баннер ламинированный 440 гр', 'type_print_id' => 2, 'price' => 270.00]);
        $this->insert('source_prints', ['name' => 'баннер транслюцентный', 'type_print_id' => 2, 'price' => 340.00]);
        $this->insert('source_prints', ['name' => 'баннер Blockout (печать с двух сторон)', 'type_print_id' => 2, 'price' => 720.00]);
        $this->insert('source_prints', ['name' => 'бумага постерная', 'type_print_id' => 2, 'price' => 210.00]);
        $this->insert('source_prints', ['name' => 'самоклеящаяся пленка', 'type_print_id' => 2, 'price' => 300.00]);
        $this->insert('source_prints', ['name' => 'самоклеящаяся пленка транслюцентная', 'type_print_id' => 2, 'price' => 475.00]);
        $this->insert('source_prints', ['name' => 'полиэстр', 'type_print_id' => 2, 'price' => 270.00]);
        $this->insert('source_prints', ['name' => 'фотобумага', 'type_print_id' => 2, 'price' => 420.00]);
        $this->insert('source_prints', ['name' => 'холст', 'type_print_id' => 2, 'price' => 560.00]);
        $this->insert('post_prints', ['name' => 'Карманы по периметру', 'price' => 10.00]);
        $this->insert('post_prints', ['name' => 'Ловерсы по периметру', 'price' => 5.00]);
        $this->insert('post_prints', ['name' => 'Проклейка по периметру', 'price' => 10.00]);
        $this->insert('post_prints', ['name' => 'Поля по 0.1 м', 'price' => 0.00]);
        $this->insert('post_prints', ['name' => 'Обрезка в край', 'price' => 0.00]);
    }

    public function down()
    {
        $this->truncateTable('post_prints');
        $this->truncateTable('source_prints');
        $this->truncateTable('type_prints');
    }

}
