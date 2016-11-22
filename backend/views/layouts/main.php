<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
    <?php
    NavBar::begin([
        'brandLabel' => Yii::t('app', 'Admin panel'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
        if (Yii::$app->params['registration']) {
            $menuItems[] = ['label' => Yii::t('app', 'Registration'), 'url' => ['/site/reg']];
        }
    } else {
        $menuItems = [
            ['label' => Yii::t('app', 'Users'), 'url' => ['/auth/auth/index']],
            ['label' => Yii::t('app', 'Shop'), 'url' => ['/content/shop']],
            ['label' => Yii::t('app', 'News'), 'url' => ['/content/news']],
            [
                'label' => 'Команды',
                'items' => [
                    ['label' => Yii::t('app', 'Команды'), 'url' => ['/content/commands']],
                    ['label' => Yii::t('app', 'Добавить фото для игрока'), 'url' => ['/content/commands-photo']],
                ],
            ],
            [
                'label' => 'About School',
                'items' => [
                    ['label' => Yii::t('app', 'Add photo'), 'url' => ['/content/about-school-photo']],
                    ['label' => Yii::t('app', 'Add reviews'), 'url' => ['/content/about-school']],
                ],
            ],
            ['label' => Yii::t('app', 'Photo'), 'url' => ['/content/photo']],
            ['label' => Yii::t('app', 'Video'), 'url' => ['/content/video']],
            ['label' => Yii::t('app', 'Graduates'), 'url' => ['/content/graduates']],
            ['label' => Yii::t('app', 'Honors'), 'url' => ['/content/honors']],
            ['label' => Yii::t('app', 'Reviews'), 'url' => ['/content/reviews']],
            ['label' => Yii::t('app', 'Partners'), 'url' => ['/content/partners']],
        ];
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->user_name . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>

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
