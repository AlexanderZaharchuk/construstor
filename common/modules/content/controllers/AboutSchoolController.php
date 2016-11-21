<?php

namespace common\modules\content\controllers;

use common\modules\content\models\AboutSchool;

class AboutSchoolController extends CrudController
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
     * @return AboutSchool
     */
    public function getModel()
    {
        return new AboutSchool();
    }
}
