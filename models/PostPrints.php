<?php

namespace app\models;

use Yii;


class PostPrints extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'post_prints';
    }

    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    public function attributeLabels()
    {
        return ['name' => 'Наименование', 'price' => 'Цена'];
    }

    public function price_clear()
    {
        return number_format(floatval($this->price), 2, '.', ',');
    }
}
