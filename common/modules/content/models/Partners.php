<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $photo
 */
class Partners extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'photo'], 'required'],
//            [['id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'photo' => Yii::t('app', 'Photo'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'photo' => 'image',
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
    
    public static function getAllPartners()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
