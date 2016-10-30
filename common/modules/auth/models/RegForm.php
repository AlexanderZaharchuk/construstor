<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.10.16
 * Time: 19:53
 */

namespace common\modules\auth\models;


use yii\base\Model;
use yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_name
 * @property string $password
 * @property string $photo
 * @property string $name
 */
class RegForm extends Model
{
    public $user_name;
    public $password;
    public $photo;
    public $name;
    
    public function rules()
    {
        return [
            [['user_name', 'password', 'photo', 'name'], 'required'],
            [['user_name', 'password', 'photo', 'name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_name' => Yii::t('app', 'User name'),
            'password' => Yii::t('app', 'Password'),
            'photo' => Yii::t('app', 'Photo'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    public function reg()
    {
        $user = new User();
        $user->user_name = $this->user_name;
        $user->photo = $this->photo;
        $user->name = $this->name;
        $user->status = 0;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
