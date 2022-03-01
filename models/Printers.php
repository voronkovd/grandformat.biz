<?php

namespace app\models;

use Yii;

class Printers extends \yii\db\ActiveRecord
{
    public $old_image;
    public $old_document;
    public $old_desc;

    public static function tableName()
    {
        return 'printers';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['document', 'desc'], 'file', 'extensions' => 'xls, csv, pdf, zip, rar, tar'],
            [['old_image', 'old_document', 'old_desc'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return ['title' => 'Заголовок', 'image' => 'Изображение',
            'document' => 'Документ', 'desc'=>'Файл описания'];
    }
}
