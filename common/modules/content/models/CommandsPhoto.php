<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "commands_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property string $name
 */
class CommandsPhoto extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commands_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['photo', 'name'], 'required'],
            [['photo', 'player_id'], 'string', 'max' => 255],
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
            'player_id' => 'Player id',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'player_id' => 'string',
            'photo' => 'image',
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

    public static function getDropDownList()
    {
        $query = Commands::find()->select(['id', 'category', 'first_name', 'last_name'])->all();
        $result = [];
        foreach ($query as $item) {
            $result[$item->id] = $item->category.' '.$item->first_name.' '.$item->last_name;
        }

        return $result;
    }

    public static function getLastName($player_id)
    {
        $query = Commands::find()->where(['id' => $player_id])->one();
        $result = $query->category.' '.$query->first_name.' '.$query->last_name;

        return $result;
    }
}
