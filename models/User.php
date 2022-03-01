<?php


namespace app\models;

use yii\base\NotSupportedException;
use Yii;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{


    public static function tableName()
    {
        return 'users';
    }


    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 60]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
}
