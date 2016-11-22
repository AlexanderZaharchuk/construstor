<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "honors".
 *
 * @property integer $id
 * @property string $photo
 */
class Honors extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'honors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['photo'], 'required'],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
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
    
    public static function getAllHonors()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
