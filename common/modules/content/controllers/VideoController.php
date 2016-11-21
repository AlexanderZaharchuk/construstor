<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Video;

class VideoController extends CrudController
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
     * @return Video
     */
    public function getModel()
    {
        return new Video();
    }
}
