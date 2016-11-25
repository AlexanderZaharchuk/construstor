<?php

namespace common\modules\auth\models;

use yii;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $password_hash
 * @property boolean $remember_me
 * @property integer $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCK = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name'], 'required'],
            [['user_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'photo' => Yii::t('app', 'Photo'),
            'name' => Yii::t('app', 'Name'),
            'created_at' => Yii::t('app', 'Registration data'),
        ];
    }

    /* Поведения */

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public static function findByUsername($username)
    {
        return static::findOne([
            'user_name' => $username,
        ]);
    }

    /* Хелперы */
    
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    
    public static function getStatus()
    {
        $status = Yii::$app->user->identity['status'];
        return !empty($status) ? $status : false;
    }

    /* Аутентификация пользователей */

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
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
}
