<?php

namespace common\modules\content\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii;

/**
 * Class CommonModel
 * @package common\modules\content\models
 */
class CommonModel extends ActiveRecord
{
    /**
     * A field for loading the default file
     *
     * @var
     */
    public $file;

    /**
     * Save the file to a folder
     *
     * @param $field
     * @return bool
     */
    public function upload($field = 'file')
    {
        $this->$field = UploadedFile::getInstance($this, $field);
        if ($this->$field->saveAs(Yii::getAlias(YII_BACKEND).'files/'.$this->formName().'/'.$this->$field)) {
            return $this->$field->name;
        }

        return false;
    }

    /**
     * The fields for output
     * It must be redefined
     *
     * @return array
     */
    public static function getFields()
    {
        return [];
    }

    /**
     * The pattern of possible actions
     * It must be redefined
     *
     * @return string
     */
    public static function getTemplate()
    {
        return '';
    }
}
