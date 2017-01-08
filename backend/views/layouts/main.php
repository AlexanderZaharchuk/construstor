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
        $menuItems[] = ['label' => Yii::t('app', 'войти'), 'url' => ['/site/login']];
        if (Yii::$app->params['registration']) {
            $menuItems[] = ['label' => Yii::t('app', 'Регистрация'), 'url' => ['/site/reg']];
        }
    } else {
        $menuItems = [
            ['label' => Yii::t('app', 'Users'), 'url' => ['/auth/auth/index']],
            [
                'label' => 'Разделы',
                'items' => [
                    ['label' => Yii::t('app', 'Shop'), 'url' => ['/content/shop']],
                    ['label' => Yii::t('app', 'News'), 'url' => ['/content/news']],
                    ['label' => Yii::t('app', 'Photo'), 'url' => ['/content/photo']],
                    ['label' => Yii::t('app', 'Video'), 'url' => ['/content/video']],
                    ['label' => Yii::t('app', 'Graduates'), 'url' => ['/content/graduates']],
                    ['label' => Yii::t('app', 'Honors'), 'url' => ['/content/honors']],
                    ['label' => Yii::t('app', 'Reviews'), 'url' => ['/content/reviews']],
                    ['label' => Yii::t('app', 'Partners'), 'url' => ['/content/partners']],
                    ['label' => Yii::t('app', 'Contacts'), 'url' => ['/content/contacts']],
                ],
            ],
            [
                'label' => Yii::t('app', 'Commands'),
                'items' => [
                    ['label' => Yii::t('app', 'Commands'), 'url' => ['/content/commands']],
                    ['label' => Yii::t('app', 'Create Commands Photo'), 'url' => ['/content/commands-photo']],
                ],
            ],
            [
                'label' => Yii::t('app', 'About school'),
                'items' => [
                    ['label' => Yii::t('app', 'Add photo'), 'url' => ['/content/about-school-photo']],
                    ['label' => Yii::t('app', 'Add record'), 'url' => ['/content/about-school']],
                ],
            ],
        ];
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->user_name . ')',
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
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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
