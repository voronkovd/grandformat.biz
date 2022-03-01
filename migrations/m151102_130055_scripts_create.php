<?php

use yii\db\Schema;
use yii\db\Migration;

class m151102_130055_scripts_create extends Migration
{
    public function up()
    {
        $this->insert('scripts', ['name' => 'Скрипт метрики']);
        $this->insert('scripts', ['name' => 'Скрипт карты', 'content'=>'<a class="dg-widget-link" href="http://2gis.ru/novosibirsk/firm/141265769951860/center/82.92336702346803,55.02407393405549/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Новосибирска</a><div class="dg-widget-link"><a href="http://2gis.ru/novosibirsk/firm/141265769951860/photos/141265769951860/center/82.92336702346803,55.02407393405549/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/novosibirsk/center/82.92337,55.023837/zoom/16/routeTab/rsType/bus/to/82.92337,55.023837╎Большой Формат-Новосибирск, ООО, рекламно-производственная компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Большой Формат-Новосибирск, ООО, рекламно-производственная компания</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":587,"height":587,"borderColor":"#a3a3a3","pos":{"lat":55.02407393405549,"lon":82.92336702346803,"zoom":16},"opt":{"city":"novosibirsk"},"org":[{"id":"141265769951860"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>']);
    }

    public function down()
    {
        $this->truncateTable('scripts');
    }
}
