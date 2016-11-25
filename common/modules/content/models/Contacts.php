<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $address
 * @property string $telephone
 * @property string $email
 */
class Contacts extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['address', 'telephone', 'email'], 'required'],
            [['address', 'telephone', 'email', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address' => Yii::t('app', 'Address'),
            'telephone' => Yii::t('app', 'Telephone'),
            'email' => Yii::t('app', 'Email'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'address' => 'string',
            'description' => 'CKEditor',
            'telephone' => 'string',
            'email' => 'string',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update}';
    }

    public static function getContact()
    {
        $query = Contacts::find()->one();

        return $query;
    }
}
