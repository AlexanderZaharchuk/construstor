<?php

namespace frontend\models;


use common\modules\auth\models\RegForm;
use yii;

class UserRegForm extends RegForm
{
    public $user_name;
    public $password;
    public $photo;
    public $name;

    public function rules()
    {
        $rules = parent::rules();
        $rules['photo'] = [['photo', 'name'], 'required'];
        $rules['name'] = [['photo', 'name'], 'string', 'max' => 255];
        return $rules;
    }
    
    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['photo'] = Yii::t('app', 'Photo');
        $labels['name'] = Yii::t('app', 'Name');
    }
    
    public function reg()
    {
        $user = parent::reg();
        $user->photo = $this->photo;
        $user->name = $this->name;
        $user->status = 0;

        return $user->save() ? $user : null;
    }
}
