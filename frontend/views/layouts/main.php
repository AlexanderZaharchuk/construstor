<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\modules\auth\widgets\Login\Login;
use common\modules\auth\models\LoginForm;
use common\modules\auth\widgets\Reg\Reg;
use common\modules\auth\models\RegForm;

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
                'action' => '/user/login'
            ]) ?>
            <?= Reg::widget([
                'model' => new RegForm(),
                'action' => '/user/signup'
            ]) ?>
        <?php else: ?>
            
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
