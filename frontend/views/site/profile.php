<?= $this->render('@frontend/views/layouts/_header', [
    'shop' => $shop,
    'news' => $news,
]); ?>
<div class="wrapper-all-content" xmlns="http://www.w3.org/1999/html">
    <div class="page-personal-area">
        <div class="container">
            <div class="row">

<?php if(\common\modules\auth\models\User::getStatus()): ?>
    <div class="lk">
        <div class="page-personal-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="shop">
                        <p class="page-personal-area__number-goods"><span>Количество товаров: </span><span><?= count($shop); ?></span></p>
                        <div class="score">
                            <?php foreach ($shop as $key => $item): ?>
                                <?php $key++; $class = $key == 1 ? "" : "hidden-content" ?>
                                <?= in_array($key, [1, 5])
                                    ? "<div class=\"row {$class}\">"
                                    : "" ?>
                                <div class="col-lg-3 col-xs-6 col-sm-3">
                                    <div class="score__item">
                                        <div class="score__wrap-img"><img style="max-width: 240px; max-height: 240px; height: 100% !important;" class="img-responsive" src="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>"></div>
                                        <div class="score__header">
                                            <h4 class="score__product-description"><?= $item->capture ?></h4><span class="score__price"><?= $item->price ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?= in_array($key, [4, count($shop)])
                                    ? "</div>"
                                    : "" ?>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="score__footer">
                                        <hr><span id="show-items">Показать больше товаров</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h2 class="text-center">
                        "Новости ФК ★Звёзды★"
                    </h2>
                    <?php foreach ($news as $key => $item): ?>
                        <a href="?r=site/news&id=<?= $item->id ?>">
                            <div class="col-lg-1">
                                <span class="data-news"><?= date("d.m.Y", $item->created_at) ?></span>
                            </div>
                            <div class="col-lg-11 text-center">
                            <span class="page-personal-area__text">
                            <?= $item->content ?>
                            </span>
                            </div></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<?php endif; ?>
<?= $this->render('@frontend/views/layouts/_footer', [
    'partners' => $partners
]); ?>
