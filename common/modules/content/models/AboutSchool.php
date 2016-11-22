<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "about_school".
 *
 * @property integer $id
 * @property string $text
 */
class AboutSchool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
        ];
    }


    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'text'  => 'CKEditor',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }
    
    public static function getAllTextAboutSchool()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
