<?php

namespace common\modules\content\controllers;


use common\modules\auth\models\User;
use common\modules\content\models\Commands;
use common\modules\content\models\CommandsPhoto;
use yii\web\Controller;
use yii;
use yii\web\Response;

class AjaxController extends Controller
{
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionGetPlayerData()
    {
        $id = Yii::$app->request->post('id');
        $capture = Commands::find()->select('capture')->where(['id' => $id])->one();
        $photo = CommandsPhoto::find()->select('photo')->where(['player_id' => $id])->all();
        $result['capture'] = $capture->capture;

        foreach ($photo as $item) {
            $result['photo'][] = $item->photo;
        }
        
        $result['domain'] = BACKEND_IMG.'CommandsPhoto/';

        Yii::$app->response->format = Response::FORMAT_JSON;

        return $result;
    }

    public function actionGetUsername()
    {
        $username = Yii::$app->request->post()['user_name'];
        $model = User::find()->where(['user_name' => $username])->one();
        if ($model) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}
