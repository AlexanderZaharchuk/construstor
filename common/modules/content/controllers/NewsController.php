<?php

namespace common\modules\content\controllers;

use common\modules\content\models\News;

class NewsController extends CrudController
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
     * @return News
     */
    public function getModel()
    {
        return new News();
    }
}
