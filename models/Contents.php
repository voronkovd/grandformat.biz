<?php

namespace app\models;

use Yii;

class Contents extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'contents';
    }

    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 128]
        ];
    }

    public function attributeLabels()
    {
        return ['title' => 'Заголовок', 'content' => 'Текст'];
    }
}
