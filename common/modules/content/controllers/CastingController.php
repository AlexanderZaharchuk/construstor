<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Casting;
use common\modules\content\models\Shop;

class CastingController extends CrudController
{
    /**
     * @var array
     */
    public $allow = [
        'index',
        'update',
    ];
    
    /**
     * @return Casting
     */
    public function getModel()
    {
        return new Casting();
    }
}
