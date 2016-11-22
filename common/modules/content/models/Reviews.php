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
            [['photo'], 'string', 'max' => 255],
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
            'content' => 'Content',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'photo' => 'image',
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
        $this->photo = $this->upload();
        $this->content = Yii::$app->request->post('Reviews')['content'];
        return parent::beforeSave($insert);
    }
    
    public static function getAllReviews()
    {
        $query = self::find()->all();
        
        return $query;
    }
}
