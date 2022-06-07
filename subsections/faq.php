<?php
global $_TEXT_DATA_;
$questions = $_TEXT_DATA_['section_page_faq']['questions'];
$answers = $_TEXT_DATA_['section_page_faq']['answers'];
?>
<!----------------------------------------------------------------------------------------------------------------------    Lectors part-->
<section class="flat-row faq-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div class="faqs">
                    <div class="row">
                        <div id="accordion" class="accordion">
                            <?php
                            for ($i = 0; $i < count($questions); $i++) {
                                ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $i; ?>">
                                        <a class="faq-header row" data-toggle="collapse"
                                           data-target="#collapse<?php echo $i; ?>" aria-expanded="true"
                                           aria-controls="collapse<?php echo $i; ?>">
                                            <span class="faq-header-text col-xs-12 col-sm-11">
                                                <?php echo $questions[$i]; ?>
                                            </span>
                                            <span class="faq-header-angle col-xs-12 col-sm-1">
                                                <i class="fa">
                                                    <img class="svg" src="icon/Angle/Down.svg" alt="Icon">
                                                </i>
                                            </span>
                                            <span class="clearfix"></span>
                                        </a>
                                        <div id="collapse<?php echo $i; ?>" class="collapse"
                                             aria-labelledby="heading<?php echo $i; ?>"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <?php echo $answers[$i]; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <h3 class="faq-cta">
                    If you didn't find your answer
                </h3>
                <div class="item-btn-holder">
                    <a href="/contact" class="more-link">
                        Contact us <i class="fa"><img class="" src="./icon/Arrow/Right.svg"
                                                           alt="Arrow right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
