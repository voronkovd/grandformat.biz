<?php

namespace app\models;

use Yii;

class Contacts extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'contacts';
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
