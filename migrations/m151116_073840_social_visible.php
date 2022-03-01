<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_073840_social_visible extends Migration
{
    public function up()
    {

        $this->addColumn('social_network', 'visible', Schema::TYPE_BOOLEAN . ' DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn('social_network', 'visible');
    }
}
