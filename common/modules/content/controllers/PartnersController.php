<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Partners;

class PartnersController extends CrudController
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
     * @return Partners
     */
    public function getModel()
    {
        return new Partners();
    }
}
