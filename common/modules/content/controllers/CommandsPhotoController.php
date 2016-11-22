<?php

namespace common\modules\content\controllers;

use common\modules\content\models\CommandsPhoto;

class CommandsPhotoController extends CrudController
{
    /**
     * @var array
     */
    public $allow = [
        'index',
        'create',
        'update',
    ];

    public function actions()
    {
        $model = $this->getModel();
        $actions = parent::actions();
        $actions['create'] = [
            'class' => 'common\modules\content\components\CreateAction',
            'model' => $model,
            'view' => '@common/modules/content/views/commands-photo/create'
        ];
        $actions['index'] = [
            'class' => 'common\modules\content\components\IndexAction',
            'model' => $model,
            'params' => [
                'query' => $model::find()
            ],
            'view' => '@common/modules/content/views/commands-photo/index'
        ];
        $actions['update'] = [
            'class' => 'common\modules\content\components\UpdateAction',
            'model' => $model,
            'view' => '@common/modules/content/views/commands-photo/update'
        ];

        return $actions;
    }

    /**
     * @return CommandsPhoto
     */
    public function getModel()
    {
        return new CommandsPhoto();
    }
}
