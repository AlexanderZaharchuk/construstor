<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.11.16
 * Time: 12:42
 */

namespace common\modules\auth\controllers;

use common\modules\auth\models\User;
use yii\web\Controller;
use yii;

class AjaxController extends Controller
{
    public function actionCheckedStatus() {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post('record');
            $query = User::find()->where(['id' => $data['id']])->one();
            $query->status = $data['checked'];
            if ($query->save(false)) {
                Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                return $query->user_name;
            }
        }

        return false;
    }
}
