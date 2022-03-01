<?php

namespace app\models;

use Yii;

class Scripts extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'scripts';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    public function attributeLabels()
    {
        return ['content' => 'Скрипт'];
    }
}
