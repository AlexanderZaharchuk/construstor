<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.10.16
 * Time: 19:53
 */

namespace common\modules\auth\models\frontend;


use common\modules\auth\models\User;
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
        $rules['required'] = [['user_name', 'password'], 'required'];
        $rules['string'] = [['user_name', 'password'], 'string', 'max' => 255];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels['user_name'] = Yii::t('app', 'User name');
        $labels['password'] = Yii::t('app', 'Password');
        return $labels;
    }

    public function reg()
    {
        $user = new User();
        $user->user_name = $this->user_name;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        $user->photo = $this->upload();
        $user->name = $this->name;
        $user->status = 0;

        return $user->save() ? $user : null;
    }
}
