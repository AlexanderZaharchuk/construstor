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
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
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
        $this->photo = $this->upload('photo', $this->formName());
        return parent::beforeSave($insert);
    }
}
