<?php

namespace app\models;

use Yii;
use yii\base\Model;

class BackCallForm extends Model
{
    public $name;
    public $theme;
    public $phone;
    public $time;
    public $verifyCode;
    public $times = [
        'Как можно скорее',
        'С 9:00 до 11:00',
        'С 11:00 до 13:00',
        'С 13:00 до 14:00',
        'С 14:00 до 19:00',
    ];

    public function rules()
    {
        return [
            [['name', 'phone', 'time', 'theme'], 'required'],
            ['time', 'in', 'range' => [0, 1, 2, 3, 4]],
         //   ['phone', 'match', 'pattern' => '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'ФИО',
            'phone' => 'Номер телефона',
            'time' => 'Удобное время для звонка',
            'verifyCode' => 'Код',
            'theme'=>'Тема обращения'
        ];
    }

    public function contact($email)
    {
        $body = "$this->name просит перезвонить ему по номеру: $this->phone\n";
        $time = $this->times[$this->time];
        $body .= "В период: $time \n";
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom($email)
                ->setSubject($this->theme)
                ->setTextBody($body)
                ->send();
            return true;
        }
        return false;
    }
}