<?php

namespace frontend\models;


use common\modules\auth\models\frontend\RegForm;
use yii\web\UploadedFile;
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
        $rules['file'] = [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'];
        return $rules;
    }
    
    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['photo'] = Yii::t('app', 'Photo');
        $labels['name'] = Yii::t('app', 'Name');
    }
    
    public function upload()
    {
        $this->photo = UploadedFile::getInstance($this, 'photo');
        if ($this->photo->saveAs(Yii::getAlias(YII_BACKEND) . 'web/files/' . $this->photo)) {
            return $this->photo->name;
        }

        return false;
    }
}
