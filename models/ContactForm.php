<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $comment;
    public $w;
    public $h;
    public $count;
    public $type;
    public $source;

    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            ['email', 'email'],
            [['w', 'h', 'count'], 'number'],
            [['type', 'h', 'source'], 'safe'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'name'=>'ФИО',
            'email'=>'Email',
            'phone'=>'Телефон',
            'comment'=>'Комментарий',
            'w'=>'Ширина, м',
            'h'=>'Высота, м',
            'count'=>'Количество, шт.',
        ];
    }


    public function contact($email)
    {
        $type = TypePrints::find()->where(['id'=>$this->type])->one();
        $source = SourcePrints::find()->where(['id'=>$this->source])->one();
        $body = "Клиент, телефон, email: $this->name, $this->phone, $this->email \n";
        if (!empty($type) && !empty($source)) {
            $body .= "Тип печати, материал: $type->name, $source->name \n";
        }
        $body .= "Ширина, высота, количество: $this->w, $this->h, $this->count \n";
        if (!empty($this->comment)){
            $body .= "Комментарий: $this->comment\n";
        }

        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject('Заявка на сайте')
                ->setTextBody($body)
                ->send();

            return true;
        }
        return false;
    }
}
