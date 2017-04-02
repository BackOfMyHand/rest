<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function setPassword($password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function getId()
    {
        return $this->user_id;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /* Для аутентификации на cookie */
    public function getAuthKey()
    {
        // return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        // return $this->getAuthKey() === $authKey;
    }
}
