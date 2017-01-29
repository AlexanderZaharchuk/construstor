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
class Casting extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'casting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'photo', 'capture', 'price'], 'required'],
//            [['id'], 'integer'],
//            [['capture', 'price'], 'string', 'max' => 255],
//            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['name', 'date', 'tel'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'date' => Yii::t('app', 'Date'),
            'tel' => Yii::t('app', 'Tel'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'name' => 'string',
            'date' => 'string',
            'tel' => 'string',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }

    public static function getCastingItems()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
