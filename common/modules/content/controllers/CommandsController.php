<?php

namespace common\modules\content\controllers;

use Yii;
use common\modules\content\models\Commands;
use yii\filters\VerbFilter;

/**
 * Class CommandsController
 * @package common\modules\content\controllers
 */
class CommandsController extends CrudController
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
     * @return Commands
     */
    public function getModel()
    {
        return new Commands();
    }
}
