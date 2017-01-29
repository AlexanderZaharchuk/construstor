<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\modules\content\models\CommandsPhoto;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Commands Photos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commands-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'photo',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(BACKEND_IMG.$model->formName().'/'.$model->photo, ['width' => '100px']);
                },
            ],
            [
                'label' => 'Player',
                'value' => function ($model) {
                    return CommandsPhoto::getLastName($model->player_id);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>
</div>
