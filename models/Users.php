<?php

namespace app\models;

use PHPUnit\Framework\IncompleteTest;
use Yii;
use yii\web\IdentityInterface;

class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public $current_password;
    public $new_password;
    public $confirm_password;

    public $authKey;

    public function rules()
    {
        return [
            [['login'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'username' => 'Username',
            'password' => 'Password',
            'login'=>'Login',
            //'full_name' => 'Full Name',
            //'status' => 'Status',
            //'role' => 'Role',
            //'created_at' => 'Created At',
            'id' => 'ID',
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
        return $this->authKey;
    }
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    public static function findByUsername($username)
    {
        return static::findOne(['login' => $username]);
    }
    public function validatePassword($password)
    {
        if (md5($password, $this->password)) {
            return true;
        }else{
            return false;
        }
    }
}