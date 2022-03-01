<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;


class ChangePasswordForm extends Model
{
    public $password;
    public $passwordConfirm;


    public function rules()
    {
        return [
            [['password', 'passwordConfirm'], 'required'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function savePassword()
    {
        $user = User::find()->where(
            ['username' => Yii::$app->user->identity->username]
        )->one();
        $password = Yii::$app->security->generatePasswordHash($this->password);
        $user->password = $password;
        $user->save();
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Новый пароль',
            'passwordConfirm' => 'Новый пароль еще раз',
        ];
    }
}
