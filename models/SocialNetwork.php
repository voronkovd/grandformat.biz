<?php

namespace app\models;

use Yii;

class SocialNetwork extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'social_network';
    }

    public function rules()
    {
        return [
            [['link'], 'string', 'max' => 128], [['link'], 'url'],
            ['visible', 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return ['link' => 'Ссылка', 'visible'=>'Отображать'];
    }
}
