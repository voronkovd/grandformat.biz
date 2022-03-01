<?php

namespace app\models;

use Yii;


class Requisites extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'requisites';
    }

    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string', 'max' => 256]
        ];
    }

    public function attributeLabels()
    {
        return ['content' => 'Запись'];
    }
}
