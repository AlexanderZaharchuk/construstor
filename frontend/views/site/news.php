<?= $this->render('@frontend/views/layouts/_header', [
    'shop' => $shop,
    'news' => $news,
]); ?>
<div class="wrapper-all-content" xmlns="http://www.w3.org/1999/html">
        <div class="page-personal-area">
            <div class="container">
                <div class="row">

<div class="row">
    <h2 class="text-center">
        "Новость ФК ★Звёзды★"
    </h2>
    <div class="col-lg-1">
        <span class="data-news"><?= date("d.m.Y", $news->created_at) ?></span>
    </div>
    <div class="col-lg-11 text-center">
                            <span class="page-personal-area__text">
                            <?= $news->content ?>
                            </span>
    </div>
</div>
                </div>
            </div>
        </div>
</div>
<?= $this->render('@frontend/views/layouts/_footer', [
    'partners' => $partners
]); ?>
