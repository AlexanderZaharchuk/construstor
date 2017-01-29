<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\content\models\Commands */

$this->title = Yii::t('app', 'Обновить {modelClass}: ', [
    'modelClass' => Yii::t('app', $model->formName()),
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', $model->formName()), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="commands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
