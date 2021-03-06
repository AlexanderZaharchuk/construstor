<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property string $video
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video'], 'required'],
            [['video'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'video' => Yii::t('app', 'Video'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'video' => 'string',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }
    
    public static function getAllVideos()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
