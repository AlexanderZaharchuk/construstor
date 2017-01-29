<?php $route = Yii::$app->request->get('r'); ?>
<!--============ BEGIN header-->

<nav class="navbar navbar-default  navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-1  col-sm-5">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img class="navbar-brand  img-circle "
                             src="img/foot_small.jpg"
                             alt="Logotype">
                <span class="hidden-sm  hidden-xs">
                фш звёзды
              </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6  col-lg-offset-1  col-sm-7">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav  navbar-nav  navbar-nav__top">

                        <li class="navbar-nav__top-first-item">
                            <a href="<?php echo !\common\modules\auth\models\User::getStatus() ? '#loginform' : '?r=site/user' ?>">
                                Личный кабинет
                            </a>
                        </li>

                        <?php if($route == 'site/index' || $route == '') : ?>
                        <li>
                            <a href="#casting">
                                <button class="btn  btn-top-nav" type="button" id="#">
                                    Записаться на просмтотр
                                </button>
                            </a>
                        </li>
                        <?php endif; ?>

                        <li>

                            <ul class="social-links">
                                <!--<li class="pull-left">-->
                                <!--<a class="social-links__link" href="#" title=""-->
                                <!--target="_blank">-->
                                <!--<i class="fa fa-facebook"></i>-->
                                <!--</a>-->
                                <!--</li>-->
                                <li class="pull-left">
                                    <a class="social-links__link"
                                       href="https://vk.com/club_fc_stars" title="go to VK"
                                       target="_blank">
                                        <i class="fa fa-vk"></i>
                                    </a>
                                </li>
                                <li class="pull-left">
                                    <a class="social-links__link"
                                       href="https://www.youtube.com/channel/UCmvb8PeYwkTwnI5JmEh1"
                                       title="go to Youtube"
                                       target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>

                                <li class="pull-left">
                                    <a class="social-links__link"
                                       href="https://www.instagram.com/school_football_stars/"
                                       title=""
                                       target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <!--<li class="pull-left">-->
                                <!--<a class="social-links__link" href="#" title=""-->
                                <!--target="_blank">-->
                                <!--<i class="fa fa-twitter"></i>-->
                                <!--</a>-->
                                <!--</li>-->

                                <!--<li class="pull-left">-->
                                <!--<a class="social-links__link" href="#" title=""-->
                                <!--target="_blank">-->
                                <!--<i class="fa fa-google-plus"></i>-->
                                <!--</a>-->
                                <!--</li>-->
                            </ul>
                        </li>
                    </ul>

                    <?php if($route == 'site/index' || $route == '') : ?>
                    <ul class="nav navbar-nav  navbar-nav__bottom">
                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#ageGroups">
                                возрасные группы
                            </a>
                        </li>
                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#aboutSchool">
                                о школе
                            </a>
                        </li>

                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#galleryLink">
                                галерея
                            </a>
                        </li>

<!--                        <li class="navbar-nav__bottom-items">-->
<!--                            <a class="navbar-nav__bottom-item pull-left" href="#bewLink">-->
<!--                                новости-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#achievementsLink">
                                достижения
                            </a>
                        </li>
                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#reviewsLink">
                                отзывы
                            </a>
                        </li>

                        <li class="navbar-nav__bottom-items">
                            <a class="navbar-nav__bottom-item pull-left"
                               href="#contactLink">
                                наш адрес
                            </a>
                        </li>
<!--                        <li class="navbar-nav__bottom-items">-->
<!--                            <a class="navbar-nav__bottom-item pull-left" href="#shop">-->
<!--                                магазин-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                    <?php endif; ?>
                </div><!-- /.navbar-collapse -->
            </div>

        </div>


    </div><!-- /.container -->
</nav>

<!--============ END header-->
