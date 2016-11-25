<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "photo_video".
 *
 * @property integer $id
 * @property string $photo
 * @property string $video
 */
class Photo extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
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
    
    public static function getAllPhotos()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
