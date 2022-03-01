<?php

use yii\db\Schema;
use yii\db\Migration;

class m151026_065144_seo_create extends Migration
{
    public function up()
    {
        $this->insert('seo_settings',
            [
                'name' => 'Заголовок страницы (html title)',
                'description' => 'По тексту заголовка пользователь получает дополнительную информацию,
                что это за сайт, на котором он находится и как называется текущая страница',
            ]);
        $this->insert('seo_settings', [
            'name' => 'Описание страницы (html description)',
            'description' => 'Большинство поисковых серверов отображают содержимое поля description
                при выводе результатов поиска. ',
        ]);
        $this->insert('seo_settings', [
            'name' => 'Ключевые слова страницы (html keywords)',
            'description' => 'Этот метатег был предназначен для описания ключевых слов,
                встречающихся на странице',
        ]);
    }

    public function down()
    {
        $this->truncateTable('seo_settings');
    }

}
