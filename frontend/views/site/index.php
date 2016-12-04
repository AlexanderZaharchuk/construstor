    <?= $this->render('@frontend/views/layouts/_header', [
        'shop' => $shop,
        'news' => $news,
    ]); ?>
    <!--begin page-wrapper-->
    <div class="wrapper-all-content">
        <div class="lk">
            <div class="page-personal-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
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
                        <div class="col-lg-1">
                            <span class="data-news"><?= date("d.m.Y", $item->created_at) ?></span>
                        </div>
                        <div class="col-lg-11 text-center">
                            <span class="page-personal-area__text">
                            <?= $item->content ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- BEGIN HEADER-PAGE
      ================================================== -->
        <header class="page-header-top">


            <div class="page-header-top__inner" id="ageGroups">
                <div class="container-fluid">

                    <h2 class="text-center">
                        возрастные группы
                    </h2>

                    <?php foreach ($commands as $key => $item): ?>
                    <!--begin row group-->
                    <div class="row">
                        <h3 class="text-center">
                            <?= $key ?>
                        </h3>

                        <div class="col-lg-12  content-center">

                            <ul class="page-header-top__board-peoples">

                                <?php foreach ($item as $i => $value): ?>
                                <li class="page-header-top__board-people  pull-left  text-center" title="Больше информации о ребенке">
                                    <a href="#" data-toggle="modal" data-target="#myModal" data-id="<?= $value->id ?>">
                                        <img class="img-rounded" src="<?= BACKEND_IMG.$value->formName().'/'.$value->photo ?>" alt="Person">
                                    </a>
                                    <p>
                                      <span>
                                        <?= $value->last_name ?> <br>
                                      </span>
                                      <span>
                                        <?= $value->first_name ?>
                                      </span>
                                    </p>
                                </li>
                                <?php endforeach; ?>

                            </ul>

                        </div>

                    </div>
                    <!--end row group-->
                    <?php endforeach; ?>

                </div>
            </div>


        </header>
        <!-- END HEADER-PAGE
        ================================================== -->


        <!-- BEGIN PAGE CONTENT
      ================================================== -->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <header class="page-content__about-school" id="aboutSchool">
                            <h3 class="text-center">
                                о школе
                            </h3>

                            <?php //TODO сделать вкладку загрузки фото для CKEditor ?>
                            <?php foreach ($aboutSchool as $item): ?>
                                <?= $item->text ?>
                            <?php endforeach; ?>

                        </header>
                    </div>
                </div>

                <!--begin main gallery-->
                <div class="row">
                    <h3 class="text-center" id="galleryLink">
                        Фото
                    </h3>

                    <div class="col-lg-10  col-lg-offset-1  text-center">

                        <div class="main-gallery" id="main-gallery">

                            <?php foreach ($photo as $item): ?>
                            <a class="main-gallery__wrapper-items" href="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>">
                                <img class="img-responsive" src="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>" alt="item-img-gallery">
                            </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!--end main gallery-->

            <!--begin video gallery-->
            <div class="row">

                <h3 class="text-center" id="videoLink">
                    Видео
                </h3>

                <div class="col-lg-8  col-lg-offset-2  text-center">

                    <div class="video-gallery" id="video-gallery">

                        <?php foreach ($video as $item): ?>
                        <div class="wrapper video">
                            <iframe width="560" height="315"
                                    src="<?= $item->video ?>"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>
            <!--end video gallery-->

            <!--begin news-->
            <div class="container">
                <div class="row">
                    <h3 class="text-center" id="bewLink">
                        Наши выпускники
                    </h3>
                    <div class="col-lg-12  text-center">
                        <!--begin page-content__wrappers-news-contents-->
                        <div class="page-content__wrappers-news-contents" id="wrappers-news-contents">

                            <!--begin page-content__wrappers-news-content-->
                            <div class="page-content__wrappers-news-content">

                                <?php foreach ($graduates as $item): ?>
                                <div class="page-content__wrap-item">
                                    <img class="birthday  img-rounded"
                                         src="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>"
                                         alt="Person">

                                    <span class="inf-person">
                                      <?= $item->name ?>
                                    </span>
                                </div>
                                <?php endforeach; ?>

                            </div>

                        </div>
                        <!--end page-content__wrappers-news-content-->
                    </div>
                    <!--end page-content__wrappers-news-contents-->
                </div>
            </div>
        </div>

        <!--end news-->

        <!--begin Hall of Fame-->
        <div class="container">
            <div class="row">
                <h3 class="text-center" id="achievementsLink">
                    Награды
                </h3>

                <div class="col-lg-12  text-center">

                    <div class="page-content__wrapper-hall-fame" id="hall-fame">

                        <?php foreach ($honors as $item): ?>
                        <div class="page-content__wrapper-hf-item">
                            <img style="display: inline-block" src="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>" alt="item">
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>
        </div>

        <!--end Hall of Fame-->

        <!--begin reviews-->
        <div class="container">
            <div class="row">
                <h3 class="text-center" id="reviewsLink">
                    отзывы
                </h3>

                <div class="col-lg-12  text-center">

                    <div class="page-content__wrapper-reviws" id="reviwes">

                        <?php foreach ($reviews as $item): ?>
                        <div class="item-partners__link text-center">
                            <img class="img-rounded"
                                 src="<?= BACKEND_IMG.$item->formName().'/'.$item->photo ?>" alt="list">
                            <p>
                                <?= $item->content ?>
                            </p>
                        </div>
                        <?php endforeach; ?>

                    </div>
                    <!--end reviews-->

                    <!--begin reached-->
                    <div class="row">
                        <div class="col-lg-10  col-lg-offset-1  text-left"
                             style="background-color: #fff;
      margin-bottom: 60px">
                            <div class="page-content__reached">

                                <div class="row">

                                    <div class="col-lg-8 col-xs-12">
                                        <h3 style="color: #000000" id="contactLink">
                                            контакты <br>
                                            схема проезда
                                        </h3>

                                        <div id="map_canvas" style="width: 620px; height: 437px;"></div>

                                    </div>
                                    <div class="col-lg-4  col-xs-12">

                                        <h3 style="color: #000000">
                                            наш адрес:
                                        </h3>

                                        <p>
                                            <span id="addressMap"><?= $contacts->address ?></span><br>
                                            <?= $contacts->description ?><br>
                                            <b>тел.:</b> <?= $contacts->telephone ?> <br>
                                            <b>e-mail:</b> <?= $contacts->email ?>
                                        </p>
                                        <hr>

                                        <h3 style="color: #000000">
                                            обратная связь
                                        </h3>

                                        <?= $this->render('@frontend/views/layouts/_form', [
                                            'callback' => $callback
                                        ]); ?>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end reached-->

                    <?php if(Yii::$app->user->isGuest): ?>
                        <!--begin review-->
                        <div class="row" id="viewing">
                            <div class="col-lg-6  col-lg-offset-3">
                                <h2 id="title-form" class="text-center  title-form-footer"
                                    style="text-decoration: underline; font-weight: 800">
                                    вход
                                </h2>
                                <div class="page-content__form-wrapper" id="form-wrapper">
          <span id="cross" class="cross">
            <i class="fa fa-times fa-2x"></i>
          </span>

                                    <?= \frontend\widgets\Login\Login::widget([
                                        'model' => new \common\modules\auth\models\frontend\LoginForm(),
                                        'action' => '/site/login'
                                    ]) ?>

                                </div>

                            </div>
                        </div>
                        <!--end review-->
                    <?php endif; ?>

                    <?php if(!Yii::$app->user->isGuest): ?>
                        <!--begin review-->
                        <div class="row" id="viewing">
                            <div class="col-lg-6  col-lg-offset-3">
                                <h2 id="title-form" class="text-center  title-form-footer"
                                    style="text-decoration: underline; font-weight: 800">
                                    Выход
                                </h2>
                                <div class="page-content__form-wrapper" id="form-wrapper">
          <span id="cross" class="cross">
            <i class="fa fa-times fa-2x"></i>
          </span>
                                    <?=
                                    \yii\helpers\Html::beginForm(['/site/logout'], 'post')
                                    . \yii\helpers\Html::submitButton(
                                        'Выход (' . Yii::$app->user->identity->user_name . ')',
                                        ['class' => 'btn btn-link']
                                    )
                                    . \yii\helpers\Html::endForm();
                                    ?>
                                </div>

                            </div>
                        </div>
                        <!--end review-->
                    <?php endif; ?>

                    <?php if(Yii::$app->user->isGuest): ?>
                        <!--begin review-->
                        <div class="row" id="viewing">
                            <div class="col-lg-6  col-lg-offset-3">
                                <h2 id="title-form" class="text-center  title-form-footer"
                                    style="text-decoration: underline; font-weight: 800">
                                    регистрация
                                </h2>
                                <div class="page-content__form-wrapper" id="form-wrapper">
          <span id="cross" class="cross">
            <i class="fa fa-times fa-2x"></i>
          </span>
                                    <?= \frontend\widgets\Reg\Reg::widget([
                                        'model' => new \frontend\models\UserRegForm(),
                                        'action' => '/site/reg'
                                    ]) ?>

                                </div>

                            </div>
                        </div>
                        <!--end review-->
                    <?php endif; ?>

                </div>

            </div>
        </div>


        <!-- BEGIN PAGE CONTENT
        ================================================== -->

    </div>
    </div>
    <!-- END PAGE CONTENT
    ================================================== -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6G_Lqqf75Z3Hl8hFwrXGm2tGKl9KVktQ&callback=initMap" async defer></script>

    <?= $this->render('@frontend/views/layouts/_footer', [
        'partners' => $partners
    ]); ?>

    <?= $this->render('@frontend/views/layouts/_modal'); ?>

