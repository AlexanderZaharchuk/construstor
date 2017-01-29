<!-- BEGIN PAGE FOOTER
================================================== -->
<div class="wrapper-page-footer" style="background-color: #1d3708;overflow: hidden">
    <div class="row">
        <div class="col-lg-6  col-lg-offset-3">
            <div class="page-footer">

                <h3>партнёры и Спонсоры</h3>

                <div class="page-footer__parner-items" id="slider-partner">

                    <?php foreach ($partners as $item): ?>
                        <div class="page-footer__item">
                            <a href="http://www.<?= $item->link ?>">
                                <img class="img-responsive"
                                     src="<?= BACKEND_IMG . $item->formName() . '/' . $item->photo ?>"
                                     alt="partner">
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN PAGE FOOTER
================================================== -->
