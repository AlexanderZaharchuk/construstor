<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id
 * @property string $photo
 * @property string $capture
 * @property string $price
 */
class Shop extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'photo', 'capture', 'price'], 'required'],
//            [['id'], 'integer'],
            [['photo', 'capture', 'price'], 'string', 'max' => 255],
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
            'capture' => 'Capture',
            'price' => 'Price',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'photo' => 'image',
            'capture' => 'string',
            'price' => 'string',
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