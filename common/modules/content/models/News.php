<?php

namespace common\modules\content\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $content
 * @property integer $created_at
 */
class News extends CommonModel
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['content', 'created_at', 'updated_at'], 'required'],
//            [['created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content' => Yii::t('app', 'Content'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'content' => 'CKEditor',
            'created_at' => 'data',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }

    public static function getAllNews()
    {
        $query = self::find()->all();
        
        return $query;
    }

    public static function getNewsById($id)
    {
        $query = self::find()->where(['id' => $id])->one();

        return $query;
    }
}
