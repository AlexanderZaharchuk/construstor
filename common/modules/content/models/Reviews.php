<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $photo
 * @property string $content
 */
class Reviews extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['photo', 'content'], 'required'],
//            [['content'], 'string'],
//            [['photo'], 'string', 'max' => 255],
            [['photo', 'name', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'photo' => Yii::t('app', 'Photo'),
            'content' => Yii::t('app', 'Content'),
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
            'content' => 'text',
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
        $this->photo = $this->upload('photo');
        $this->content = Yii::$app->request->post('Reviews')['content'];
        return parent::beforeSave($insert);
    }
    
    public static function getAllReviews()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
