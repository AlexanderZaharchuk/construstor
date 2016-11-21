<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Graduates;

class GraduatesController extends CrudController
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
     * @return Graduates
     */
    public function getModel()
    {
        return new Graduates();
    }
}
