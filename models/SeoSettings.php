<?php

namespace app\models;

use Yii;

class SeoSettings extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'seo_settings';
    }

    public function rules()
    {
        return [[['value'], 'string']];
    }

    public function attributeLabels()
    {
        return ['value' => 'Значение'];
    }
}
