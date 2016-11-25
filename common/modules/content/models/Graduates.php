<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "graduates".
 *
 * @property integer $id
 * @property string $photo
 * @property string $name
 */
class Graduates extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'graduates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['photo', 'name'], 'required'],
            [['photo', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'photo' => Yii::t('app', 'Photo'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'photo' => 'image',
            'name' => 'string',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        $this->photo = $this->upload();
        return parent::beforeSave($insert);
    }
    
    public static function getAllGraduates()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
