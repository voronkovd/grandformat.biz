<?php

use yii\db\Schema;
use yii\db\Migration;

class m151123_092941_add_price_one_more_column extends Migration
{
    public function up()
    {

        $this->truncateTable('source_prints');
        $this->addColumn('source_prints', 'price_two', Schema::TYPE_MONEY . ' NOT NULL');
        $this->insert('source_prints', ['name' => 'Баннер литой 520 гр', 'type_print_id' => 1, 'price' => 220.00, 'price_two' => 200.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 340 гр', 'type_print_id' => 1, 'price' => 150.00, 'price_two' => 130.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 440 гр', 'type_print_id' => 1, 'price' => 160.00, 'price_two' => 150.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 510 гр Starflex', 'type_print_id' => 1, 'price' => 180.00, 'price_two' => 165.00]);
        $this->insert('source_prints', ['name' => 'Баннер транслюцентный', 'type_print_id' => 1, 'price' => 340.00, 'price_two' => 320.00]);
        $this->insert('source_prints', ['name' => 'Баннер Blockout (печать с двух сторон)', 'type_print_id' => 1, 'price' => 400.00, 'price_two' => 350.00]);
        $this->insert('source_prints', ['name' => 'Бумага BlueBack (с синей подложкой)', 'type_print_id' => 1, 'price' => 100.00, 'price_two' => 90.00]);
        $this->insert('source_prints', ['name' => 'Бумага постерная', 'type_print_id' => 1, 'price' => 200.00, 'price_two' => 150.00]);
        $this->insert('source_prints', ['name' => 'Бумага синтетическая для скроллеров', 'type_print_id' => 1, 'price' => 320.00, 'price_two' => 300.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка', 'type_print_id' => 1, 'price' => 220.00, 'price_two' => 200.00]);
        $this->insert('source_prints', ['name' => 'самоклеящаяся пленка транслюцентная', 'type_print_id' => 1, 'price' => 370.00, 'price_two' => 350.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка перфорированная', 'type_print_id' => 1, 'price' => 400.00, 'price_two' => 400.00]);
        $this->insert('source_prints', ['name' => 'Сетка Starflex', 'type_print_id' => 1, 'price' => 220.00, 'price_two' => 220.00]);
        $this->insert('source_prints', ['name' => 'Полиэстр', 'type_print_id' => 1, 'price' => 200.00, 'price_two' => 180.00]);
        $this->insert('source_prints', ['name' => 'Пластик рулонный (для призматронов)', 'type_print_id' => 1, 'price' => 400.00, 'price_two' => 400.00]);

        $this->insert('source_prints', ['name' => 'Баннер литой 520 гр (Европа)', 'type_print_id' => 2, 'price' => 300.00, 'price_two' => 300.00]);
        $this->insert('source_prints', ['name' => 'Баннер ламинированный 440 гр', 'type_print_id' => 2, 'price' => 250.00, 'price_two' => 250.00]);
        $this->insert('source_prints', ['name' => 'Баннер Blockout (печать с двух сторон)', 'type_print_id' => 2, 'price' => 650.00, 'price_two' => 650.00]);
        $this->insert('source_prints', ['name' => 'Баннер транслюцентный', 'type_print_id' => 2, 'price' => 360.00, 'price_two' => 360.00]);
        $this->insert('source_prints', ['name' => 'Бумага постерная', 'type_print_id' => 2, 'price' => 220.00, 'price_two' => 220.00]);
        $this->insert('source_prints', ['name' => 'Бумага синтетическая (для скроллеров)', 'type_print_id' => 2, 'price' => 320.00, 'price_two' => 320.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка (Европа)', 'type_print_id' => 2, 'price' => 300.00, 'price_two' => 300.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка (Китай)', 'type_print_id' => 2, 'price' => 280.00, 'price_two' => 280.00]);
        $this->insert('source_prints', ['name' => 'С/к пленка OraJet3461 (мономерная, серый клей)', 'type_print_id' => 2, 'price' => 320.00, 'price_two' => 320.00]);
        $this->insert('source_prints', ['name' => 'С/к пленка OraJet 970 с ламинацией (литая, 200мкр)', 'type_print_id' => 2, 'price' => 2000.00, 'price_two' => 2000.00]);
        $this->insert('source_prints', ['name' => 'С/к пленка OraJet 3551 с лам. (полимерная, ан. 3М SC37)', 'type_print_id' => 2, 'price' => 1500.00, 'price_two' => 1500.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка транслюцентная', 'type_print_id' => 2, 'price' => 450.00, 'price_two' => 450.00]);
        $this->insert('source_prints', ['name' => 'Самоклеящаяся пленка перфорированная', 'type_print_id' => 2, 'price' => 470.00, 'price_two' => 470.00]);
        $this->insert('source_prints', ['name' => 'Полиэстр', 'type_print_id' => 2, 'price' => 300.00, 'price_two' => 300.00]);
        $this->insert('source_prints', ['name' => 'Фотобумага', 'type_print_id' => 2, 'price' => 550.00, 'price_two' => 550.00]);
        $this->insert('source_prints', ['name' => 'Холст', 'type_print_id' => 2, 'price' => 500.00, 'price_two' => 500.00]);
        $this->insert('source_prints', ['name' => 'Пленка 3M Contraltac 162-10 с лам. (напольная)', 'type_print_id' => 2, 'price' => 2000.00, 'price_two' => 2000.00]);
        $this->insert('source_prints', ['name' => 'Пленка светонакопительная LG', 'type_print_id' => 2, 'price' => 2000.00, 'price_two' => 2000.00]);
    }

    public function down()
    {
    }
}
