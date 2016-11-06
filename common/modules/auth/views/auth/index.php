<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\auth\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('/js/checkedStatus.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'id' => 'auth-grid',
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_name',
            //'password_hash',
            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function($model) {
                    return ['checked' => (boolean)$model->status];
                },
                'header' => Yii::t('app', 'Статус'),
            ],
            //'remember_me',
            // 'auth_key',
            [
                'attribute' => 'photo',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img('/files/' . $model->photo, ['width' => '100px']);
                },
            ],
             'name',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date("Y-m-d", $model->created_at);
                },
            ],
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<div class="alert">
    
</div>