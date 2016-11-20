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
    public $allow = [
        'index',
        'create',
        'update',
    ];

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @return Commands
     */
    public function getModel()
    {
        return new Commands();
    }
}
