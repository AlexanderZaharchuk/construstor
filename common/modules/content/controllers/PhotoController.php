<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Photo;

class PhotoController extends CrudController
{
    /**
     * @var array
     */
    public $allow = [
        'index',
        'create',
        'update',
    ];

    /**
     * @return Photo
     */
    public function getModel()
    {
        return new Photo();
    }
}
