<?php

namespace common\modules\content\models;

use kcfinder\session;
use Yii;

/**
 * This is the model class for table "commands".
 *
 * @property integer $id
 * @property string $category
 * @property string $photo
 * @property string $first_name
 * @property string $last_name
 */
class Commands extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'category', 'photo', 'first_name', 'last_name'], 'required'],
//            [['id'], 'integer'],
            [['capture', 'category', 'photo', 'first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'photo' => 'Photo',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'capture' => 'Capture',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'category'  => 'string',
            'photo' => 'image',
            'first_name' => 'string',
            'last_name' => 'string',
            'capture' => 'text',
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

    public static function getAllCommands()
    {
        $commands = self::find()->groupBy('category')->all();
        foreach ($commands as $value) {
            $category[$value->category] = self::find()->where(['category' => $value->category])->all();
        }

        return isset($category) ? $category : [];
    }
}
