<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "about_school_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property string $link
 */
class AboutSchoolPhoto extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_school_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'photo', 'link'], 'required'],
//            [['id'], 'integer'],
            [['photo', 'link'], 'string', 'max' => 255],
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
            'link' => 'Link (заполняется автоматически после сохранения)',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'photo'  => 'image',
            'link'  => 'string',
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
        $this->link = BACKEND_IMG.$this->formName().'/'.$this->photo;
        return parent::beforeSave($insert);
    }
}
