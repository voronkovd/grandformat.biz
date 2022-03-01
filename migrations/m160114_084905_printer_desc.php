<?php

use yii\db\Schema;
use yii\db\Migration;

class m160114_084905_printer_desc extends Migration
{
    public function up()
    {
        $this->addColumn('printers', 'desc', Schema::TYPE_STRING . '(256) DEFAULT NULL');
    }

    public function down()
    {
        echo "m160114_084905_printer_desc cannot be reverted.\n";

        return false;
    }

}
