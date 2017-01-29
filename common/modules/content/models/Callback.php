<?php

namespace common\modules\content\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $message
 */
class Callback extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required', 'message' => 'Это поле обязательно для заполнения.'],
            [['message'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }

    /**
     * @return array
     */
    public static function getFields()
    {
        return [
            'name'  => 'string',
            'email'  => 'string',
            'message'  => 'text',
        ];
    }

    /**
     * @return string
     */
    public static function getTemplate()
    {
        return '{update} {delete}';
    }

    public function sendMessage()
    {
        $htmlBody = "<b>Имя: </b>$this->name<br><b>E-mail: </b>$this->email<br><b>Сообщение: </b>$this->message";

        return Yii::$app->mailer->compose()
            ->setSubject('Обратная связь')
            ->setFrom(Yii::$app->mailer->getTransport()->getUsername())
            ->setTo(Yii::$app->params['adminEmail'])
            ->setHtmlBody($htmlBody)
            ->send();
    }
}
