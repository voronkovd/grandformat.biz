<?php

namespace app\models;

use Yii;

class Files extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'files';
    }

    public function rules()
    {
        return [
            [['value'], 'safe'],
            [['value'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, xls, csv, pdf']
        ];
    }


    public function attributeLabels()
    {
        return ['value' => 'Файл'];
    }
}
