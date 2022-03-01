<?php

namespace app\models;

use Yii;


class SourcePrints extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'source_prints';
    }


    public function rules()
    {
        return [
            [['type_print_id', 'name', 'price', 'price_two'], 'required'],
            [['type_print_id'], 'integer'],
            [['price'], 'number'],
            [['price', 'price_two'], 'number'],
            [['name'], 'string', 'max' => 128]
        ];
    }


    public function attributeLabels()
    {
        return [
            'type_print_id' => 'Тип Печати',
            'name' => 'Наименование',
            'price' => 'Цена',
            'price_two' => 'Сетевые форматы'
        ];
    }

    public function getTypePrint()
    {
        return $this->hasOne(TypePrints::className(), ['id' => 'type_print_id']);
    }

    public function price_clear()
    {
        return number_format(floatval($this->price), 2);
    }

    public function price_two_clear()
    {
        return number_format(floatval($this->price_two), 2);
    }
}
