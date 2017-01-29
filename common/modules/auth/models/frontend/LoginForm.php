<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.10.16
 * Time: 20:32
 */

namespace common\modules\auth\models\frontend;

use common\modules\auth\models\User;
use yii;
use yii\base\Model;

/**
 * This is the model class for table "user".
 *
 * @property string $user_name
 * @property string $password
 * @property string $remember_me
 * @property string $status
 */
class LoginForm extends Model
{
    public $user_name;
    public $password;
    public $remember_me;
    public $status;

    private $_user = false;

    public function rules()
    {
        return [
            [['user_name', 'password'], 'required'],
            [['user_name', 'password'], 'string', 'max' => 255],
            ['remember_me', 'boolean'],
            ['password', 'validatePasswordAndUsername'],
        ];
    }

    public function validatePasswordAndUsername($attribute)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('app', 'Incorrect username or password'));
            }
        }
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->user_name);
        }

        return $this->_user;
    }

    public function attributeLabels()
    {
        return [
            'user_name' => Yii::t('app', 'User name'),
            'password' => Yii::t('app', 'Password'),
            'remember_me' => Yii::t('app', 'Remember me'),
        ];
    }

    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            return Yii::$app->user->login($user, $this->remember_me ? 3600*24*30 : 0);
        }

        return false;
    }
}
