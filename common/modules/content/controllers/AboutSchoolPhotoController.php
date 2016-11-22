<?php

namespace common\modules\content\controllers;

use common\modules\content\models\AboutSchoolPhoto;

class AboutSchoolPhotoController extends CrudController
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
     * @return AboutSchoolPhoto
     */
    public function getModel()
    {
        return new AboutSchoolPhoto();
    }
}
