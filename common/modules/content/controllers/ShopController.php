<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Shop;

class ShopController extends CrudController
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
     * @return Shop
     */
    public function getModel()
    {
        return new Shop();
    }
}
