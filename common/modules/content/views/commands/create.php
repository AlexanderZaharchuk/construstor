<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\content\models\Commands */

$this->title = Yii::t('app', 'Create Commands');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Commands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
