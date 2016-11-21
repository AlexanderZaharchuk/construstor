<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Honors;

class HonorsController extends CrudController
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
     * @return Honors
     */
    public function getModel()
    {
        return new Honors();
    }
}
