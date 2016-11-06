<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use backend\widgets\Login\Login;
use backend\widgets\Reg\Reg;
use common\modules\auth\models\backend\LoginForm;
use common\modules\auth\models\backend\RegForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <?= Alert::widget() ?>

        <?= $content ?>

        <?php if(Yii::$app->user->isGuest): ?>
            <?= Login::widget([
                'model' => new LoginForm(),
                'action' => '/site/login'
            ]) ?>
            <?php if(Yii::$app->params['registration']): ?>
                    <?= Reg::widget([
                    'model' => new RegForm(),
                    'action' => '/site/reg'
                ]) ?>
            <?php endif; ?>
        <?php else: ?>
            <?=
                Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->user_name . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm();
            ?>
        <?php endif; ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
