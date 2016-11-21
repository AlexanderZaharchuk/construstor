<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Reviews;

class ReviewsController extends CrudController
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
     * @return Reviews
     */
    public function getModel()
    {
        return new Reviews();
    }
}
