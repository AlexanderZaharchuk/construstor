<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\content\models\search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', $model->formName());
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= $model->formName() ?>-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $denyCreate = [
            'Contacts'
        ]; ?>
    <p>
        <?php if (!in_array($model->formName(), $denyCreate)): ?>
            <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    </p>
    <?php
        $columns[] = ['class' => 'yii\grid\SerialColumn'];
        foreach ($model::getFields() as $key => $item) {
            switch ($item) {
                case 'image':
                    $columns[] = [
                        'attribute' => $key,
                        'format' => 'html',
                        'value' => function ($model) use ($key) {
                            return Html::img('/files/'.$model->formName().'/'.$model->$key, ['width' => '100px']);
                        },
                    ];
                    break;
                case 'data':
                    $columns[] = [
                        'class' => 'yii\grid\DataColumn',
                        'attribute' => $key,
                        'value' => function ($model) use ($key) {
                            return date("Y-m-d H:i:s", $model->$key);
                        },
                    ];
                    break;
                case 'CKEditor':
                    $columns[] = [
                        'format' => 'raw',
                        'attribute' => $key,
                        'value' => function ($model) use ($key) {
                            return StringHelper::truncate($model->$key, 50);
                        }
                    ];
                    break;
                default:
                    $columns[] = [
                        'attribute' => $key,
                        'value' => function ($model) use ($key) {
                            return StringHelper::truncate($model->$key, 50);
                        }
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
