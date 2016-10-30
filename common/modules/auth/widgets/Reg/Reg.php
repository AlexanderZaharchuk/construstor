<?php
namespace common\modules\auth\widgets\Reg;

use yii\base\Widget;

class Reg extends Widget
{
    public $model;
    public $action;

    public function run()
    {
        return $this->render('index', [
            'model' => $this->model,
            'action' => $this->action
        ]);
    }
}
