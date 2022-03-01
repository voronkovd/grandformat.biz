<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_072918_file_create extends Migration
{
    public function up()
    {
        $this->insert('files', ['name' => 'Прайс']);
        $this->insert('files', ['name' => 'Банер']);
    }

    public function down()
    {
        $this->truncateTable('files');
    }

}
