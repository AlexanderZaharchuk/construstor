<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\content\models\search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Commands');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commands-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Commands'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
        $columns[] = ['class' => 'yii\grid\SerialColumn'];
        foreach ($model::getFields() as $key => $item) {
            if ($item !== 'image') {
                $columns[] = $key;
            } else {
                $columns[] = [
                    'attribute' => $key,
                    'format' => 'html',
                    'value' => function ($model) use ($key) {
                        return Html::img('/files/'.$model->formName().'/'.$model->$key, ['width' => '100px']);
                    },
                ];
            }
        }
        $columns[] = [
            'class' => 'yii\grid\ActionColumn',
            'template' => $model::getTemplate()
        ];
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
    ]); ?>
</div>
