<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Callback;

class CallbackController extends CrudController
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
     * @return Callback
     */
    public function getModel()
    {
        return new Callback();
    }
}
