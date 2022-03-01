<?php

namespace app\models;

use Yii;


class TypePrints extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'type_prints';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    public function attributeLabels()
    {
        return ['name' => 'Наименование'];
    }

    public function getSourcePrints()
    {
        return $this->hasMany(SourcePrints::className(), ['type_print_id' => 'id']);
    }
}
